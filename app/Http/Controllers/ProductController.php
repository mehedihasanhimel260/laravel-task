<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        $categories = Category::latest()->get();
        return view('backend.product.index', compact('categories', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = new Product();
        $input->category_id = $request->category_id;
        $input->name = $request->name;
        $input->price = $request->price;
        $input->quantity = $request->quantity;

        if ($image = $request->file('image')) {
            $destinationPath = 'upload/';
            $categoryImage = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
            $input->image = $destinationPath . $categoryImage;
        }
        $input->save();

        $maildata = [
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ];
        SendEmailJob::dispatch($maildata);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->back();
    }
}
