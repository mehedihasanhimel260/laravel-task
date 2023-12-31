@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row vh-100 bg-secondary rounded  justify-content-center mx-0">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded  p-4">
                    <h6 class="mb-4">Create Category</h6>
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="name" id="categoryName"
                                aria-describedby="Category">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>

            <div class="bg-secondary rounded p-4">
                <h6 class="mb-4">Category Table</h6>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $item)
                            <tr class="text-center">
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <form action="">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('categories.edit', $item->id) }}"
                                                class="btn btn-primary">Edit</a>
                                            <button type="button" class="btn btn-primary">Delete</button>
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
