<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel='icon' type="image/x-icon" href='assets/images/logo.png'>
    <title>Raja Ampat</title>

    <!-- Font Style -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans&amp;family=Playfair+Display:ital,wght@0,400;0,700;1,400&amp;display=swap"
        rel="stylesheet">

    <!-- Animasi -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/glightbox.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--Font Awesome / Icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">
    <audio id="myAudio" autoplay loop controls style="display: none;">
        <source src="assets/audio/music1.mp3" type="audio/mpeg">
    </audio>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body">
        </div>
    </div>
    <nav class="site-nav" style="position: fixed;" id="main-navbar">
        <div class="container">
            <div class="site-navigation">
                <a class="logo m-0 float-start" href="home.php" style="text-decoration: none;">Raja Ampat</a>
                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-start">
                    <li class="active"><a href="#tentang" style="text-decoration: none;">Tentang</a></li>
                    <li><a href="#destinasi" style="text-decoration: none;">Destinasi</a></li>
                    <li><a href="#galeri" style="text-decoration: none;">Galeri</a></li>
                    <li><a href="#aktivitas" style="text-decoration: none;">Aktivitas</a></li>
                </ul>
                <ul class="js-clone-nav d-none d-lg-inline-block text-end site-menu float-end">
                    <li class="cta-button"><a href="#kontak" style="text-decoration: none;">Booking</a></li>
                </ul>
                <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                    data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </nav>

    <section>
        <div id="headerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="hero overlay" style="background-image: url('assets/images/carousel-1.jpg');">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-5">
                                    <h1 class="heading mb-5 aos-init aos-animate" data-aos="fade-up">Selamat
                                        Datang di
                                        Pariwisata Raja Ampat</h1>
                                </div>
                                <div class="photo-info">
                                    <div class="d-flex align-items-center aos-init">
                                        <i class="fa fa-angle-down me-4" aria-hidden="true"></i>
                                        <span><a href="#tentang" class style="text-decoration: none;">Lihat
                                                lebih banyak ...</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="hero overlay" style="background-image: url('assets/images/carousel-4.jpg');">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-5">
                                    <h1 class="heading mb-5 aos-init aos-animate" data-aos="fade-up">Selamat
                                        Datang di
                                        Pariwisata Raja Ampat</h1>
                                </div>
                                <div class="photo-info">
                                    <div class="d-flex align-items-center aos-init">
                                        <i class="fa fa-angle-down me-4" aria-hidden="true"></i>
                                        <span><a href="#tentang" class style="text-decoration: none;">Lihat
                                                lebih banyak ...</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#headerCarousel" role="button" data-bs-slide="prev">
                <div class="bg-black rounded-circle p-2 shadow-sm"
                    style="width: 50px; height: 50px;background-color: #034C5A!important;opacity: 0;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </div>
            </a>
            <a class="carousel-control-next" href="#headerCarousel" role="button" data-bs-slide="next">
                <div class="bg-black rounded-circle p-2 shadow-sm"
                    style="width: 50px; height: 50px;background-color: #034C5A!important;opacity: 0;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </div>
            </a>
        </div>
    </section>

    <section>
        <div class="section section-2" id="tentang"
            style="background-image: url('assets/images/bg-1.png');background-size: cover;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <span class="subheading aos-init" data-aos="fade-up" style="color:#034C5A">Tentang</span>
                        <h2 class="heading mb-3 aos-init" data-aos="fade-up" data-aos-delay="100">"Unveiling the Best
                            Underwater Beauty in Raja Ampat"</h2>
                        <p data-aos="fade-up" data-aos-delay="200" class="aos-init">Raja Ampat adalah destinasi
                            wisata yang terkenal dengan keindahan alam
                            bawah
                            lautnya. Terletak di Papua Barat, Indonesia,
                            Raja Ampat merupakan surga bagi para
                            penyelam
                            dan penggemar keindahan alam.</p>
                        <p id="hidden-paragraph" data-aos="fade-up" data-aos-delay="300" class="aos-init"
                            style="display: none;">Raja Ampat terdiri
                            dari
                            lebih dari 1.500 pulau yang tersebar di
                            sekitar
                            Laut Seram dan Laut Halmahera. Keindahan
                            alam
                            bawah lautnya yang tak tertandingi mencakup
                            terumbu karang yang berwarna-warni, biota
                            laut
                            langka, dan keanekaragaman hayati yang
                            mengagumkan.</p>
                        <p class="my-5 aos-init" data-aos="fade-up" data-aos-delay="300"><a href="#tentang"
                                class="btn btn-primary rounded-5 px-4 border-0 shadow-sm"
                                style="background-color: #034C5A;" onclick="toggleParagraphVisibility();">Read
                                more</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-6 col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="400">
                                <img src="assets/images/card-2.jpg" alt="Image" class="img-fluid shadow-lg"
                                    style="height: 400px!important;object-fit: cover;">
                            </div>
                            <div class="col-6 col-lg-6 mt-lg-5 aos-init" data-aos="fade-up" data-aos-delay="500">
                                <img src="assets/images/carousel-5.jpg" alt="Image" class="img-fluid shadow-lg"
                                    style="height: 400px!important;object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="light" id="destinasi" data-aos="fade-up" data-aos-delay="100" style="background-color: white;">
        <div class="section section-2 container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <span class="subheading aos-init" data-aos="fade-up" style="color:#034C5A">Destinasi</span>
                    <h2 class="heading mb-5 aos-init" data-aos="fade-up" data-aos-delay="100">Destinasi Unggulan Raja
                        Ampat</h2>
                </div>
            </div>
            <article class="postcard light blue" data-aos="fade-up" data-aos-delay="500">
                <a class="postcard__img_link"
                    href="https://www.indonesia.travel/gb/en/destinations/maluku-papua/raja-ampat/wayag-island"
                    target="_blank">
                    <img class="postcard__img" src="assets/images/destinasi-1.jpg" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title blue"><a
                            href="https://www.indonesia.travel/gb/en/destinations/maluku-papua/raja-ampat/wayag-island"
                            style="text-decoration: none;">Wajag Island</a></h1>
                    <div class="postcard__subtitle small">
                        <a style="text-decoration: none;" target="_blank"
                            href="https://maps.app.goo.gl/q7tSsFPeMyHCPqb66">
                            <i class="fas fa-map me-2"></i>Lokasi
                            Pariwisata
                        </a>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Pulau Wayag
                        adalah salah satu pulau yang berada dalam
                        distrik Raja Ampat di provinsi Papua Barat.
                        Pulau ini terkenal karena atolnya yang indah dan
                        kehidupan bawah laut yang luar biasa yang
                        mencakup luas total sekitar 155.000 hektar,
                        sekitar 383.013,3 acre.</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item play blue px-4">
                            <a>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard light red" data-aos="fade-up" data-aos-delay="500">
                <a class="postcard__img_link"
                    href="https://www.indonesia.travel/id/en/destinations/maluku-papua/raja-ampat/waigeo-island"
                    target="_blank">
                    <img class="postcard__img" src="assets/images/destinasi-2.jpg" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title red"><a
                            href="https://www.indonesia.travel/id/en/destinations/maluku-papua/raja-ampat/waigeo-island"
                            style="text-decoration: none;">Waigeo</a></h1>
                    <div class="postcard__subtitle small">
                        <a style="text-decoration: none;" target="_blank"
                            href="https://maps.app.goo.gl/hAgikV534vw5RS8p7">
                            <i class="fas fa-map me-2"></i>Lokasi
                            Pariwisata
                        </a>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Waigeo adalah
                        sebuah pulau di provinsi Papua Barat Daya di
                        Indonesia timur. Pulau ini juga dikenal sebagai
                        Amberi atau Waigiu. Ini adalah pulau terbesar
                        dari empat pulau utama dalam kepulauan Raja
                        Ampat, terletak di antara Halmahera dan sekitar
                        65 kilometer di sebelah barat laut pantai Papua
                        Nugini.</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item play red px-4">
                            <a>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard light green" data-aos="fade-up" data-aos-delay="500">
                <a class="postcard__img_link"
                    href="https://www.stayrajaampat.com/accommodation/mansuar-raja-ampat-bungalow/">
                    <img class="postcard__img" src="assets/images/destinasi-3.jpg" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title green"><a
                            href="https://www.stayrajaampat.com/accommodation/mansuar-raja-ampat-bungalow/"
                            style="text-decoration: none;">Mansuar</a></h1>
                    <div class="postcard__subtitle small">
                        <a style="text-decoration: none;" target="_blank"
                            href="https://maps.app.goo.gl/FJAYf5oXhqMx7SH4A">
                            <i class="fas fa-map me-2"></i>Lokasi
                            Pariwisata
                        </a>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Pulau Mansuar
                        adalah pulau yang berada di distrik Misool
                        Selatan, kabupaten Raja Ampat, Papua Barat Daya.
                        Menuju pulau Mansuar bisa menggunakan
                        transportasi speedboat dari kota Waisai dengan
                        waktu tempuh sekitar 30 menit</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item play green">
                            <a>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                                <i class="fas fa-star" style="color:rgb(255, 191, 0)"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </section>

    <section>
        <div class="album pt-2 bg-body-tertiary" id="galeri"
            style="background-image: url('assets/images/bg-2.png');background-size: cover;">
            <div class="container section">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h2 class="heading mb-5 aos-init" data-aos="fade-up" data-aos-delay="100">Galeri</h2>
                    </div>
                </div>
                <div class="row row-cols-1 aos-init aos-animate row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm rounded-5 gallery" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="assets/images/card-1.jpg" class="rounded-5 images"
                                style="height: 300px;width: 100%;object-fit: cover;transition-timing-function: ease-in-out;" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm rounded-5 gallery" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="assets/images/card-2.jpg" class="rounded-5 images"
                                style="height: 300px;width: 100%;object-fit: cover;" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm rounded-5 gallery" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="assets/images/carousel-1.jpg" class="rounded-5 images"
                                style="height: 300px;width: 100%;object-fit: cover;" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm rounded-5 gallery" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="assets/images/carousel-2.jpg" class="rounded-5 images"
                                style="height: 300px;width: 100%;object-fit: cover;" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm rounded-5 gallery" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="assets/images/carousel-3.jpg" class="rounded-5 images"
                                style="height: 300px;width: 100%;object-fit: cover;" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm rounded-5 gallery" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="assets/images/carousel-4.jpg" class="rounded-5 images"
                                style="height: 300px;width: 100%;object-fit: cover;" />
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm rounded-5 gallery" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="assets/images/carousel-5.jpg" class="rounded-5 images"
                                style="height: 300px;width: 100%;object-fit: cover;" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm rounded-5 gallery" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="assets/images/gallery-1.jpg" class="rounded-5 images"
                                style="height: 300px;width: 100%;object-fit: cover;" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm rounded-5 gallery" data-aos="zoom-in" data-aos-duration="1000">
                            <img src="assets/images/gallery-2.jpg" class="rounded-5 images"
                                style="height: 300px;width: 100%;object-fit: cover;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light" id="aktivitas">
        <div class="container">
            <div class="row" style="height: 500px!Important;">
                <div class="col-lg-12 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <span class="subheading">Aktivitas</span>
                    <h2 class="heading mb-5">Hal yang harus Anda
                        coba</h2>
                    <div class="custom-accordion" id="accordion_1">
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-plus me-3" aria-hidden="true"></i>
                                    Snorkeling
                                </button>
                            </h2>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    Nikmati petualangan bawah laut yang luar
                                    biasa di Raja Ampat, surganya para
                                    snorkeler. Terletak di Papua Barat,
                                    Indonesia, Raja Ampat menawarkan
                                    pengalaman snorkeling tak tertandingi
                                    dengan terumbu karang yang
                                    berwarna-warni, biota laut yang kaya,
                                    dan keindahan alam bawah laut yang
                                    memukau. Jelajahi keindahan alam bawah
                                    laut ini dan temukan dunia bawah laut
                                    yang penuh dengan kehidupan yang
                                    menakjubkan, dari ikan-ikan berwarna
                                    cerah hingga terumbu karang yang
                                    spektakuler.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i
                                        class="fa fa-plus me-3" aria-hidden="true"></i>Penyelaman</button>
                            </h2>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    Terletak di Papua Barat, Indonesia, Raja
                                    Ampat adalah surga bagi para penyelam
                                    dengan terumbu karang yang
                                    berwarna-warni, biota laut langka, dan
                                    keanekaragaman hayati yang luar biasa.
                                    Jelajahi dasar laut yang penuh dengan
                                    keindahan alam yang memukau, dari
                                    makhluk laut yang eksotis hingga
                                    pemandangan bawah laut yang menakjubkan.
                                    Penyelaman di Raja Ampat akan membawa
                                    Anda ke dunia yang penuh dengan
                                    keajaiban dan pengalaman tak terlupakan
                                    di perairan yang masih alami dan terjaga
                                    dengan baik.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree"><i class="fa fa-plus me-3"
                                        aria-hidden="true"></i>Budaya
                                    Lokal</button>
                            </h2>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordion_1">
                                <div class="accordion-body">
                                    Budaya lokal di Raja Ampat adalah
                                    warisan berharga dari masyarakat asli
                                    yang tinggal di kepulauan ini. Dikenal
                                    dengan keramahannya, penduduk Raja Ampat
                                    menjaga tradisi dan kearifan lokal
                                    mereka dengan bangga. Anda akan
                                    merasakan kehangatan sambutan mereka
                                    saat berinteraksi dengan penduduk
                                    setempat.<br>
                                    Budaya Raja Ampat mencakup tarian
                                    tradisional yang indah, seni tenun, dan
                                    musik yang khas. Anda dapat mengunjungi
                                    desa-desa tradisional yang masih
                                    mempraktikkan cara hidup tradisional,
                                    melihat pertunjukan tari-tarian yang
                                    menggambarkan kisah-kisah lokal, dan
                                    bahkan berkesempatan untuk mencicipi
                                    hidangan tradisional khas Papua.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="space">
        <div class="section section-2 space">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 hide-on-mobile hide-on-tablet" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000">
                        <img src="assets/images/gallery-1.jpg" style="width:100%;background-position:cover">
                        <!-- <video autoplay muted loop class="w-100" class="video-container hide-on-mobile hide-on-tablet">
                            <source src="assets/video/video-1.mp4" type="video/mp4">
                        </video> -->
                    </div>
                    <div class="col-lg-6">
                        <span class="subheading aos-init" data-aos="fade-up" style="color:#034C5A">Booking </span>
                        <h2 class="heading mb-3 aos-init" data-aos="fade-up" data-aos-delay="100">Daftarkan dirimu di
                            RajaAmpat sekarang juga!</h2>
                        <?php
                        if (isset($_SESSION["success_message"])) {
                            echo "<div class='alert alert-success' role='alert'>
                           " . $_SESSION["success_message"] . "
                          </div>";
                            unset($_SESSION["success_message"]); // Clear the message
                        }
                        ?>
                        <form id="myForm" data-aos="fade-up" method="post" action="insert_data.php"
                            data-aos-delay="100">
                            <div class="mb-3">
                                <label for="NIK" class="form-label">NIK</label>
                                <input type="text" id="NIK" name="NIK"
                                    class="form-control rounded-5 border-5 p-4 shadow-sm"
                                    style="border-color: #116c7e76;" required>
                            </div>
                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama Lengkap</label>
                                <input type="text" id="Nama" name="Nama"
                                    class="form-control rounded-5 border-5 p-4 shadow-sm"
                                    style="border-color: #116c7e76;" required>
                            </div>
                            <div class="mb-3">
                                <label for="Usia" class="form-label">Usia</label>
                                <input type="number" id="Usia" name="Usia"
                                    class="form-control rounded-5 border-5 p-4 shadow-sm"
                                    style="border-color: #116c7e76;" required>
                            </div>
                            <div class="mb-3">
                                <label for="TanggalBooking" class="form-label">Tanggal Booking</label>
                                <input type="date" id="TanggalBooking" name="TanggalBooking"
                                    class="form-control rounded-5 border-5 p-4 shadow-sm"
                                    style="border-color: #116c7e76;" required>
                            </div>
                            <div class="mb-3">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" id="Email" name="Email"
                                    class="form-control rounded-5 border-5 p-4 shadow-sm"
                                    style="border-color: #116c7e76;" required>
                            </div>
                            <div class="mb-3">
                                <label for="NoTelpon" class="form-label">Nomor Telpon</label>
                                <input type="text" id="NoTelpon" name="NoTelpon"
                                    class="form-control rounded-5 border-5 p-4 shadow-sm"
                                    style="border-color: #116c7e76;" required>
                            </div>
                            <div class="mb-3">
                                <label for="KotaAsal" class="form-label">Kota Asal</label>
                                <input type="text" id="KotaAsal" name="KotaAsal"
                                    class="form-control rounded-5 border-5 p-4 shadow-sm"
                                    style="border-color: #116c7e76;" required>
                            </div>
                            <div class="mb-3">
                                <label for="Destinasi">Destinasi</label>
                                <select class="form-select rounded-5 border-5 p-3 shadow-sm"
                                    aria-label="Pilih Destinasi" name="Destinasi" style="border-color: #116c7e76;"
                                    required>
                                    <option value="Wajag Island">Wajag Island</option>
                                    <option value="Waigeo">Waigeo</option>
                                    <option value="Mansuar">Mansuar</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="JumlahOrang" class="form-label">Jumlah Orang</label>
                                <input type="number" id="JumlahOrang" name="JumlahOrang"
                                    class="form-control rounded-5 border-5 p-4 shadow-sm"
                                    style="border-color: #116c7e76;" required>
                            </div>
                            <button type="submit" id="submitBtn" value="Submit"
                                class="btn btn-primary px-5 py-2 border-0 shadow-sm rounded-5"
                                style="background-color:#034C5A">Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-image: url('assets/images/card-2.jpg');background-size: cover;">
        <div class="section profile3 section-2" style="background-color: #000000b5;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                        <h2 class="heading mb-5 text-center" style="color:white">Profil Kami</h2>
                        <div class="postcard__subtitle small">
                        </div>
                        <div class="wrapper" style="display: flex;
                            justify-content: center;">
                            <div class="profile2 shadow-lg" style="background-image: url('assets/images/yuya.png');">
                                <div class="overlay2">
                                    <div class="about d-flex flex-column">
                                        <h4>Soffia Noor Aisyah</h4>
                                        <span>5002201125</span>
                                    </div>
                                </div>
                            </div>
                            <div class="profile2 shadow-lg"
                                style="background-image: url('assets/images/kentaro.jpg');margin-left:50px">
                                <div class="overlay2">
                                    <div class="about d-flex flex-column">
                                        <h4>Siti Azzalea Annisa</h4>
                                        <span>5002201045</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="site-footer">
        <div class="container">
            <footer class="text-center">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#tentang" class="nav-link px-2 text-muted">Tentang</a></li>
                    <li class="nav-item"><a href="#destinasi" class="nav-link px-2 text-muted">Destinasi</a></li>
                    <li class="nav-item"><a href="#galeri" class="nav-link px-2 text-muted">Galeri</a></li>
                    <li class="nav-item"><a href="#aktivitas" class="nav-link px-2 text-muted">Aktivitas</a></li>
                    <li class="nav-item"><a href="#kontak" class="nav-link px-2 text-muted">Booking</a></li>
                </ul>
                <p>
                    Copyright ©
                    <script>document.write(new Date().getFullYear());</script>
                    <i class="icon-heart text-danger" aria-hidden="true"></i> by <a>Siti Azzalea Annisa & Soffia Noor
                        Aisyah</a>
                </p>
            </footer>
        </div>
    </div>

    <div id="overlayer" style="background-color: #00181de0;">
        <div class="loader" id="loader">
            <img src="assets/images/logo.png" alt="Logo" class="logoloader">
        </div>
    </div>

    <button type="button" class="btn btn-floating btn-lg rounded-5"
        style="background-color: #034C5A;color:white;width: 50px;height: 50px;" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/navbar.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>