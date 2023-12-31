@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row  bg-secondary rounded  justify-content-center mx-0">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded  p-4">
                    <h6 class="mb-4">Create product</h6>
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label"> Title</label>
                            <input type="text" class="form-control" name="name" id="title"
                                aria-describedby="title">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Category Name</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="category_id">
                                <option selected="">Open Parent Category Name</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label"> quantity</label>
                            <input type="number" class="form-control" name="quantity" id="title"
                                aria-describedby="title">
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label"> price</label>
                            <input type="number" class="form-control" name="price" id="title"
                                aria-describedby="title">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label"> Image</label>
                            <input type="file" name="image" class="form-control bg-dark">
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>

            <div class="bg-secondary rounded p-4">
                <h6 class="mb-4">Product Table</h6>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Poduct Name</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                            <tr class="text-center">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->category->name }}</td>
                                <td>
                                    <form action="">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('products.edit', $item->id) }}"
                                                class="btn btn-primary">Edit</a>


                                            <form action="{{ route('products.destroy', $item->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Delete
                                                </button>
                                            </form>


                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
