@extends('admin.nav')
@section('content')

<main role="main" class="main-content">
    <div class="container-fluid">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show ">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Edit Category
    
          </h3>
        </div>
        <form action="{{ route('admin.edit-category',$categori->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name Category</label>
                <input type="text" class="form-control" name="name_category" @error('edit_category') is-invalid @enderror value="{{$categori->name_category}}">
                @error('edit_category')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Category</button>
                <a href="{{ url('admin/viewcategory')}}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
    </div>
</main>

@endsection