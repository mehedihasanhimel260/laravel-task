@extends('backend.layout')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row vh-100 bg-secondary rounded  justify-content-center mx-0">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded  p-4">
                    <h6 class="mb-4">Create Category</h6>
                    <form action="{{ route('categories.update', $categories->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" value="{{ $categories->name }}" name="name"
                                id="categoryName" aria-describedby="Category">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
