@extends('layouts.master')
@section('content')

{{-- hero section --}}
    <section class="bg-hero">
      <h1 class="main-title"><span class="nice-tosca">Jasa Pembuatan Website</span> Murah dan Terpercaya</h1>
      <p class="secondary-text">
        Realisasikan impian bisnis anda dengan desain website profesional dengan harga murah! Temukan paket pembuatan website yang sesuai dengan kebutuhan bisnis anda.
      </p>
      <div class="button-wrapper">
        <a
          href="https://api.whatsapp.com/send?phone=6285281986573&text=Hallo, tolong jelaskan mengenai layanan jasa Anda?"
          class="button-primary"
        >
          <i class="bi bi-whatsapp"></i> Konsultasi Sekararang
        </a>
      </div>

      <div class="img-wrapper">
        <img
          src="assets/images/main-img.png"
          alt="ruangengineer agency"
          class="img-fluid"
        />
      </div>
    </section>

    {{-- our clients --}}
    <section class="wrapper-primary">
      <p class="clients-title">
        Kami sudah dipercaya oleh 50+ bisnis dari berbagai industri
      </p>

      {{-- <div class="container mt-5">
        <div class="slider">
          <div class="slider-item">
            <img
              src="assets/images/rsbintaro.png"
              class="img-fluid gray"
              alt="RS PREMIER BINTARO"
              width="150"
              height="150"
            />
          </div>
          <div class="slider-item">
            <img
              src="assets/images/karyatama.webp"
              class="img-fluid gray"
              alt="Karyatama"
              width="70"
              height="70"
            />
          </div>
          <div class="slider-item">
            <img
              src="assets/images/cahayadhuha-futsal.webp"
              class="img-fluid gray"
              alt="Cahaya Dhuha Futsal"
              width="80"
              height="80"
            />
          </div>
          <div class="slider-item">
            <img
              src="assets/images/kevin-shipping.webp"
              class="img-fluid gray"
              alt="Kevin Shipping"
              width="80"
              height="58"
          />
          </div>
          <div class="slider-item">
            <img
              src="assets/images/ramen.PNG"
              class="img-fluid gray"
              alt="Tuku Ramen"
              width="70"
              height="70"
            />
          </div>
          <div class="slider-item">
            <img
              src="assets/images/visited-rapid-test.webp"
              class="img-fluid gray"
              alt="Visit Rapid Test"
              width="70"
            />
          </div>

        </div>
      </div> --}}

      <div class="swiper mySwiper1" style="max-height: 150px">
            <div class="swiper-wrapper">
              <div class="swiper-slide" style="text-align: center;line-height:100px;border:none">
                    <img
                      src="assets/images/karyatama.webp"
                      class="img-fluid gray"
                      alt="Klien Ruang Engineer - PT. Karya Putera Semare"
                      width="70"
                      height="70"
                    />
              </div>
              <div class="swiper-slide" style="text-align: center;line-height:100px;border:none">
                    <img
                      src="assets/images/rsbintaro.png"
                      class="img-fluid gray"
                      alt="Klien Ruang Engineer - RS PREMIER BINTARO"
                      width="150"
                      height="150"
                    />
              </div>
              <div class="swiper-slide" style="text-align: center;line-height:100px;border:none">
                    <img
                      src="assets/images/cahayadhuha-futsal.webp"
                      class="img-fluid gray"
                      alt="Klien Ruang Engineer - Cahaya Dhuha Futsal"
                      width="80"
                      height="80"
                    />
              </div>
              <div class="swiper-slide" style="text-align: center;line-height:100px;border:none">
                    <img
                      src="assets/images/kevin-shipping.webp"
                      class="img-fluid gray"
                      alt="Klien Ruang Engineer - Kevin Shipping"
                      width="80"
                      height="58"
                    />
              </div>
              <div class="swiper-slide" style="text-align: center;line-height:100px;border:none">
                    <img
                      src="assets/images/ramen.PNG"
                      class="img-fluid gray"
                      alt="Klien Ruang Engineer - Tuku Ramen"
                      width="70"
                      height="70"
                    />
              </div>
              <div class="swiper-slide" style="text-align: center;line-height:100px;border:none">
                    <img
                      src="assets/images/visited-rapid-test.webp"
                      class="img-fluid gray"
                      alt="Klien Ruang Engineer - Visit Rapid Test"
                      width="70"
                    />
              </div>
            </div>
            <div class="swiper-button-nexts next"></div>
            <div class="swiper-button-prevs"></div>
            <div class="swiper-paginations"></div>
          </div>
        </div>
    </section>

    {{-- about --}}
    <section class="wrapper-with-bg-about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="assets/images/testimoni-img.png" class="img-fluid" alt="" />
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <h2 class="about-title">Kami Sebuah Startup Digital Agency</h2>
            <p class="desc-about">
              Ruang Engineer adalah sebuah startup digital agency yang memiliki spesialisasi dalam <span class="nice-tosca">Jasa Pembuatan Website</span>, <span class="nice-tosca">Optimasi SEO</span> dan <span class="nice-tosca">Digital Marketing</span>. Dengan didukung oleh tim yang berpengalaman, kami siap membantu bisnis Anda menjangkau lebih banyak klien dan meraih kesuksesan yang lebih nyata.
            </p>
            <p class="paragraph-content">
              Jadikan kami rekan setia Anda dalam menghadirkan hasil yang nyata dan menggapai potensi penuh bisnis Anda di dunia digital.
            </p>
          </div>
        </div>
      </div>
    </section>

    {{-- vision --}}
    <section class="wrapper-with-bg" id="visimisi">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 mb-5">
            <h2 class="vision-title mb-5">Kami Memiliki Visi dan Misi</h2>
            <h3>Visi</h3>
            <p class="paragraph-content">
              Menjadi penyedia solusi pembuatan website yang terkemuka di Indonesia, memungkinkan setiap bisnis, baik besar maupun kecil, untuk memiliki online presence yang profesional, efisien, dan efektif.
            </p>

            <h3>Misi</h3>
            <p class="paragraph-content">Kami berkomitmen untuk memberikan solusi pembuatan website yang berkualitas tinggi dengan harga terjangkau, dengan menjaga pelayanan pelanggan yang prima, berinovasi secara berkelanjutan, dan membangun kemitraan jangka panjang dengan setiap klien kami.</p>

            <div class="our-achivment">
              <div class="achivment">
                <span class="number-achv">99%</span>
                <div class="achv">
                  <span
                    >Customer <br />
                    Support</span
                  >
                </div>
              </div>
              <div class="achivment">
                <span class="number-achv">216+</span>
                <div class="achv">
                  <span
                    >Completed <br />
                    Projects</span
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="video-container">
              <video width="640" height="360" autoplay loop muted style="border-radius: 10px">
                <source src="assets/images/video.mp4" type="video/mp4">
                Maaf, browser Anda tidak mendukung pemutaran video.
              </video>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- why choose re --}}
    <section class="wrapper-with-bg">
      <h2 class="why-choose-title">
        Kenapa Harus Membuat Website di Ruang Engineer ?
      </h2>
      <p class="sub-why-choose">
        Jika dibandingkan dengan jasa pembuatan website lainnya, Ruang Engineer
        memiliki harga yang relatif lebih murah.Tidak hanya itu, kami memiliki
        keunggulan lainnya, bisa Anda lihat dibawah ini :
      </p>

      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="d-flex gap24 mb-col" style="height:200px">
              <div class="img">
                <img
                  src="assets/images/icons-realtime.png"
                  class="img-why-choose"
                  alt="Proses pembuatan website yang cepat"
                />
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Proses Pembuatan Website Yang Cepat</p>
                <p class="desc">
                  Membangun website dengan cepat tanpa mengorbankan kualitas. Memastikan peluncuran tepat waktu sesuai jadwal yang telah disepakati, Memungkinkan Anda untuk cepat terkoneksi dengan dunia online.
                </p>
              </div>
            </div>

            <div class="d-flex gap24 mb-col" style="height:200px">
              <div class="img">
                <img
                  src="assets/images/icons-support-seo.png"
                  class="img-why-choose"
                  alt="Support SEO"
                />
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Support SEO</p>
                <p class="desc">
                  Memberikan perhatian khusus pada faktor SEO saat membangun website mulai dari struktur code maupun aspek penting lainnya yang ramah mesin pencari untuk membantu website Anda muncul lebih tinggi di hasil pencarian Google.
                </p>
              </div>
            </div>

            <div class="d-flex gap24 mb-col" style="height:200px">
              <div class="img">
                <img
                  src="assets/images/icons-team.png"
                  class="img-why-choose"
                  alt="Didikung team berpengalaman"
                />
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Didukung Tim Berpengalaman</p>
                <p class="desc">
                  Memiliki tim berpengalaman dalam dunia pengembangan web. Dengan pengetahuan mendalam seputar tren desain, teknologi terbaru, dan keahlian yang teruji dalam menciptakan solusi online yang efektif dan berkualitas tinggi untuk klien-klien kami.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-12">
            <div class="d-flex gap24 mb-col" style="height:200px">
              <div class="img">
                <img
                  src="assets/images/icons-responsif.png"
                  class="img-why-choose"
                  alt="Responsive Design"
                />
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Design Website Responsif dan Elegan</p>
                <p class="desc">
                  Tidak hanya dirancang secara estetis, tetapi juga responsif di berbagai perangkat. Desain yang ramah pengguna adalah fokus utama kami, memastikan pengunjung website memiliki pengalaman yang menyenangkan.
                </p>
              </div>
            </div>

            <div class="d-flex gap24 mb-col" style="height:200px">
              <div class="img">
                <img
                  src="assets/images/icons-24jam.png"
                  class="img-why-choose"
                  alt="Layanan Customer 24/7"
                />
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Layanan Prima 24/7</p>
                <p class="desc">
                  Siap memberikan pelayanan terbaik selama 24 jam. Kami selalu siaga kapan pun Anda memerlukan bantuan, baik hal teknis atau pertanyaan terkait proyek, memastikan kepuasan pelanggan adalah prioritas utama kami.
                </p>
              </div>
            </div>

            <div class="d-flex gap24 mb-col" style="height:200px">
              <div class="img">
                <img
                  src="assets/images/icons-gratis-domain.png"
                  class="img-why-choose"
                  alt="Gratis Domain Hosting"
                />
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Gratis Domain, Hosting, & Konsultasi</p>
                <p class="desc">
                  Menawarkan paket lengkap yang mencakup domain, hosting, dan konsultasi tanpa biaya tambahan. Kami berkomitmen untuk memberikan solusi lengkap yang terjangkau dan membantu Anda meraih kesuksesan online.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- our services --}}
    <section class="our-service" id="service">
      <h2 class="why-choose-title">Layanan Kami</h2>
      <p class="sub-why-choose">
        Kami hadir untuk memberikan layanan terbaik bagi bisnis Anda. Segera
        dapatkan pelayanan terbaik kami sekarang juga!
      </p>

      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="assets/images/lpage.jpg" id="bannerImage" class="img-fluid" alt=""  style="border-radius: 15px"/>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="d-flex flex-column service-distance">
              
              <div class="wrapper-service">
                <a onclick="changeImage('assets/images/lpage.jpg')">
                <i class="bi bi-arrow-left-circle"></i>
                <span>Website Landing Page</span>
                </a>
              </div>

              
              <div class="wrapper-service">
                <a onclick="changeImage('assets/images/company-profile.jpg')">
                <i class="bi bi-arrow-left-circle"></i>
                <span>Pembuatan Website Company Profile</span>
                </a>
              </div>
              
              <div class="wrapper-service">
                <a onclick="changeImage('assets/images/e-commerce.jpg')">
                <i class="bi bi-arrow-left-circle"></i>
                <span>Pembuatan Website E-commerce</span>
                </a>
              </div>

              <div class="wrapper-service">
                <a onclick="changeImage('assets/images/blog.jpg')">
                <i class="bi bi-arrow-left-circle"></i>
                <span>Pembuatan Website Blog & Berita</span>
                </a>
              </div>

              <div class="wrapper-service">
                <a onclick="changeImage('assets/images/inventory.jpg')">
                <i class="bi bi-arrow-left-circle"></i>
                <span>Pembuatan Website Inventory</span>
                </a>
              </div>

              <div class="wrapper-service">
                <a onclick="changeImage('assets/images/book-online.jpg')">
                <i class="bi bi-arrow-left-circle"></i>
                <span>Pembuatan Website Booking Online</span>
                </a>
              </div>

              <div class="wrapper-service">
                <a onclick="changeImage('assets/images/seo-optimize.jpg')">
                <i class="bi bi-arrow-left-circle"></i>
                <span>Jasa Optimasi SEO</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- work flow re --}}
    <section class="work-flow">
      <h2 class="why-choose-title" style="margin-bottom: 64px">
        Alur Kerja Ruang Engineer
      </h2>

      <div class="container">
        <div class="row">
          <!-- desktop -->
          <div class="col-md-6 col-sm-12 desktop">
            <div class="step-wrapper">
              <div class="img">
                <img
                  src="assets/images/icons-1.png"
                  alt="Proses Pertama Ruang Engineer"
                />
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Konsultasi Ide dan Kebutuhan Website</p>
                <p class="desc">
                  Pada tahap ini, kami sebut ini adalah tahap brainstorming
                  antara tim kami dan pemilik bisnis. Pada tahap ini pemilik
                  bisnis bisa mendiskusikan ide atau perancanaan website seperti
                  apa yang diinginkan.
                </p>
              </div>
            </div>

            <div class="step-wrapper">
              <div class="img">
                <img
                  src="assets/images/icons-3.png"
                  alt="Proses Ketiga Ruang Engineer"
                />
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Lakukan Pemesanan dan Pembayaran</p>
                <p class="desc">
                  Setalah melewati tahap brainstorm dan memilih domain segara
                  lakukan pemesanan dan pembayaran sesuai paket yang Anda pilih.
                </p>
              </div>
            </div>

            <div class="step-wrapper">
              <div class="img">
                <img
                  src="assets/images/icons-5.png"
                  alt="Proses Kelima Ruang Engineer"
                />
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Website Anda Masuk Proses Pengerjaan</p>
                <p class="desc">
                  Website impian Anda akan dikerjakan oleh tim profesional kami
                  sesuai dengan ide dan perjanjian waktu pengerjaan yang sudah
                  di sepakati bersama tim kami
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 desktop mt">
            <div class="step-wrappers">
              <div class="img">
                <img src="assets/images/2.png" alt="Proses Kedua Ruang Engineer" />
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">
                  Pilih Domain, Hosting dan Template Website
                </p>
                <p class="desc">
                  Setelah menyelesaikan tahap branstorm bersama tim kami,
                  pemilik bisnis bisa memberitahu tampilan website yang
                  diinginkan beserta domain dan hostingnya juga.
                </p>
              </div>
            </div>

            <div class="step-wrappers">
              <div class="img">
                <img
                  src="assets/images/icons-4.png"
                  alt="Proses Keempat Ruang Engineer"
                />
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Kirimkan Asset (konten) Website Anda</p>
                <p class="desc">
                  Kirimkan asset Anda, seperti logo perusahaan, email, no
                  telephone, dan juga gambar-gambar yang ingin dimasukan kedalam
                  website.
                </p>
              </div>
            </div>

            <div class="step-wrappers">
              <div class="img">
                <img
                  src="assets/images/icons-6.png"
                  alt="Proses Terakhir Ruang Engineer"
                />
              </div>
              <div class="desc-why-choose">
                <p class="title-desc mt-3">SELAMAT WEBSITE ANDA SIAP DI GUNAKAN! 🎉</p>
              </div>
            </div>
          </div>
          <!-- desktop -->

          <!-- mobile -->
          <div class="col-sm-12 mobile">
            <div class="step-wrapper">
              <div class="img mb-3">
                <center>
                  <img
                    src="assets/images/icons-1.png"
                    class="img-step"
                    alt="Proses Pertama Ruang Engineer"
                  />
                </center>
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Konsultasi Ide dan Kebutuhan Website</p>
                <p class="desc">
                  Pada tahap ini, kami sebut ini adalah tahap brainstorming
                  antara tim kami dan pemilik bisnis. Pada tahap ini pemilik
                  bisnis bisa mendiskusikan ide atau perancanaan website seperti
                  apa yang diinginkan.
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 mobile">
            <div class="step-wrapper">
              <div class="img mb-3">
                <center>
                  <img
                    src="assets/images/icons-2.png"
                    class="img-step"
                    alt="Proses Kedua Ruang Engineer"
                  />
                </center>
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">
                  Pilih Domain, Hosting dan Template Website
                </p>
                <p class="desc">
                  Setelah menyelesaikan tahap branstorm bersama tim kami,
                  pemilik bisnis bisa memberitahu tampilan website yang
                  diinginkan beserta domain dan hostingnya juga.
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 mobile">
            <div class="step-wrapper">
              <div class="img mb-3">
                <center>
                  <img
                    src="assets/images/icons-3.png"
                    class="img-step"
                    alt="Proses Ketiga Ruang Engineer"
                  />
                </center>
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Lakukan Pemesanan dan Pembayaran</p>
                <p class="desc">
                  Setalah melewati tahap brainstorm dan memilih domain segara
                  lakukan pemesanan dan pembayaran sesuai paket yang Anda pilih.
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 mobile">
            <div class="step-wrapper">
              <div class="img mb-3">
                <center>
                  <img
                    src="assets/images/icons-4.png"
                    class="img-step"
                    alt="Proses Keempat Ruang Engineer"
                  />
                </center>
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Kirimkan Asset (konten) Website Anda</p>
                <p class="desc">
                  Kirimkan asset Anda, seperti logo perusahaan, email, no
                  telephone, dan juga gambar-gambar yang ingin dimasukan kedalam
                  website.
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 mobile">
            <div class="step-wrapper">
              <div class="img mb-3">
                <center>
                  <img
                    src="assets/images/icons-5.png"
                    class="img-step"
                    alt="Proses Kelima Ruang Engineer"
                  />
                </center>
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">Website Anda Masuk Proses Pengerjaan</p>
                <p class="desc">
                  Website impian Anda akan dikerjakan oleh tim profesional kami
                  sesuai dengan ide dan perjanjian waktu pengerjaan yang sudah
                  di sepakati bersama tim kami
                </p>
              </div>
            </div>
          </div>

          <div class="col-sm-12 mobile">
            <div class="step-wrapper">
              <div class="img mb-3">
                <center>
                  <img
                    src="assets/images/icons-6.png"
                    class="img-step"
                    alt="Proses Terakhir Ruang Engineer"
                  />
                </center>
              </div>
              <div class="desc-why-choose">
                <p class="title-desc">SELAMAT WEBSITE ANDA SIAP DI GUNAKAN!</p>
              </div>
            </div>
          </div>
          <!-- mobile -->
        </div>
      </div>
    </section>

    {{-- our package --}}
    <section class="price-service" id="pricelist">
      <h2 class="why-choose-title">Pilihan Harga Layanan Kami</h2>
      <p class="sub-why-choose">
        Pilih layanan kami sesuai dengan kebutuhan bisnis Anda
      </p>

      <div class="container">
        <div class="row  justify-content-center">
          <div class="col-lg-4 col-md-8 col-sm-12 mb-5">
            <div class="package">
              <span class="package-name">Paket Standar</span>
              <p class="pricing">Rp 1jt - 3jt</p>
              <div class="wrapper-benefit">
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Tampilan
                  Website Responsif
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Free
                  Domain & Hosting
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> 3 Pages
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Support
                  SEO On-Page
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Free SSL
                  (Security Socket Layer)
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Fitur
                  Call Button WhatsApp
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Free
                  Maintenance 12 Bulan
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Revisi 2x
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> 2 - 3
                  Hari Pengerjaan
                </p>
              </div>

              <div class="text-center">
                <a href="https://api.whatsapp.com/send?phone=6285281986573&text=Hallo, tolong jelaskan lebih detail mengenai paket standar ini" class="btn-order-now">Pesan Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8 col-sm-12 mb-5">
            <div class="package-rekomen">
              <span class="package-name-white">Paket Premium</span>
              <div class="ribbon">
                <span class="btn-rek">Rekomendasi <i class="bi bi-hand-thumbs-up-fill fs-5"></i></span>
              </div>
              <p class="pricing-white">Rp 5jt - 15jt</p>
              <div class="wrapper-benefit">
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Tampilan
                  Website Responsif
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Free
                  Domain & Hosting
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> 5+ Pages
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Support
                  SEO On-Page
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Free SSL
                  (Security Socket Layer)
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Fitur
                  Call Button WhatsApp
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Fitur
                  Kirim Email
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Fitur
                  Google Maps
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Fitur
                  Blog
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Fitur
                  Catalog Product
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Fitur
                  Keranjang Belanja
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Fitur
                  Live Chat
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Free
                  Maintenance 12 Bulan
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Revisi 5x
                </p>
                <p class="benefit-white">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Waktu
                  Pengerjaan 7 - 8 Minggu Hari Kerja
                </p>
              </div>
              <div class="text-center">
                <a href="https://api.whatsapp.com/send?phone=6285281986573&text=Hallo, tolong jelaskan lebih detail mengenai paket premium ini" class="btn-order-now">Pesan Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-8 col-sm-12 mb-5">
            <div class="package">
              <span class="package-name">Paket Bisnis</span>
              <p class="pricing">Rp 3jt - 5jt</p>
              <div class="wrapper-benefit">
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Tampilan
                  Website Responsif
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Free
                  Domain & Hosting
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> 5+ Pages
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Support
                  SEO On-Page
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Free SSL
                  (Security Socket Layer)
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Gratis
                  Email Bisnis
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Fitur
                  Call Button WhatsApp
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Fitur
                  Kirim Email
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Fitur
                  Google Maps
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Free
                  Maintenance 12 Bulan
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Revisi 3x
                </p>
                <p class="benefit">
                  <img src="assets/images/check.svg" alt="icon ceklis" /> Waktu
                  Pengerjaan 7 - 14 Hari Kerja
                </p>
              </div>

              <div class="text-center">
                <a href="https://api.whatsapp.com/send?phone=6285281986573&text=Hallo, tolong jelaskan lebih detail mengenai paket bisnis ini" class="btn-order-now">Pesan Sekarang</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- our blog --}}
    <section class="our-blog">
      <h2 class="why-choose-title">Blog Kami</h2>
      <p class="sub-why-choose">
        Baca blog kami untuk mempelajari lebih lanjut tentang dunia website
      </p>

      <div class="container">
        <div class="row justify-content-center">
          @foreach ($artikels as $artikel)
          <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
            <a href="{{route('detail_artikel', $artikel->slug)}}" class="link-single-blog">
              <div class="card">
                <div class="zoom-frame">
                  <img
                    src="{{ asset('storage/' .  $artikel->gambar) }}"
                    class="img-on-blog"
                    alt="{{ $artikel->alt_image }}"
                  />
                </div>

                <div class="card-body">
                  <span class="card-category">{{ $artikel->category->name_category }}</span>
                  <h3 class="card-title">
                    {{ $artikel->title }}
                  </h3>
                  <p class="card-text">
                    {{ $artikel->deskripsi }}
                  </p>
                </div>
              </div>
            </a>
          </div>

          @endforeach
          <div class="text-center mt80">
            <a href="/blog" class="btn-view-more-blog">Lihat Selengkapnya</a>
          </div>
          
        </div>
      </div>
    </section>

    {{-- testimonial --}}
    <section class="what-they-says" id="portfolio">
      <h2 class="why-choose-title">Kata Mereka</h2>
      <p class="sub-why-choose">Apa Kata Mereka Tentang Kami ?</p>

      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          
          <div class="swiper-slide">
            <div class="d-flex mb-3">
              <img src="assets/images/people.svg" alt="" />
              <div class="mt-1 ms-3">
                <span class="name-client">Febriansyah Hidayat</span>
                <p class="name-company">PT. KARYA PUTERA SAMARE</p>
              </div>
            </div>
            <p class="desc">
              Sebelum kenal Ruang Engineer saya hampir kerjasama dengan agency
              lain, harganya berlipat-lipat lebih mahal, dan hasil yang saya
              dapatkan dari Ruang Engineer sama profesional nya dari agency
              kenalan saya sebelumya.
            </p>
          </div>

          <div class="swiper-slide">
            <div class="d-flex mb-3">
              <img src="assets/images/people2.svg" alt="" />
              <div class="mt-1 ms-3">
                <span class="name-client">Kevin Suwandi</span>
                <p class="name-company">PT. KEVIN SHIPPING</p>
              </div>
            </div>
            <p class="desc">
              Berawal dari rekomendasi teman saya akhirnya tim Ruang Engineer
              yang menghubungi saya, kemudian saya tanya tentang layanannya.
              Sekarang bisnis saya sudah punya webiste company profile sendiri.
            </p>
          </div>

          <div class="swiper-slide">
            <div class="d-flex mb-3">
              <img src="assets/images/people3.svg" alt="" />
              <div class="mt-1 ms-3">
                <span class="name-client">Fadel Muhammad</span>
                <p class="name-company">VISIT RAPID TEST</p>
              </div>
            </div>
            <p class="desc">
              Moment yang sangat tepat saya kenal dengan Ruang Engineer, karena
              pada saat itu pandemi covid sedang tinggi-tingginya, akan tetapi
              hal itu tidak menghalangi saya untuk berbisnis online.
            </p>
          </div>

          <div class="swiper-slide">
            <div class="d-flex mb-3">
              <img src="assets/images/people3.svg" alt="" />
              <div class="mt-1 ms-3">
                <span class="name-client">Lufti Udin</span>
                <p class="name-company">CAHAYA DHUHA FUTSAL</p>
              </div>
            </div>
            <p class="desc">
              Terimakasih Ruang Engineer sekarang usaha kontraktor saya bisa
              bekerja sama dengan banyak perusahaan karena telah memiliki
              website company profile.
            </p>
          </div>

          <div class="swiper-slide">
            <div class="d-flex mb-3">
              <img src="assets/images/people3.svg" alt="" />
              <div class="mt-1 ms-3">
                <span class="name-client">Fadel Muhammad</span>
                <p class="name-company">CAHAYA DHUHA FUTSAL</p>
              </div>
            </div>
            <p class="desc">
              Ini adalah kerja sama kedua kami, tidak ada alasan untuk
              berpaling, karena kesan sebelumnya yang memuasakan dengan
              pelayanan team Ruang Engineer yang sangat profesional dan amanah.
            </p>
          </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
        
      </div>

    </section>

    {{-- cta to conversion --}}
    <section class="cta">
      <h2 class="why-choose-title">
        Tingkatkan layanan bisnis Anda dengan profesional website
      </h2>
      <p class="sub-why-choose">
        Bingung buat website mulai dari mana? Hubungi kami sekarang juga!
      </p>

      <div class="text-center">
        <a href="https://api.whatsapp.com/send?phone=6285281986573&text=Hallo, tolong jelaskan mengenai layanan jasa Anda" class="btn-order-now">Konsultasi Sekarang</a>
      </div>
    </section>

    {{-- our location --}}
    <section class="my-location">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 mb-5">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.221216497245!2d106.714293!3d-6.2345441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbcdda07bca5%3A0x2c45b480be0abe47!2sRuang%20Engineer!5e0!3m2!1sen!2sid!4v1695290387014!5m2!1sen!2sid"
              class="maps"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <h2 class="title-location">Anda Juga Dapat Mengunjungi Kantor Kami</h2>
            <p class="desc-location">
              Jl. Winong Dalam No.61, RT.003/RW.008, Sudimara Tim., Kec.
              Ciledug, Kota Tangerang, Banten 15151, Indonesia
            </p>

            <div class="mt80">
              <a
                href="https://maps.google.com/maps?ll=-6.234542,106.714306&z=16&t=m&hl=en&gl=ID&mapclient=embed&cid=3190154376099053127"
                class="btn-order-now"
                ><i class="bi bi-geo-alt"></i> Lihat Gmap</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- contact form --}}
    <section class="wrapper-primary-form">
      <div class="container">
        <div>
          <h2 class="why-choose-title">Contact Us</h2>
          <p class="sub-why-choose">Kami Menjawab Segala Pertanyaan Anda!</p>
        </div>

        <form
          id="contact-form"
          class="row"
          action="https://formspree.io/f/mdovldgy"
          method="POST"
        >
          <div class="col-md-6 col-sm-12 mb-4">
            <label for="name" class="form-label red-bold">Nama Lengkap</label>
            <input
              type="text"
              name="name"
              id="name"
              class="form-control form-color border-form"
              placeholder="Masukan nama lengkap"
              required
            />
          </div>

          <div class="col-md-6 col-sm-12 mb-4">
            <label for="email" class="form-label red-bold">Alamat Email</label>
            <input
              type="email"
              id="email"
              name="email"
              class="form-control form-color border-form"
              placeholder="contoh@mail.com"
              required
            />
          </div>

          <div class="col-md-6 col-sm-12 mb-4">
            <label for="phone" class="form-label red-bold"
              >Nomor Handphone</label
            >
            <input
              type="phone number"
              class="form-control form-color border-form"
              id="phone"
              name="phone"
              placeholder="0800  9090  8890"
              maxlength="16"
              required
            />
          </div>

          <div class="col-md-6 col-sm-12 mb-4">
            <label for="subject" class="form-label red-bold"
              >Hal Yang Ditanyakan</label
            >
            <select
              id="subject"
              name="subject"
              class="form-select form-color border-form"
              required
            >
              <option value="Paket Standar">Paket Standar</option>
              <option value="Paket Bisnis">Paket Bisnis</option>
              <option value="Paket Premium">Paket Premium</option>
            </select>
          </div>

          <div class="col-12 mb-4">
            <label for="message" class="form-label red-bold"
              >Tulis Pesanmu..</label
            >
            <textarea
              class="form-control form-color border-form"
              id="message"
              name="message"
              rows="5"
              placeholder="Ketik pertanyaanmu disini dengan detail.."
              required
            ></textarea>
          </div>
          <div class="d-grid button-about mb-5">
            <button type="submit" class="btn-send">Kirim Pesan</button>
          </div>
        </form>
      </div>
    </section>

    {{-- FAQ --}}
    <section class="wrapper-primary-faq">
      <div class="container mt-3 mb-5">
        <div class="row">
          <div class="mx-auto col-12">
            <div class="py-5 text-center">
              <h2 class="why-choose-title">
                Seputar Pertanyaan Umum(FAQ)
              </h2>
              <p class="">
                Bagi mereka yang baru memasuki dunia pembuatan website, mungkin
                banyak pertanyaan yang muncul. Kami telah mengumpulkan beberapa
                pertanyaan yang sering ditanyakan untuk membantu Anda memahami
                lebih lanjut tentang jasa pembuatan website. Dari konsep dasar
                hingga biaya dan dukungan teknis, FAQ ini akan memberikan
                pemahaman yang lebih baik tentang apa yang dapat Anda harapkan
                ketika menggunakan jasa pembuatan website. Jadi, mari kita mulai
                menjawab pertanyaan-pertanyaan umum yang mungkin muncul di benak
                Anda.
              </p>
            </div>

            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne"
                    aria-expanded="false"
                    aria-controls="flush-collapseOne"
                  >
                    Mengapa saya perlu menggunakan jasa pembuatan website?
                  </button>
                </h2>
                <div
                  id="flush-collapseOne"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingOne"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Menggunakan jasa pembuatan website membantu Anda memiliki
                    website yang profesional dan fungsional. Website dapat
                    menjadi platform untuk memperluas jangkauan bisnis,
                    mempromosikan produk atau layanan, dan menjangkau audiens
                    yang lebih luas.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo"
                    aria-expanded="false"
                    aria-controls="flush-collapseTwo"
                  >
                    Apakah saya perlu memiliki pengetahuan teknis untuk
                    menggunakan jasa pembuatan website?
                  </button>
                </h2>
                <div
                  id="flush-collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Tidak, Anda tidak perlu memiliki pengetahuan teknis yang
                    mendalam. Jasa pembuatan website dapat membantu Anda dari
                    awal hingga akhir, termasuk dalam pemilihan domain, desain,
                    pengembangan, dan peluncuran website.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree"
                    aria-expanded="false"
                    aria-controls="flush-collapseThree"
                  >
                    Berapa biaya yang terkait dengan jasa pembuatan website?
                  </button>
                </h2>
                <div
                  id="flush-collapseThree"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Biaya pembuatan website bervariasi tergantung pada
                    kompleksitas proyek, jumlah halaman, fitur khusus, dan
                    tingkat kustomisasi yang Anda inginkan. Sebaiknya Anda
                    berdiskusi langsung dengan penyedia jasa untuk mendapatkan
                    perkiraan biaya yang sesuai dengan anggaran Anda.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour"
                    aria-expanded="false"
                    aria-controls="flush-collapseFour"
                  >
                    Berapa lama waktu yang dibutuhkan untuk membuat sebuah
                    website?
                  </button>
                </h2>
                <div
                  id="flush-collapseFour"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingFour"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Waktu pembuatan website dapat bervariasi tergantung pada
                    kompleksitas proyek dan kesepakatan yang Anda buat dengan
                    penyedia jasa. Biasanya, proses pembuatan website memakan
                    waktu beberapa minggu hingga beberapa bulan, tergantung pada
                    skala dan kebutuhan proyek.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive"
                    aria-expanded="false"
                    aria-controls="flush-collapseFive"
                  >
                    Bagaimana dengan dukungan teknis setelah peluncuran website?
                  </button>
                </h2>
                <div
                  id="flush-collapseFive"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingFive"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Banyak penyedia jasa pembuatan website juga menyediakan
                    dukungan teknis setelah peluncuran. Jika Anda mengalami
                    masalah teknis atau membutuhkan bantuan, Anda dapat
                    menghubungi penyedia jasa untuk mendapatkan bantuan dan
                    solusi yang diperlukan.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix"
                    aria-expanded="false"
                    aria-controls="flush-collapseSix"
                  >
                    Apakah saya bisa menentukan desain website saya sendiri?
                  </button>
                </h2>
                <div
                  id="flush-collapseSix"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingSix"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Tentu saja, kami memberikan kesempatan pelanggan kami untuk
                    menentukan desain website mereka. Hal ini dapat dibicarakan
                    setelah konsultasi pada tim kami.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSeven"
                    aria-expanded="false"
                    aria-controls="flush-collapseSeven"
                  >
                    Bagaimana jika website saya mengalami kendala?
                  </button>
                </h2>
                <div
                  id="flush-collapseSeven"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingSeven"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Jangan khawatir, tim kami akan siap siaga memberikan layanan
                    prima 24/7 kepada pelanggan kami.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseEight"
                    aria-expanded="false"
                    aria-controls="flush-collapseEight"
                  >
                    Apakah saya mendapatkan domain dan hosting?
                  </button>
                </h2>
                <div
                  id="flush-collapseEight"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingEight"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Ya, apabila anda menggunakan jasa pembuatan website dari
                    ruang engineer, anda mendapatkan gratis domain dan hosting
                    untuk satu tahun pertama.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingNine">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseNine"
                    aria-expanded="false"
                    aria-controls="flush-collapseNine"
                  >
                    Apakah saya mendapatkan email dengan nama domain saya?
                  </button>
                </h2>
                <div
                  id="flush-collapseNine"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingNine"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Ya, Anda mendapatkan email bisnis atau email dengan nama
                    domain Anda.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTen">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTen"
                    aria-expanded="false"
                    aria-controls="flush-collapseTen"
                  >
                    Saya sudah memiliki domain dan hosting sendiri, lalu apakah
                    saya bisa membuat website dengan layanan Ruang Engineer?
                  </button>
                </h2>
                <div
                  id="flush-collapseTen"
                  class="accordion-collapse collapse"
                  aria-labelledby="flush-headingTen"
                  data-bs-parent="#accordionFlushExample"
                >
                  <div class="accordion-body">
                    Ya, anda bisa menggunakan jasa layanan kami. Jangan khawatir
                    kami akan bantu anda sampai website impian anda bisa di
                    akses!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection
