@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row g-5">
        @foreach($artikel as $item) <!-- Memulai perulangan foreach untuk $artikel -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card" style="height: 350px">
                <div class="img-card">
                    <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" style="height: 150px" alt="{{$item->alt_image}}">
                </div>  
                <div class="card-body">
                    <div class="card-category">
                        <span class="card-title">{{$item->category->name_category}}</span>
                    </div>
                    <div class="card-judul">
                        <span class="card-title">{{ $item->judul }}</span>
                    </div>
                    <div class="author-date d-flex justify-content-between">
                        <div class="card-author">
                            <span>{{$item->author}}</span>
                        </div>
                        <div class="card-date">
                            <span>{{$item->created_at}}</span>
                        </div>
                    </div>
                    <p class="card-text">{{ $item->deskripsi }}</p>
                    <a href="{{route('detail_artikel', $item->slug)}}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach <!-- Mengakhiri perulangan foreach -->
    </div>
</div>

@endsection
