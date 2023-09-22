@extends('layouts.detail-blog')

@section('content')
@foreach ($data as $item)
    <div class="container">
        <h1>{{$item->judul}}</h1>
        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{$item->alt_image}}">
        <div id="body">
            {!! $item->body !!}
        </div>
    </div
@endforeach
@endsection