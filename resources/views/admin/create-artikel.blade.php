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
        @if (session()->has('failed'))
            <div class="alert alert-success alert-dismissible fade show ">
                {{ session('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>   
        @endif
        <div class="box">
            <div class="box-header">
            <h3 class="box-title">Add New Artikel
        
            </h3>
            </div>
            <form action="{{route ('admin.create-artikel')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                    <label>Feature Image</label>
                    <input type="file" class="form-control" name="gambar" required>
                </div>
                <div class="form-group">
                    <label>Alt Image (For Feature Image)</label>
                    <input type="text" class="form-control" name="alt_image" required>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi Body</label>
                    <input type="text" class="form-control" name="deskripsi">
                </div>
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" required>
                </div>
                <div class="form-group">
                    <label>Judul Artikel</label>
                    <input type="text" class="form-control" name="judul" required>
                </div>
                <div class="form-group">
                    <textarea name="body">
                        Welcome to TinyMCE!
                    </textarea>
                    <script>
                        tinymce.init({
                          selector: 'textarea',
                          plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                          tinycomments_mode: 'embedded',
                          tinycomments_author: 'Author name',
                          mergetags_list: [
                            { value: 'First.Name', title: 'First Name' },
                            { value: 'Email', title: 'Email' },
                          ],
                          ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
                        });
                      </script>
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" name="author" required>
                </div>
                <div class="form-group">
                    <label>Kategori Artikel</label>
                    <select name="categories_id" class="form-control" required>
                        @foreach ($categori as $item)
                          <option value={{$item->id}}>{{$item->name_category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Tambah Artikel</button>
                    <a href="/admin/view-artikel" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection