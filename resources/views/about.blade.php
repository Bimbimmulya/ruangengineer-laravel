<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang Kami | Ruang Engineer</title>

    <meta property="og:title" content="Tentang Kami | Ruang Engineer">
    <meta name="description" content="Ruang Engineer adalah sebuah startup digital agency yang memiliki spesialisasi dalam Jasa Pembuatan Website, Optimasi SEO dan Digital Marketing.">
    <link rel="icon" href="img/fav-ico-ruang-engineer.png" type="image/x-icon" />
    <meta property="og:image" content="img/our-team-ruang-engineer.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/blog.css">

</head>
<body>
    
    @include('layouts.navbar')
    @include('layouts.main')

    <div class="bg-about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 section-heading-about">
                    <div class="heading-about">
                        <h1>Lebih Dekat Dengan <span>Ruang Engineer</span></h1>
                    </div>
                    <div class="sub-heading-about">
                        <p><span>Ruang Engineer</span> adalah sebuah startup digital agency yang memiliki spesialisasi dalam Jasa Pembuatan Website, Optimasi SEO dan Digital Marketing. Dengan didukung oleh tim yang berpengalaman, kami sudah dipercayai 50+ dari berbagai industri.</p>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-6 section-imageAbout">
                    <div class="img-about">
                        <img src="/img/our-team-ruang-engineer.png" alt="Team Ruang Engineer" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-icon">
        <div class="img-icon">
            <i class="bi bi-circle" style="color: #4BC4DF; font-size: 300px; margin-left: -150px;"></i>
        </div>
    </div>

    <div class="container bg-aboutS">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6 section-visionMision d-block">
                <div class="heading-visionMision">
                    <h2>VISI & MISI</h2>
                </div>
                <div class="sub-heading-visionMision">
                    <p>Wujudkan bisnis impian Kamu bersama Kami</p>
                </div>
                <div class="heading-vision active" id="vision-tab">
                    <a href="javascript:void(0)" class="tab-button active" id="tab-button" onclick="showTab('vision')">Visi</a>
                </div>
                <div class="heading-mision" id="mision-tab">
                    <a href="javascript:void(0)" class="tab-button" id="tabButton" onclick="showTab('mision')">Misi</a>
                </div>
                
            </div>
            
                <div class="col-12 col-md-12 col-lg-6 section-contentVisionMision d-block">
                  <div class="content-vision" id="vision-content" style="text-align: justify">
                    <p>Menjadi pionir dalam solusi pembuatan website di Indonesia, mendorong pertumbuhan bisnis dari berbagai ukuran dengan memberikan layanan profesional, inovatif, dan terpercaya. Kami bertekad untuk membantu bisnis menghadirkan kehadiran online yang kuat, memberdayakan pemilik bisnis, dan mendukung pertumbuhan ekonomi di seluruh negeri.</p>
                  </div>
                  <div class="section-mision" id="mision-content" style="display: none; text-align: justify">
                    <ul>
                      <li><b>Memberikan Solusi Berkualitas:</b> Kami berkomitmen untuk memberikan solusi pembuatan website yang berkualitas tinggi kepada pelanggan kami, dengan memenuhi standar profesionalisme dan inovasi yang tinggi..</li>
                      <li><b>Dukungan untuk Pertumbuhan Bisnis:</b> Misi kami adalah mendukung pertumbuhan bisnis pelanggan kami, dari pemilik bisnis kecil hingga perusahaan besar, dengan memberikan layanan yang responsif, berkualitas, dan berorientasi pada kebutuhan klien.</li>
                      <li><b>Inovasi Berkelanjutan:</b> Kami senantiasa berupaya untuk tetap berinovasi, memantau tren terkini dalam pembuatan website, dan menghadirkan solusi yang selalu relevan dan efektif bagi klien kami.</li>
                      <li><b>Integritas dan Kepercayaan:</b> Kami menjunjung tinggi nilai integritas dan kepercayaan dalam setiap aspek bisnis kami, memastikan bahwa hubungan dengan klien dibangun di atas fondasi saling percaya.</li>
                      <li><b>Pemberdayaan Pemilik Bisnis:</b> Tujuan kami adalah mewujudkan impian pemilik bisnis dengan memberikan dukungan, sumber daya, dan layanan yang memungkinkan mereka untuk menjadi lebih maju, berkembang, dan sukses di ranah online.</li>
                    </ul>
                  </div>
                </div>
        </div>
    </div>
      
    {{-- core value --}}
    <div class="container coreValue">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 d-block text-center">
                <div class="heading-coreValue">
                    <h2>Core Value</h2>
                </div>
                <div class="sub-coreValue">
                    <p>Kami Berpegang Teguh Pada Nilai Inti Ruang Engineer</p>
                </div>
            </div>
        </div>

        <div class="row coreValueContent">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="coreValue-content d-flex">
                    <div class="img-value">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <g clip-path="url(#clip0_5_4836)">
                            <path d="M17.09 4.55999C16.39 3.52999 15.59 2.56999 14.69 1.70999C14.34 1.36999 13.75 1.68999 13.85 2.16999C14.04 3.10999 14.24 4.34999 14.24 5.45999C14.24 7.51999 12.89 9.18999 10.83 9.18999C9.29 9.18999 8.03 8.25999 7.48 6.92999C7.38 6.72999 7.34 6.60999 7.28 6.38999C7.17 5.96999 6.62 5.83999 6.38 6.20999C6.2 6.47999 6.03 6.74999 5.87 7.03999C4.68 9.07999 4 11.46 4 14C4 18.42 7.58 22 12 22C16.42 22 20 18.42 20 14C20 10.51 18.92 7.26999 17.09 4.55999ZM11.71 19C9.93 19 8.49 17.6 8.49 15.86C8.49 14.24 9.54 13.1 11.3 12.74C12.77 12.44 14.28 11.81 15.33 10.82C15.61 10.56 16.07 10.68 16.15 11.05C16.38 12.07 16.5 13.13 16.5 14.2C16.51 16.85 14.36 19 11.71 19Z" fill="#4BC4DF"/>
                            </g>
                        </svg>
                    </div>
                    <div class="heading-coreValueContent">
                        <h3>INTEGRITY</h3>
                    </div>
                </div>
                <div class="subheading-coreValueContent">
                    <p>Kami berkomitmen untuk selalu bertindak dengan jujur, keterbukaan, dan kejujuran dalam semua aspek bisnis kami. Integritas adalah landasan kepercayaan yang kami bangun.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="coreValue-content d-flex">
                    <div class="img-value">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 16 18">
                            <path d="M9.00007 5.57001C8.21007 5.57001 7.57007 6.21001 7.57007 7.00001C7.57007 7.79001 8.21007 8.43001 9.00007 8.43001C9.79007 8.43001 10.4301 7.79001 10.4301 7.00001C10.4301 6.21001 9.79007 5.57001 9.00007 5.57001Z" fill="#323232"/>
                            <path d="M9.21007 2.03059e-05C5.37007 -0.10998 2.21007 2.87002 2.02007 6.64002L0.100069 9.20002C-0.149931 9.53002 0.0900686 10 0.500069 10H2.00007V13C2.00007 14.1 2.90007 15 4.00007 15H5.00007V17C5.00007 17.55 5.45007 18 6.00007 18H11.0001C11.5501 18 12.0001 17.55 12.0001 17V13.32C14.4401 12.16 16.1001 9.64002 16.0001 6.74002C15.8601 3.12002 12.8201 0.11002 9.21007 2.03059e-05ZM12.0001 7.00002C12.0001 7.13002 11.9901 7.26002 11.9801 7.39002L12.8101 8.05002C12.8901 8.11002 12.9101 8.21002 12.8601 8.30002L12.0601 9.69002C12.0101 9.78002 11.9001 9.81002 11.8201 9.78002L10.8301 9.38002C10.6201 9.54002 10.4001 9.67002 10.1601 9.77002L10.0001 10.83C9.99007 10.93 9.90007 11 9.80007 11H8.20007C8.10007 11 8.02007 10.93 8.00007 10.83L7.85007 9.77002C7.60007 9.67002 7.38007 9.54002 7.17007 9.38002L6.18007 9.78002C6.09007 9.81002 5.98007 9.78002 5.93007 9.69002L5.13007 8.30002C5.08007 8.22002 5.10007 8.11002 5.18007 8.05002L6.02007 7.39002C6.01007 7.26002 6.00007 7.13002 6.00007 7.00002C6.00007 6.87002 6.02007 6.73002 6.04007 6.61002L5.19007 5.95002C5.11007 5.89002 5.09007 5.79002 5.14007 5.69002L5.94007 4.31002C5.99007 4.22002 6.09007 4.19002 6.18007 4.22002L7.18007 4.62002C7.38007 4.47002 7.61007 4.33002 7.85007 4.23002L8.00007 3.17002C8.02007 3.07002 8.10007 3.00002 8.20007 3.00002H9.80007C9.90007 3.00002 9.98007 3.07002 10.0001 3.17002L10.1501 4.23002C10.3901 4.33002 10.6101 4.46002 10.8201 4.62002L11.8201 4.22002C11.9101 4.19002 12.0201 4.22002 12.0601 4.31002L12.8601 5.69002C12.9101 5.78002 12.8901 5.89002 12.8101 5.95002L11.9601 6.61002C11.9901 6.73002 12.0001 6.86002 12.0001 7.00002Z" fill="#4BC4DF"/>
                            </svg>
                    </div>
                    <div class="heading-coreValueContent">
                        <h3>INOVATION</h3>
                    </div>
                </div>
                <div class="subheading-coreValueContent">
                    <p>Kami selalu mencari cara baru dan kreatif untuk mengatasi tantangan. Inovasi adalah bahan bakar yang menggerakkan perubahan positif dalam bisnis kami.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="coreValue-content d-flex">
                    <div class="img-value">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <g clip-path="url(#clip0_5_997)">
                            <path d="M10.06 4.99997H5.82L6.48 1.81997C6.56 1.44997 6.44 1.06997 6.18 0.799971C5.74 0.359971 5.03 0.359971 4.6 0.799971L0.6 4.79997C0.21 5.16997 0 5.67997 0 6.20997V12C0 13.1 0.9 14 2 14H7.92C8.72 14 9.44 13.52 9.76 12.79L11.9 7.78997C12.46 6.46997 11.49 4.99997 10.06 4.99997ZM22 9.99997H16.08C15.28 9.99997 14.56 10.48 14.24 11.21L12.1 16.21C11.54 17.53 12.5 19 13.94 19H18.18L17.52 22.18C17.44 22.55 17.56 22.93 17.82 23.2C18.26 23.64 18.97 23.64 19.4 23.2L23.4 19.2C23.78 18.82 23.99 18.32 23.99 17.79V12C24 10.9 23.1 9.99997 22 9.99997Z" fill="#4BC4DF"/>
                            </g>
                            </svg>
                    </div>
                    <div class="heading-coreValueContent">
                        <h3>COMMITMENT</h3>
                    </div>
                </div>
                <div class="subheading-coreValueContent">
                    <p>Kami berkomitmen sepenuh hati untuk mencapai setiap tujuan yang kami tetapkan. Komitmen adalah kunci untuk kesuksesan jangka panjang.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="coreValue-content d-flex">
                    <div class="img-value">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 14 19">
                            <path d="M7.00007 0C6.54007 0 6.07007 0.0400001 5.60007 0.14C2.84007 0.67 0.640071 2.9 0.120071 5.66C-0.359929 8.27 0.600072 10.67 2.34007 12.22C2.77007 12.6 3.00007 13.13 3.00007 13.69V16C3.00007 17.1 3.90007 18 5.00007 18H5.28007C5.63007 18.6 6.26007 19 7.00007 19C7.74007 19 8.38007 18.6 8.72007 18H9.00007C10.1001 18 11.0001 17.1 11.0001 16V13.69C11.0001 13.14 11.2201 12.6 11.6401 12.23C13.0901 10.95 14.0001 9.08 14.0001 7C14.0001 3.13 10.8701 0 7.00007 0ZM7.50007 11H6.50007V8.41L4.67007 6.59L5.38007 5.88L7.00007 7.5L8.62007 5.88L9.33007 6.59L7.50007 8.42V11ZM8.50007 16C8.49007 16 8.48007 15.99 8.47007 15.99V16H5.53007V15.99C5.52007 15.99 5.51007 16 5.50007 16C5.22007 16 5.00007 15.78 5.00007 15.5C5.00007 15.22 5.22007 15 5.50007 15C5.51007 15 5.52007 15.01 5.53007 15.01V15H8.47007V15.01C8.48007 15.01 8.49007 15 8.50007 15C8.78007 15 9.00007 15.22 9.00007 15.5C9.00007 15.78 8.78007 16 8.50007 16ZM8.50007 14H5.50007C5.22007 14 5.00007 13.78 5.00007 13.5C5.00007 13.22 5.22007 13 5.50007 13H8.50007C8.78007 13 9.00007 13.22 9.00007 13.5C9.00007 13.78 8.78007 14 8.50007 14Z" fill="#4BC4DF"/>
                          </svg>
                    </div>
                    <div class="heading-coreValueContent">
                        <h3>CREATIVITY</h3>
                    </div>
                </div>
                <div class="subheading-coreValueContent">
                    <p>Kami mendorong kreativitas dalam segala hal yang kami lakukan. Kreativitas memungkinkan kami menemukan solusi yang unik untuk setiap masalah.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="coreValue-content d-flex">
                    <div class="img-value">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 12">
                            <path d="M12 6.75C13.63 6.75 15.07 7.14 16.24 7.65C17.32 8.13 18 9.21 18 10.38V11C18 11.55 17.55 12 17 12H7C6.45 12 6 11.55 6 11V10.39C6 9.21 6.68 8.13 7.76 7.66C8.93 7.14 10.37 6.75 12 6.75ZM4 7C5.1 7 6 6.1 6 5C6 3.9 5.1 3 4 3C2.9 3 2 3.9 2 5C2 6.1 2.9 7 4 7ZM5.13 8.1C4.76 8.04 4.39 8 4 8C3.01 8 2.07 8.21 1.22 8.58C0.48 8.9 0 9.62 0 10.43V11C0 11.55 0.45 12 1 12H4.5V10.39C4.5 9.56 4.73 8.78 5.13 8.1ZM20 7C21.1 7 22 6.1 22 5C22 3.9 21.1 3 20 3C18.9 3 18 3.9 18 5C18 6.1 18.9 7 20 7ZM24 10.43C24 9.62 23.52 8.9 22.78 8.58C21.93 8.21 20.99 8 20 8C19.61 8 19.24 8.04 18.87 8.1C19.27 8.78 19.5 9.56 19.5 10.39V12H23C23.55 12 24 11.55 24 11V10.43ZM12 0C13.66 0 15 1.34 15 3C15 4.66 13.66 6 12 6C10.34 6 9 4.66 9 3C9 1.34 10.34 0 12 0Z" fill="#4BC4DF"/>
                        </svg>
                    </div>
                    <div class="heading-coreValueContent">
                        <h3>PEOPLE</h3>
                    </div>
                </div>
                <div class="subheading-coreValueContent">
                    <p>Orang-orang adalah aset terbesar kami. Kami memperlakukan setiap anggota tim dan pelanggan dengan rasa hormat dan perhatian.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="coreValue-content d-flex">
                    <div class="img-value">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <g clip-path="url(#clip0_5_391)">
                            <path d="M19.66 3.99001C17.02 2.19001 13.76 3.03001 12 5.09001C10.24 3.03001 6.97997 2.18001 4.33997 3.99001C2.93997 4.95001 2.05997 6.57001 1.99997 8.28001C1.85997 12.16 5.29997 15.27 10.55 20.04L10.65 20.13C11.41 20.82 12.58 20.82 13.34 20.12L13.45 20.02C18.7 15.26 22.13 12.15 22 8.27001C21.94 6.57001 21.06 4.95001 19.66 3.99001ZM12.1 18.55L12 18.65L11.9 18.55C7.13997 14.24 3.99997 11.39 3.99997 8.50001C3.99997 6.50001 5.49997 5.00001 7.49997 5.00001C9.03997 5.00001 10.54 5.99001 11.07 7.36001H12.94C13.46 5.99001 14.96 5.00001 16.5 5.00001C18.5 5.00001 20 6.50001 20 8.50001C20 11.39 16.86 14.24 12.1 18.55Z" fill="#4BC4DF"/>
                            </g>
                            </svg>
                    </div>
                    <div class="heading-coreValueContent">
                        <h3>PASSION</h3>
                    </div>
                </div>
                <div class="subheading-coreValueContent">
                    <p>Kami menggabungkan semangat dalam setiap tindakan kami. Semangat adalah apa yang membedakan kami dalam mengejar keunggulan.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="coreValue-content d-flex">
                    <div class="img-value">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <g clip-path="url(#clip0_5_2608)">
                              <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM12 20C7.59 20 4 16.41 4 12C4 7.59 7.59 4 12 4C16.41 4 20 7.59 20 12C20 16.41 16.41 20 12 20ZM15 12C15 13.66 13.66 15 12 15C10.34 15 9 13.66 9 12C9 10.34 10.34 9 12 9C13.66 9 15 10.34 15 12Z" fill="#4BC4DF"/>
                            </g>
                          </svg>
                    </div>
                    <div class="heading-coreValueContent">
                        <h3>GOALS</h3>
                    </div>
                </div>
                <div class="subheading-coreValueContent">
                    <p>Kami memiliki visi yang jelas dan tujuan yang terukur. Setiap tindakan kami didorong oleh tekad untuk mencapai tujuan tersebut.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="coreValue-content d-flex">
                    <div class="img-value">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <g clip-path="url(#clip0_5_1043)">
                              <path d="M16.85 6.85L18.29 8.29L13.41 13.17L10.12 9.88C9.72998 9.49 9.09998 9.49 8.70998 9.88L2.70998 15.89C2.31998 16.28 2.31998 16.91 2.70998 17.3C3.09998 17.69 3.72998 17.69 4.11998 17.3L9.40998 12L12.7 15.29C13.09 15.68 13.72 15.68 14.11 15.29L19.7 9.71L21.14 11.15C21.45 11.46 21.99 11.24 21.99 10.8V6.5C22 6.22 21.78 6 21.5 6H17.21C16.76 6 16.54 6.54 16.85 6.85Z" fill="#4BC4DF"/>
                            </g>
                          </svg>
                    </div>
                    <div class="heading-coreValueContent">
                        <h3>GROWTH</h3>
                    </div>
                </div>
                <div class="subheading-coreValueContent">
                    <p>Kami berkomitmen untuk pertumbuhan berkelanjutan. Kami selalu belajar, berkembang, dan mengejar peningkatan dalam segala hal yang kami lakukan.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="coreValue-content d-flex">
                    <div class="img-value">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <g clip-path="url(#clip0_5_4613)">
                              <path d="M16 4C16 2.9 16.9 2 18 2C19.1 2 20 2.9 20 4C20 5.1 19.1 6 18 6C16.9 6 16 5.1 16 4ZM20.78 7.58C19.93 7.21 18.99 7 18 7C17.33 7 16.69 7.1 16.08 7.28C16.66 7.83 17 8.6 17 9.43V10H22V9.43C22 8.62 21.52 7.9 20.78 7.58ZM6 6C7.1 6 8 5.1 8 4C8 2.9 7.1 2 6 2C4.9 2 4 2.9 4 4C4 5.1 4.9 6 6 6ZM7.92 7.28C7.31 7.1 6.67 7 6 7C5.01 7 4.07 7.21 3.22 7.58C2.48 7.9 2 8.62 2 9.43V10H7V9.43C7 8.6 7.34 7.83 7.92 7.28ZM10 4C10 2.9 10.9 2 12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4ZM16 10H8V9.43C8 8.62 8.48 7.9 9.22 7.58C10.07 7.21 11.01 7 12 7C12.99 7 13.93 7.21 14.78 7.58C15.52 7.9 16 8.62 16 9.43V10ZM15 16C15 14.9 15.9 14 17 14C18.1 14 19 14.9 19 16C19 17.1 18.1 18 17 18C15.9 18 15 17.1 15 16ZM21 22H13V21.43C13 20.62 13.48 19.9 14.22 19.58C15.07 19.21 16.01 19 17 19C17.99 19 18.93 19.21 19.78 19.58C20.52 19.9 21 20.62 21 21.43V22ZM5 16C5 14.9 5.9 14 7 14C8.1 14 9 14.9 9 16C9 17.1 8.1 18 7 18C5.9 18 5 17.1 5 16ZM11 22H3V21.43C3 20.62 3.48 19.9 4.22 19.58C5.07 19.21 6.01 19 7 19C7.99 19 8.93 19.21 9.78 19.58C10.52 19.9 11 20.62 11 21.43V22ZM13.79 13H12.75V11.75C12.75 11.34 12.41 11 12 11C11.59 11 11.25 11.34 11.25 11.75V13H10.21C9.76 13 9.54 13.54 9.86 13.85L11.65 15.64C11.85 15.84 12.16 15.84 12.36 15.64L14.15 13.85C14.46 13.54 14.24 13 13.79 13Z" fill="#4BC4DF"/>
                            </g>
                          </svg>
                    </div>
                    <div class="heading-coreValueContent">
                        <h3>CONNECTION</h3>
                    </div>
                </div>
                <div class="subheading-coreValueContent">
                    <p>Kami memahami pentingnya membangun koneksi dengan pelanggan, mitra, dan komunitas. Koneksi adalah fondasi kerja sama yang kuat.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="coreValue-content d-flex">
                    <div class="img-value">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <g clip-path="url(#clip0_5_4613)">
                              <path d="M16 4C16 2.9 16.9 2 18 2C19.1 2 20 2.9 20 4C20 5.1 19.1 6 18 6C16.9 6 16 5.1 16 4ZM20.78 7.58C19.93 7.21 18.99 7 18 7C17.33 7 16.69 7.1 16.08 7.28C16.66 7.83 17 8.6 17 9.43V10H22V9.43C22 8.62 21.52 7.9 20.78 7.58ZM6 6C7.1 6 8 5.1 8 4C8 2.9 7.1 2 6 2C4.9 2 4 2.9 4 4C4 5.1 4.9 6 6 6ZM7.92 7.28C7.31 7.1 6.67 7 6 7C5.01 7 4.07 7.21 3.22 7.58C2.48 7.9 2 8.62 2 9.43V10H7V9.43C7 8.6 7.34 7.83 7.92 7.28ZM10 4C10 2.9 10.9 2 12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4ZM16 10H8V9.43C8 8.62 8.48 7.9 9.22 7.58C10.07 7.21 11.01 7 12 7C12.99 7 13.93 7.21 14.78 7.58C15.52 7.9 16 8.62 16 9.43V10ZM15 16C15 14.9 15.9 14 17 14C18.1 14 19 14.9 19 16C19 17.1 18.1 18 17 18C15.9 18 15 17.1 15 16ZM21 22H13V21.43C13 20.62 13.48 19.9 14.22 19.58C15.07 19.21 16.01 19 17 19C17.99 19 18.93 19.21 19.78 19.58C20.52 19.9 21 20.62 21 21.43V22ZM5 16C5 14.9 5.9 14 7 14C8.1 14 9 14.9 9 16C9 17.1 8.1 18 7 18C5.9 18 5 17.1 5 16ZM11 22H3V21.43C3 20.62 3.48 19.9 4.22 19.58C5.07 19.21 6.01 19 7 19C7.99 19 8.93 19.21 9.78 19.58C10.52 19.9 11 20.62 11 21.43V22ZM13.79 13H12.75V11.75C12.75 11.34 12.41 11 12 11C11.59 11 11.25 11.34 11.25 11.75V13H10.21C9.76 13 9.54 13.54 9.86 13.85L11.65 15.64C11.85 15.84 12.16 15.84 12.36 15.64L14.15 13.85C14.46 13.54 14.24 13 13.79 13Z" fill="#4BC4DF"/>
                            </g>
                          </svg>
                    </div>
                    <div class="heading-coreValueContent">
                        <h3>COLLABORATION</h3>
                    </div>
                </div>
                <div class="subheading-coreValueContent">
                    <p>Kami menghargai kerja sama tim dan berbagi ide. Kolaborasi memungkinkan kami mencapai hasil yang lebih besar daripada yang dapat dicapai secara individu.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
