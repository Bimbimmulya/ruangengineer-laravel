@extends('admin.nav')

@section('content')

<main role="main" class="main-content">
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Edit Artikel
    
          </h3>
        </div>
        <form action="{{ route('admin.edit-artikel',$artikel->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Feature Image</label><br>
                <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{$artikel->alt_image}}" style="width: 20%"> 
                <input type="file" class="form-control" value="{{ asset('storage/' . $artikel->gambar) }}" name="gambar">
            </div>
            <div class="form-group">
                <label>Alt Image (For Feature Image)</label>
                <input type="text" class="form-control" name="alt_image" value="{{$artikel->alt_image}}" required>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" value="{{$artikel->title}}" name="title" required>
            </div>
            <div class="form-group">
                <label>Deskripsi Body</label>
                <input type="text" class="form-control" name="deskripsi" value="{{$artikel->deskripsi}}" required>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" name="slug" value="{{$artikel->slug}}" required>
            </div>
            <div class="form-group">
                <label>Judul Artikel</label>
                <input type="text" class="form-control" name="judul" value="{{$artikel->judul}}" required>
            </div>
            <div class="form-group">
                <textarea name="body" required>{{$artikel->body}}</textarea>
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
                <input type="text" class="form-control" name="author" value="{{$artikel->author}}" required>
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
                <button type="submit" class="btn btn-primary">Update Artikel</button>
                <a href="/admin/view-artikel" class="btn btn-danger">Kembali</a>
            </div>
        </form>
        
    </div>
</main>

@endsection