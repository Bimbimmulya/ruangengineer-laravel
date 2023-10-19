@extends('layouts.main-detail-blog')

@section('content')
@foreach ($data as $item)
<div class="container">
    <div class="row container-detail-artikel">
        <div class="col-12 col-md-12 col-lg-9">
            <div class="sectiom-artikel-detail">
                <div class="heading-datail-artikel">
                    <h1>{{$item->judul}}</h1>
                </div>
                <div class="section-author-detail">
                    <div class="author justify-content-start">
                        <div class="category-detail">
                            <span>{{$item->category->name_category}}</span>
                        </div>
                        <div class="d-flex justify-content-between mt-2 mb-2">
                            <div class="d-flex section-author-date-detail">
                                <div class="ico-news me-4">
                                    <i class="bi bi-clock"></i>
                                    <span>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMM Y', 'id') }}</span>
                                </div>

                                <div class="ico-news">
                                    <i class="bi bi-pencil-square"></i>
                                    <span>{{$item->author}}</span>
                                </div>
                            </div>
                            <div class="section-share-detail d-flex">
                                <div class="heading-share">
                                    <span>Share :</span>
                                </div>
                                <div class="icon-share">
                                    <a href="https://api.whatsapp.com/send?text={{ urlencode($item->judul) }}%20{{ url()->current() }}"
                                        target="_blank">
                                        <i class="bi bi-whatsapp"></i>
                                    </a>
                                </div>
                                <div class="icon-share">
                                    <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ urlencode($item->judul) }}"
                                        target="_blank">
                                        <i class="bi bi-twitter-x"></i>
                                    </a>
                                </div>
                                <div class="icon-share">
                                    <a href="https://www.facebook.com/share.php?u={{ url()->current() }}&t={{ urlencode($item->judul) }}"
                                        target="_blank">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                </div>
                                <div class="icon-share">
                                    <a href="https://www.pinterest.com/pin/create/button/?url={{ url()->current() }}&description={{ urlencode($item->judul) }}"
                                        target="_blank">
                                        <i class="bi bi-pinterest"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-detail-artikel">
                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{$item->alt_image}}" style="width: 100%">
                </div>
                <div id="body">
                    {!! $item->body !!}
                </div>
            </div>
        </div>

        <div class="col-12 col-md-12 col-lg-3">
            <div class="section-recent">
                <div class="heading-recent mt-3">
                    <span>Recent Post</span>
                </div>
                <hr>
                @foreach ($recentArticles as $recentArticle)
                <a href="{{route('detail_artikel', $item->slug)}}" style="color:#252525;text-decoration: none;">
                    <div class="img-recent">
                        <img src="{{ asset('storage/' . $recentArticle->gambar) }}" alt="{{ $recentArticle->alt_image }}">
                    </div>
                    <div class="heading-artikel-recent mt-1">
                        <span>{{ $recentArticle->judul }}</span>
                    </div>
                </a>
                <div class="d-flex mt-2">
                    <div class="ico-news me-4">
                      <i class="bi bi-clock"></i>
                      <span>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMM Y', 'id') }}</span>
                    </div>
  
                    <div class="ico-news">
                      <i class="bi bi-pencil-square"></i>
                      <span>{{$item->author}}</span>
                    </div>
                  </div>
                <hr>
                @endforeach
                
                <div class="heading-category-detail">
                    <span>Category</span>
                    <hr>
                </div>
                @foreach ($categories as $category)
                <ul class="category-recent">
                    <li>{{ $category->name_category }} ({{ $category->artikels_count }})</li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>

    <div class="section-related-artikel">
        <div class="section-heading-related-artikel text-center">
            <h2>Related Artikel</h2>
        </div>
        <div class="row mt-4 mb-5">
            @foreach ($relatedArtikel as $relatedArticle)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <a href="{{route('detail_artikel', $relatedArticle->slug)}}" style="color:#252525;text-decoration: none;">
                    <img class="img-feature-image" src="{{ asset('storage/' . $relatedArticle->gambar) }}" alt="benefit-card-01"/>
                    <div class="text-category-related">
                        <span>{{$relatedArticle->category->name_category}}</span>
                    </div>
                    <h3 class="judul-news-related text-justify">{{$relatedArticle->judul}}</h3>
                </a>
                <div class="d-flex mt-2 mb-4">
                    <div class="ico-news me-4">
                        <i class="bi bi-clock"></i>
                        <span>{{ \Carbon\Carbon::parse($relatedArticle->created_at)->isoFormat('D MMM Y', 'id') }}</span>
                    </div>
                    <div class="ico-news">
                        <i class="bi bi-pencil-square"></i>
                        <span>{{$relatedArticle->author}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endforeach
@endsection
