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
                    <h1 class="justify-content-start">View Image Content</h1>
                </div>
                <div class="justify-content-end mb-3">
                    <button data-bs-target="#exampleModalToggle" data-bs-toggle="modal" class="btn btn-info"><i class="bi bi-cloud-plus"> Create Image</i></button>
                </div>
        </div>       
        
        <div class="row g-5">
            @foreach($imageContent as $item)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <div class="img-card">
                        <img src="{{ asset('storage/' . $item->image_content) }}" class="img-thumbnail" alt="{{$item->alt_image}}">
                    </div>
                </div>
                <div class="section-copy-delete d-flex justify-content-center py-2">
                    <button class="btn btn-primary copy-url" data-url="{{ asset('storage/' . $item->image_content) }}"><i class="fe fe-copy"></i></button>
                    <a href="javascript:void(0)" onclick="$(this).find('form').submit()" class="btn btn-danger fe fe-trash-2">
                        <span class="fa fa-trash"></span>
                        <form action="{{route ('admin.view-image-content-delete', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const copyButtons = document.querySelectorAll(".copy-url");
        
                copyButtons.forEach(function (button) {
                    button.addEventListener("click", function () {
                        const urlToCopy = this.getAttribute("data-url");
        
                        const tempInput = document.createElement("input");
                        tempInput.value = urlToCopy;
                        document.body.appendChild(tempInput);
                        tempInput.select();
                        document.execCommand("copy");
                        document.body.removeChild(tempInput);
        
                        // Tampilkan pesan atau lakukan tindakan lain setelah menyalin URL
                        alert("URL telah berhasil disalin!");
                    });
                });
            });
        </script>
        

        {{-- modal --}}
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('admin.view-image-content') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="file" class="form-control" name="image_content" @error('image_content') is-invalid @enderror>
                                @error('image_content')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="readMore">Add Image</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
</main>
@endsection