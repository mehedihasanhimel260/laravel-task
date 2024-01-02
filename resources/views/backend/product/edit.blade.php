@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row vh-100 bg-secondary rounded  justify-content-center mx-0">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded  p-4">
                    <h6 class="mb-4">Update Product</h6>
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label"> Title</label>
                            <input type="text" class="form-control" name="name" id="title"
                                value="{{ $product->name }}" aria-describedby="title">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Category Name</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="category_id">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $product->category_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label"> quantity</label>
                            <input type="number" class="form-control" name="quantity" id="title"
                                value="{{ $product->quantity }}" aria-describedby="title">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label"> price</label>
                            <input type="number" class="form-control" name="price" id="title"
                                value="{{ $product->price }}" aria-describedby="title">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Image</label>
                            <input type="file" name="image" class="form-control bg-dark">
                        </div>
                        <div class="mb-3">
                            <img src="{{ asset($product->image) }}" alt="" height="100px" width="150px">
                        </div>


                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
