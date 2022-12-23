<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Profitku</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url(); ?>assets/img/logo_url.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700' rel='stylesheet'>

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/fonts/flaticon/font/flaticon.css">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet">
</head>

<body class="bg-white" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <?php
    // $numberAPI = $website->phone;
    // $n1API = substr($numberAPI, 1);
    // $apiWa = $n1API;
    $apiWa = '2286026843';

    $waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20Sahabat%20Profitku..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
    ?>
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0" id="home">
        <img src="assets/img/img-header.png" class="img-fluid position-absolute end-0 bottom-0" alt="">
        <nav class="navbar navbar-expand-lg navbar-light px-4 py-3">
            <div class="container">
                <a href="<?= base_url(); ?>" class="navbar-brand p-0">
                    <!-- <h1 class="m-0">FitApp</h1> -->
                    <img src="<?= base_url(); ?>assets/img/logo_header.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#testimoni" class="nav-item nav-link">Testimony</a>
                        <a href="#demo" class="nav-item nav-link">Demo</a>
                        <a href="#blog" class="nav-item nav-link">Blog</a>
                        <a href="#faq" class="nav-item nav-link">FAQ</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="<?= $waLink; ?>" target="_blank"
                        class="btn bg-blue text-white fw-bold rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Start
                        Free Trial</a>
                </div>
            </div>
        </nav>

        <div class="container-xxl container-1520 hero-header position-relative">
            <div class="container">
                <div class="row justify-content-center align-items-center mx-0">
                    <div class="col-lg-6 text-center text-lg-start">
                        <div class="col-max">
                            <h1 class="txt-black-blue mb-4 animated slideInDown">Sekarang Anda Bisa Mengontrol Kinerja
                                SDM
                                Hanya dalam Satu Sentuhan</h1>
                            <p class="txt-black pb-3 animated slideInDown">Mau Coba Business TOOL KIT yang sudah
                                membantu lebih dari 1.000 UKM Autopilot ?</p>
                            <div class="mt-5">
                                <a href="<?= $waLink; ?>" target="_blank"
                                    class="btn exp txt-blue py-sm-2 px-4 px-sm-4 rounded-pill me-2 animated slideInLeft">Explore
                                    More</a>
                                <a href="<?= $waLink; ?>" target="_blank"
                                    class="btn bg-blue py-sm-2 px-4 px-sm-4 rounded-pill animated slideInRight">Free
                                    Trial</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-0 text-end mt-5 mt-lg-0 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="play-video">
                            <div class="img text-start">
                                <img src="<?= base_url(); ?>assets/img/img-video1.png" class="img-fluid" alt="">
                            </div>
                            <div class="box-watch-video text-center py-3 px-4 rounded-10 text-white text-uppercase"
                                data-aos="fade-left" data-aos-delay="200">
                                <a href="https://www.youtube.com/watch?v=uz7SgJpnlvw&feature=emb_logo"
                                    class="glightbox btn-watch-video w-100">
                                    <div
                                        class="d-flex align-items-center position-relative bg-blue px-4 py-2 rounded-20">
                                        <img class="img-fluid bgvideo me-2"
                                            src="<?= base_url(); ?>assets/img/icon-video.png" alt="">
                                        <h6 class="text-white mb-0">Watch Video</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->