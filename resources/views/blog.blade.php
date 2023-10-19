<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Ruang Engineer</title>

    <meta property="og:title" content="Kumpulan Artikel Tentang Dunia Bisnis, Digital Marketing, dan Kisah Inspirasi">
    <meta name="description" content="Dapatkan Panduan dan Informasi Seputar Dunia Bisnis, Digital Marketing, dan Kisah Inspirasi Hanya di Artikel Ruang Engineer">
    <link rel="icon" href="img/fav-ico-ruang-engineer.png" type="image/x-icon" />
    <meta property="og:image" content="img/img-blog.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    
    <link rel="stylesheet" href="css/blog.css">

</head>
<body>
    
    @include('layouts.navbar')
    @include('layouts.main')

    <div class="container">
      <div class="row g-0 section-search-category">
        <div class="col-12 col-md-12 col-lg-6 mt-2">
          <div class="wrap">
            <div class="search">
              <input type="text" class="searchTerm" id="searchTerm" placeholder="What are you looking for?">
              <button type="submit" class="searchButton">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-6 mt-2">
          <ol class="d-flex list-category">
            <li id="category-all" class="active">All</li>
            <li id="category-digital-marketing">Digital Marketing</li>
            <li id="category-tips">Tips</li>
            <li id="category-bisnis">Bisnis</li>
            <li id="category-teknologi">Teknologi</li>
          </ol>
        </div>
      </div>
      {{-- Hasil lain jika pencarian tidak ada --}}
      <div id="searchResults" class="mb-3"></div>

      <!-- Kategori All -->
      <div id="category-all-content">
        <span class="span-news">All</span>
        <div class="row mt-4 mb-5">
          @foreach ($artikel as $item)
            <div class="col-lg-4 col-md-6 col-sm-12">
              <a href="{{route('detail_artikel', $item->slug)}}" style="color:#252525;text-decoration: none;">
                <img class="img-feature-image" src="{{ asset('storage/' . $item->gambar) }}" alt="{{$item->alt_image}}"/>
                <div class="text-category">
                  <span>{{$item->category->name_category}}</span>
                </div>
                <h4 class="judul-news text-justify">{{$item->judul}}</h4>
              </a>
              <div class="d-flex mt-2 mb-4">
                <div class="ico-news me-4">
                  <i class="bi bi-clock"></i>
                  <span>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMM Y', 'id') }}</span>
                </div>

                <div class="ico-news">
                  <i class="bi bi-pencil-square"></i>
                  <span>{{$item->author}}</span>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="pagination justify-content-center">
          {{ $artikel->links() }} <!-- Tampilkan link pagination -->
        </div>
      </div>

      <!-- Kategori Digital Marketing -->
      <div id="category-digital-marketing-content" style="display: none;">
        <span class="span-news">Digital Marketing</span>
        <div class="row mt-4 mb-5">
          @foreach ($digitalMarketing as $item)
            <div class="col-lg-4 col-md-6 col-sm-12">
              <a href="{{route('detail_artikel', $item->slug)}}" style="color:#252525;text-decoration: none;">
                <img class="img-feature-image" src="{{ asset('storage/' . $item->gambar) }}" alt="benefit-card-01"/>
                <div class="text-category">
                  <span>{{$item->category->name_category}}</span>
                </div>
                <h4 class="judul-news text-justify">{{$item->judul}}</h4>
              </a>
              <div class="d-flex mt-2 mb-4">
                <div class="ico-news me-4">
                  <i class="bi bi-clock"></i>
                  <span>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMM Y', 'id') }}</span>
                </div>

                <div class="ico-news">
                  <i class="bi bi-pencil-square"></i>
                  <span>{{$item->author}}</span>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="pagitation justify-content-center">
          {{ $digitalMarketing->links() }} <!-- Tampilkan link pagination -->
        </div>
      </div>

      <!-- Kategori Tips -->
      <div id="category-tips-content" style="display: none;">
        <span class="span-news">Tips</span>
        <div class="row mt-4 mb-5">
          @foreach ($tips as $item)
            <div class="col-lg-4 col-md-6 col-sm-12">
              <a href="{{route('detail_artikel', $item->slug)}}" style="color:#252525;text-decoration: none;">
                <img class="img-feature-image" src="{{ asset('storage/' . $item->gambar) }}" alt="benefit-card-01"/>
                <div class="text-category">
                  <span>{{$item->category->name_category}}</span>
                </div>
                <h4 class="judul-news text-justify">{{$item->judul}}</h4>
              </a>
              <div class="d-flex mt-2 mb-4">
                <div class="ico-news me-4">
                  <i class="bi bi-clock"></i>
                  <span>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMM Y', 'id') }}</span>
                </div>

                <div class="ico-news">
                  <i class="bi bi-pencil-square"></i>
                  <span>{{$item->author}}</span>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="pagitation justify-content-center">
          {{ $tips->links() }} <!-- Tampilkan link pagination -->
        </div>
      </div>

      <!-- Kategori Bisnis -->
      <div id="category-bisnis-content" style="display: none;">
        <span class="span-news">Bisnis</span>
        <div class="row mt-4 mb-5">
          @foreach ($bisnis as $item)
            <div class="col-lg-4 col-md-6 col-sm-12">
              <a href="{{route('detail_artikel', $item->slug)}}" style="color:#252525;text-decoration: none;">
                <img class="img-feature-image" src="{{ asset('storage/' . $item->gambar) }}" alt="benefit-card-01"/>
                <div class="text-category">
                  <span>{{$item->category->name_category}}</span>
                </div>
                <h4 class="judul-news text-justify">{{$item->judul}}</h4>
              </a>
              <div class="d-flex mt-2 mb-4">
                <div class="ico-news me-4">
                  <i class="bi bi-clock"></i>
                  <span>{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMM Y', 'id') }}</span>
                </div>

                <div class="ico-news">
                  <i class="bi bi-pencil-square"></i>
                  <span>{{$item->author}}</span>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="pagitation justify-content-center">
          {{ $bisnis->links() }} <!-- Tampilkan link pagination -->
        </div>
      </div>

      <!-- Kategori Teknologi -->
      <div id="category-teknologi-content" style="display: none;">
        <span class="span-news">Teknologi</span>
        <div class="row mt-4 mb-5">
          @foreach ($teknologi as $item)
            <div class="col-lg-4 col-md-6 col-sm-12">
              <a href="{{route('detail_artikel', $item->slug)}}" style="color:#252525;text-decoration: none;">
                <img class="img-feature-image" src="{{ asset('storage/' . $item->gambar) }}" alt="benefit-card-01"/>
                <div class="text-category">
                  <span>{{$item->category->name_category}}</span>
                </div>
                <h4 class="judul-news">{{$item->judul}}</h4>
              </a>
              <div class="d-flex mt-2 mb-4">
                <div class="ico-news me-4">
                  <i class="bi bi-clock">{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('D MMM Y', 'id') }}</i>
                </div>
                <div class="ico-news">
                  <i class="bi bi-pencil-square">{{$item->author}}</i>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        <div class="pagitation justify-content-center">
          {{ $teknologi->links() }} <!-- Tampilkan link pagination -->
        </div>
      </div>
    </div>
  
  <script>
    // Ambil elemen-elemen yang dibutuhkan
    const allCategory = document.getElementById("category-all");
    const digitalMarketingCategory = document.getElementById("category-digital-marketing");
    const tipsCategory = document.getElementById("category-tips");
    const bisnisCategory = document.getElementById("category-bisnis");
    const teknologiCategory = document.getElementById("category-teknologi");

    // Ambil semua konten kategori
    const allContent = document.getElementById("category-all-content");
    const digitalMarketingContent = document.getElementById("category-digital-marketing-content");
    const tipsContent = document.getElementById("category-tips-content");
    const bisnisContent = document.getElementById("category-bisnis-content");
    const teknologiContent = document.getElementById("category-teknologi-content");

    // Tambahkan event listener untuk setiap kategori
    allCategory.addEventListener("click", () => {
        showContent(allContent);
    });

    digitalMarketingCategory.addEventListener("click", () => {
        showContent(digitalMarketingContent);
    });

    tipsCategory.addEventListener("click", () => {
        showContent(tipsContent);
    });

    bisnisCategory.addEventListener("click", () => {
        showContent(bisnisContent);
    });

    teknologiCategory.addEventListener("click", () => {
        showContent(teknologiContent);
    });

    // Fungsi untuk menampilkan konten kategori yang dipilih dan menyembunyikan yang lain
    function showContent(content) {
        allContent.style.display = "none";
        digitalMarketingContent.style.display = "none";
        tipsContent.style.display = "none";
        bisnisContent.style.display = "none";
        teknologiContent.style.display = "none";

        content.style.display = "block";
    }
  </script>

  <script src="js-admin/app.js"></script>
</body>
</html>
