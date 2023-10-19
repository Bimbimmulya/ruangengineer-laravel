<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hubungi Kami | Ruang Engineer</title>

    <meta property="og:title" content="Hubungi Kami | Ruang Engineer">
    <meta name="description" content="Terhubung dengan Kami Call &amp; Whatsapp: 0852-8198-6573, Email: support@ruangengineer.com, Konsultasikan tentang">
    <link rel="icon" href="img/fav-ico-ruang-engineer.png" type="image/x-icon" />
    <meta property="og:image" content="img/office-ruang-engineer-test.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/blog.css">
</head>
<body>

@extends('layouts.main')

@section('content')
<div class="bg-contact">
    <div class="container">
    <div class="container-contact">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 bg-form">
                    <form id="contact-form" class="row g-3" action="https://formspree.io/f/mdovldgy" method="POST">
                        <div class="col-md-6 col-sm-12">
                            <label for="name" class="form-label red-bold">Your Nmae</label>
                            <input type="text" name="name" id="name" class="form-control form-color" placeholder="Enter Full Name" required />
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="email" class="form-label red-bold">Email Address</label>
                            <input type="email" id="email" name="email" class="form-control form-color" placeholder="example@gmail.com" required/>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="subject" class="form-label red-bold">Subject Email</label>
                            <select id="subject" name="subject" class="form-select form-color" required>
                              <option value="Konsultasi Gratis">Konsultasi Gratis</option>
                              <option value="Harga Jasa Pembuatan Website">Harga Jasa Pembuatan Website</option>
                              <option value="Flow Kerja">Cara Pesan Pembuatan Website</option>
                              <option value="Flow Kerja">Lainnya</option>
                            </select> 
                        </div>
                        <div class="col-12 mb-3">
                            <label for="message" class="form-label red-bold">Write Your Message</label>
                            <textarea class="form-control form-color" id="message" name="message" rows="5" placeholder="Type your question here in detail.." required></textarea>
                        </div>
                        <div class="btn-send col-12">
                            <button type="submit" class="btn-form">Kirim Pesan</button>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-md-12 col-lg-6 section-get-contact">
                    <div class="heading-address bg-form">
                        <div class="ico-get">
                            <div class="icon-get">
                                <i class="bi bi-telephone-inbound"></i>
                            </div>
                                <div class="label-get-contact d-block">
                                    <div class="label-phone">
                                        <span>Phone Number</span>
                                    </div>
                                    <div class="sub-label-phone">
                                        <span>0852-8198-6573</span>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="heading-address bg-form">
                        <div class="ico-get">
                            <div class="icon-get">
                                <i class="bi bi-telephone-inbound"></i>
                            </div>
                                <div class="label-get-contact d-block">
                                    <div class="label-phone">
                                        <span>Phone Number</span>
                                    </div>
                                    <div class="sub-label-phone">
                                        <span>0857-7429-0746</span>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="heading-address bg-form">
                        <div class="ico-get">
                            <div class="icon-get">
                                <i class="bi bi-envelope-check"></i>
                            </div>
                                <div class="label-get-contact d-block">
                                    <div class="label-phone">
                                        <span>Email Address</span>
                                    </div>
                                    <div class="sub-label-phone">
                                        <span>support@ruangengineer.com</span>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="heading-address bg-form">
                        <div class="ico-get">
                            <div class="icon-get">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                                <div class="label-get-contact d-block">
                                    <div class="label-phone">
                                        <span>Location</span>
                                    </div>
                                    <div class="sub-label-phone">
                                        <span>Jl. Winong Dalam No.61, RT.003/RW.008, Sudimara Tim., Kec. Ciledug, Kota Tangerang, Banten 15151, Indonesia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row container-maps-contact">
                <div class="section-heading-gmaps">
                    <div class="heading-gmaps">
                        <h1>Find Us on Google Maps</h1>
                    </div>
                    <div class="icon-gmaps">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                </div>
                <div class="sub-heading-gmaps">
                    <p>Temukan Kami di Google Maps, Baca Ulasan Pelanggan Kami, dan Temukan Petunjuk Rute Ternyaman untuk Berkunjung ke Tempat Kami.</p>
                </div>
                <div class="col-12 mb-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.221216497245!2d106.714293!3d-6.2345441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbcdda07bca5%3A0x2c45b480be0abe47!2sRuang%20Engineer!5e0!3m2!1sen!2sid!4v1695290387014!5m2!1sen!2sid" class="maps" height="450" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="btn-send mt-4">
                    <a href="https://maps.google.com/maps?ll=-6.234542,106.714306&z=16&t=m&hl=en&gl=ID&mapclient=embed&cid=3190154376099053127" class="btn-form"><i class="bi bi-geo-alt"></i> Lihat Gmap</a>
                  </div>
            </div>
    </div>
</div>
@endsection

</body>
</html>