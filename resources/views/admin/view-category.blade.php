@extends('admin.nav')

@section('content')

<main role="main" class="main-content">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show ">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>   
    @endif 
    <div class="container-fluid">
        <div class="box">
            <div class="box-header d-flex justify-content-between">
                <div>
                    <h1 class="justify-content-start">View Category</h1>
                </div>
                <div class="justify-content-end mb-3">
                    <a href="/admin/create-category" class="btn btn-info"><i class="bi bi-cloud-plus"> Create Category</i></a>
                </div>
            </div>       
        <div class="box-body">
            <table class="table table-bordered" style="width:100%; overflow-x: auto;">
                <thead style="text-align: center; white-space: nowrap">
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                    <tr>
                        <td style="text-align: center">{{$loop->iteration}}</td>
                        <td style="text-align: center">{{$item->name_category}}</td>
                        <td style="text-align: center">{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y', 'id') }}</td>
                        <td style="text-align: center">
                            <button data-bs-target="#exampleModalToggle{{ $item->id }}" data-bs-toggle="modal" class="btn btn-info fe fe-edit"></button>
                            {{-- <a href="{{ route('admin.edit-artikel',$item->id) }}" class="btn btn-info fe fe-edit"></a> --}}
                            <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="btn btn-danger fe fe-trash-2">
                                <span class="fa fa-trash"></span>
                                <form action="{{route ('admin.view-category', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination">
                {{ $category->appends(request()->except('page'))->links() }}
            </div>        
        </div>

        {{-- modal --}}
        @foreach ($category as $item)
        <div class="modal fade" id="exampleModalToggle{{ $item->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.view-category',$item->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Name Category</label>
                                <input type="text" class="form-control" name="name_category" @error('edit_category') is-invalid @enderror value="{{$item->name_category}}">
                                @error('edit_category')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="readMore">Update Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    </div>
</main>
@endsection