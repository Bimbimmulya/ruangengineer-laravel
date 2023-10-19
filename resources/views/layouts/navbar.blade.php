<nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="{{url('img/logo-white.png')}}" alt="Logo Karyatama" width="140" height=""/>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav" id="nav-items">
          <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/about">About</a>
          </li>
          <ul class="navbar-nav">
            <li class="nav-item dropdown" data-toggle="dropdown" data-hover="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Service</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/jasa-pembuatan-website">Jasa Pembuatan Website</a></li>
                </ul>
            </li>
        </ul>
        
          <li class="nav-item">
              <a class="nav-link" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
          </li>
      </ul>
      </div>
        <div class="collapse navbar-collapse  justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{url('img/language-in.png')}}" width="30" alt="Langauge ID"></a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><img src="{{url('img/language-in.png')}}" width="30" alt="Langauge ID"> INDONESIA</a></li>
                    <li><a class="dropdown-item" href="#"><img src="{{url('img/language-en.png')}}" width="30" alt="Langauge ID"> ENGLISH</a></li>
                  </ul>
                </li>
          </ul>
        </div>
    </div>
  </nav>