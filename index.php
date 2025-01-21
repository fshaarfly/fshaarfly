<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambatan</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="icon" type="image/x-icon" href="assets/sambatanlogo.png">

    <style>
        html,
        body {
            scroll-behavior: smooth;
        }

        body::-webkit-scrollbar {
            display: none;
            /* Hilangkan scrollbar di Chrome, Edge, dan Safari */
        }

        /* Navbar default style */
        .navbar {
            transition: background-color 0.3s ease;
        }

        /* Navbar scrolled style */
        .navbar.scrolled {
            background-color: white !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Button styling */
        .butnn {
            color: #fff;
            background-color: #1C403E;
            text-decoration: none;
            border-radius: 15px;
            border: 2px solid #1C403E;
            transition: ease 0.3s;
        }

        .butnn:hover {
            color: #fff;
            background-color: #F0B33C;
            border: 2px solid #F0B33C;
        }

        section1 {
            background-image: url("assets/background.png");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        /* Style dasar untuk navbar */
        .navbar-nav .nav-item {
            position: relative;
        }

        /* Garis bawah yang akan bergerak */
        .navbar-nav .nav-item a {
            position: relative;
            display: inline-block;
            text-decoration: none;
            padding-bottom: 10px;
        }

        /* Garis bawah yang muncul di bawah link ketika aktif */
        .navbar-nav .nav-item a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            /* Menjaga garis di tengah */
            width: 0;
            /* Menentukan panjang garis bawah */
            height: 5px;
            border-radius: 10px;
            background-color: #F0B33C;
            /* Warna garis bawah */
            transition: width 0.3s ease;
        }

        /* Menambahkan efek garis bawah hanya saat link memiliki kelas 'active' */
        .navbar-nav .nav-item a.active::after {
            width: 50%;
            /* Menentukan panjang garis bawah saat aktif */
        }

        /* Menambahkan gaya khusus pada item yang aktif */
        .navbar-nav .nav-item a.active {
            font-weight: bold;
            color: #000;
            /* Mengubah warna saat link aktif */
        }

        .navbar-nav .nav-item.home a::after {
            width: 0;
            /* Menghilangkan garis bawah pada "Home" */
        }
    </style>
</head>

<body data-aos-easing="ease-out-back" data-aos-delay="0">
    <?php
    include("layout/navbar.html");
    ?>
    <section1 class="d-flex align-items-center justify-content-center vh-100" id="home">
        <div class="container px-5 pt-sm-0">
            <div class="row gx-5 align-items-center">
                <!-- Kolom teks -->
                <div class="col-xxl-7 col-lg-6 text-center text-lg-start" data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-anchor-placement="top-bottom">
                    <h3 class="text-warning">
                        Coffee And Space
                    </h3>
                    <h1 class="display-3 mb-3" style="color:#1C403E;   font-weight: 900;">
                        Kopi Segar Temani Nongkrong-mu.
                    </h1>
                    <h5 class="mb-4" style="color:#1C403E">
                        Berakit kehulu, Berenang ketepian,
                        <br>Bekawan dahulu, <img src="assets/sambatan.png" class="px-1 mb-1" style="width:110px; vertical-align: middle;"> kemudian.
                    </h5>

                    <div class="d-grid gap-3 d-sm-flex justify-content-center justify-content-lg-start">
                        <a class="butnn btn-primary btn-lg px-5 py-3 me-sm-3 fs-7 fw-semibold" href="#" draggable="false">Pesan Sekarang</a>
                    </div>
                </div>
                <!-- Kolom gambar -->
                <div class="col-xxl-5 col-lg-6 d-flex justify-content-center mt-5 mt-lg-0 d-none d-lg-block" data-aos="fade-up"
                    data-aos-duration="1200"
                    data-aos-anchor-placement="top-bottom">
                    <img class="img-fluid" src="assets/kopi.png" alt="kopi" draggable="false" />
                </div>
            </div>
        </div>
    </section1>
    <header class="d-flex align-items-center justify-content-center vh-100" id="tentang">
        <div class="container px-5 pt-sm-0">
            <div class="row gx-5 align-items-center">
                <!-- Kolom teks -->
                <div class="col-xxl-7 col-lg-6 text-center text-lg-start" data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-anchor-placement="top-bottom">
                    <h3 class="text-warning">
                        Coffee And Space
                    </h3>
                    <h1 class="display-3 mb-3" style="color:#1C403E;   font-weight: 900;">
                        Kopi Segar Temani Nongkrong-mu.
                    </h1>
                    <h5 class="mb-4" style="color:#1C403E">
                        Berakit kehulu, Berenang ketepian,
                        <br>Bekawan dahulu, <img src="assets/sambatan.png" class="px-1 mb-1" style="width:110px; vertical-align: middle;"> kemudian.
                    </h5>

                    <div class="d-grid gap-3 d-sm-flex justify-content-center justify-content-lg-start">
                        <a class="butnn btn-primary btn-lg px-5 py-3 me-sm-3 fs-7 fw-semibold" href="#">Pesan Sekarang</a>
                    </div>
                </div>
                <!-- Kolom gambar -->
                <div class="col-xxl-5 col-lg-6 d-flex justify-content-center mt-5 mt-lg-0 d-none d-lg-block" data-aos="fade-up"
                    data-aos-duration="1200"
                    data-aos-anchor-placement="top-bottom">
                    <img class="img-fluid" src="assets/kopi.png" alt="kopi" draggable="false" />
                </div>
            </div>
        </div>
    </header>
    <header class="d-flex align-items-center justify-content-center vh-100" id="menu">
        <div class="container px-5 pt-sm-0">
            <div class="row gx-5 align-items-center">
                <!-- Kolom teks -->
                <div class="col-xxl-7 col-lg-6 text-center text-lg-start" data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-anchor-placement="top-bottom">
                    <h3 class="text-warning">
                        Coffee And Space
                    </h3>
                    <h1 class="display-3 mb-3" style="color:#1C403E;   font-weight: 900;">
                        Kopi Segar Temani Nongkrong-mu.
                    </h1>
                    <h5 class="mb-4" style="color:#1C403E">
                        Berakit kehulu, Berenang ketepian,
                        <br>Bekawan dahulu, <img src="assets/sambatan.png" class="px-1 mb-1" style="width:110px; vertical-align: middle;"> kemudian.
                    </h5>

                    <div class="d-grid gap-3 d-sm-flex justify-content-center justify-content-lg-start">
                        <a class="butnn btn-primary btn-lg px-5 py-3 me-sm-3 fs-7 fw-semibold" href="#" draggable="false">Pesan Sekarang</a>
                    </div>
                </div>
                <!-- Kolom gambar -->
                <div class="col-xxl-5 col-lg-6 d-flex justify-content-center mt-5 mt-lg-0 d-none d-lg-block" data-aos="fade-up"
                    data-aos-duration="1200"
                    data-aos-anchor-placement="top-bottom">
                    <img class="img-fluid" src="assets/kopi.png" alt="kopi" />
                </div>
            </div>
        </div>
    </header>


    <script>
        // Menambahkan kelas "scrolled" ke navbar saat scroll
        document.addEventListener("DOMContentLoaded", function() {
            const navbar = document.getElementById("navbar");

            window.addEventListener("scroll", function() {
                if (window.scrollY > 50) {
                    navbar.classList.add("scrolled");
                } else {
                    navbar.classList.remove("scrolled");
                }
            });
        });
    </script>

    <script>
        // Menambahkan event listener untuk mengubah kelas aktif pada menu yang diklik
        const menuItems = document.querySelectorAll('.navbar-nav .nav-item a');

        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                // Menghapus kelas 'active' dari semua item
                menuItems.forEach(i => i.classList.remove('active'));

                // Menambahkan kelas 'active' ke item yang diklik
                this.classList.add('active');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 100,
        });
    </script>
</body>

</html>