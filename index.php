<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fshaarfly | Portfolio</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="icon" type="image/x-icon" href="assets\icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
        html,
        body {
            scroll-behavior: smooth;
            background-color: #1d1d1d;
            overflow-x: hidden;
        }

        body::-webkit-scrollbar {
            display: none;
        }

        ::selection {
            color: #eae5df;
            background: #849571;
        }


        .navbar {
            transition: background-color 0.3s ease;
        }

        /* .navbar.scrolled {
            background-color: #1d1d1d !important;
        } */

        .navbar-nav .nav-item {
            position: relative;

        }

        .nav-link {
            color: #849571;
            font-size: large;

        }


        .navbar-nav .nav-item a {
            position: relative;
            display: inline-block;
            text-decoration: none;
            padding-bottom: 5px;

        }

        .navbar-nav .nav-item a:hover {
            color: #eae5df
        }

        .navbar-nav .nav-item a:active {
            color: #849571;

        }

        .navbar-nav .nav-item a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            border-radius: 10px;
            background-color: #849571;
            transition: width 0.3s ease;
        }

        .navbar-nav .nav-item a.active::after {
            width: 50%;
        }

        .navbar-nav .nav-item a.active {
            color: #000;
        }

        .navbar-nav .nav-item.home a.active {
            color: #849571;

        }

        .navbar-nav .nav-item.home a::after {
            width: 0;
        }

        .sidebar {
            position: fixed;
            top: 0;
            right: -250px;
            width: 250px;
            height: 100%;
            background-color: #eae5df;
            transition: right 0.3s ease-in-out;
            z-index: 1050;

        }

        .sidebar.show {
            right: 0;

        }

        .nav-item .nav-link {
            display: block;
            width: 100%;
            height: 100%;
            text-align: center;
        }

        .sidebar {
            background-color: rgb(24, 24, 24);
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-image: url("assets/noise.png");
            background-repeat: repeat;
            background-position: center;
            z-index: -1;
            opacity: 1%;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        .scroll-down-btn {
            display: inline-flex;
            justify-content: center;
            width: 1rem;
            height: 2.7rem;
            background-color: transparent;
            padding: 0.65rem;
            border: 4px solid #eae5df;
            border-radius: 100px;
            position: relative;
        }

        .scroll-down-btn::after {
            position: absolute;
            content: "";
            width: 0.5rem;
            height: 1rem;
            aspect-ratio: 1;
            border-radius: inherit;
            background-color: #eae5df;
            animation: scrolling 1.2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
        }

        @keyframes scrolling {
            0% {
                opacity: 0;
                transform: translateY(-10px);
            }

            100% {
                opacity: 1;
                transform: translateY(5px);
            }
        }

        .scroll p {
            color: #eae5df;
            font-size: large;
        }

        .bg {
            position: fixed;
            top: -50%;
            left: -50%;
            right: -50%;
            bottom: -50%;
            width: 200%;
            height: 200vh;
            background: transparent url('http://assets.iceable.com/img/noise-transparent.png') repeat 0 0;
            background-repeat: repeat;
            animation: bg-animation .2s infinite;
            opacity: .9;
            visibility: visible;
            z-index: 9999;
            pointer-events: none;
        }

        @keyframes bg-animation {
            0% {
                transform: translate(0, 0)
            }

            10% {
                transform: translate(-5%, -5%)
            }

            20% {
                transform: translate(-10%, 5%)
            }

            30% {
                transform: translate(5%, -10%)
            }

            40% {
                transform: translate(-5%, 15%)
            }

            50% {
                transform: translate(-10%, 5%)
            }

            60% {
                transform: translate(15%, 0)
            }

            70% {
                transform: translate(0, 10%)
            }

            80% {
                transform: translate(-15%, 0)
            }

            90% {
                transform: translate(10%, 5%)
            }

            100% {
                transform: translate(5%, 0)
            }
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9998;
            transition: opacity 0.7s ease-out, visibility 0.7s ease-out;
        }

        #preloader.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        #loading-text {
            font-size: 25px;
            color: #000;
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .loading-content dotlottie-player {
            opacity: 0;
            /* Mulai dari transparan */
            animation: fadeIn 0.1s ease-out forwards;
            /* Animasi muncul */
            animation-delay: 0.3s;
            /* Delay agar smooth */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
                /* Efek naik sedikit */
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            font-size: 500%;
            /* Default untuk desktop */
        }

        @media (max-width: 768px) {

            /* Tablet & Mobile */
            h1 {
                font-size: 300%;
                /* Ukuran lebih kecil di layar kecil */
            }
        }

        @media (max-width: 480px) {

            /* HP kecil */
            h1 {
                font-size: 200%;
                /* Lebih kecil lagi di layar sangat kecil */
            }
        }

        #about {
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>
    <div id="preloader">
        <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
        <dotlottie-player src="/assets/rocket.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>
        <p id="loading-text">0%</p>
    </div>
    <div class="main" id="main">
        <?php
        include("layout/navbar.html");
        ?>
        <section class="d-flex align-items-center justify-content-center vh-100" id="home">
            <div class="container px-5 pt-sm-0">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-12 text-center">
                        <h1 style="color: #eae5df; font-weight: bolder;">
                            <span class="welcome"></span>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="d-flex align-items-center justify-content-center vh-100" id="about">
            <div class="container px-5 pt-sm-0">
                <div class="row gx-5">
                    <div class="col-xxl-6 d-flex align-items-center justify-content-center text-center">
                        <h1 style="color: #1B1B1B; font-weight: bolder;">ABOUT</h1>
                    </div>
                    <div class="col-xxl-6 text-justify">
                        <h4 class="lh-base pb-3" style="color: #1B1B1B;"><span class="about"></span></h4>
                        <div class="row">
                            <div class="col-auto">
                                <p><i class="fa-solid fa-envelope me-2"></i>fasha.arrafly@gmail.com</p>
                            </div>
                            <div class="col-auto">
                                <a class="text-decoration-none" style="color:#1b1b1b;" href="https://github.com/fshaarfly/" target="_blank"><i class="fa-brands fa-square-github me-2"></i>fshaarfly</a>
                            </div>
                            <div class="col-auto">
                                <a class="text-decoration-none" style="color:#1b1b1b;" href="https://www.linkedin.com/in/fshaarfly/" target="_blank"><i class="fa-brands fa-linkedin me-2"></i>fshaarfly</a>
                            </div>
                        </div>
                        <p class="mb-0"><i class="fa-solid fa-location-dot me-2"></i>Batam kota, Kepulauan Riau, Indonesia.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="d-flex align-items-center justify-content-center vh-100" id="education">
            <div class="container px-5 pt-sm-0">
                <div class="row gx-5">
                    <div class="col-xxl-6 d-flex align-items-center justify-content-center text-center">
                        <h1 style="color: #1B1B1B; font-weight: bolder;">ABOUT</h1>
                    </div>
                    <div class="col-xxl-6 text-justify">
                        <h4 class="lh-base pb-3" style="color: #1B1B1B;"><span class="about"></span></h4>
                        <div class="row">
                            <div class="col-auto">
                                <p><i class="fa-solid fa-envelope me-2"></i>fasha.arrafly@gmail.com</p>
                            </div>
                            <div class="col-auto">
                                <a class="text-decoration-none" style="color:#1b1b1b;" href="https://github.com/fshaarfly/" target="_blank"><i class="fa-brands fa-square-github me-2"></i>fshaarfly</a>
                            </div>
                            <div class="col-auto">
                                <a class="text-decoration-none" style="color:#1b1b1b;" href="https://www.linkedin.com/in/fshaarfly/" target="_blank"><i class="fa-brands fa-linkedin me-2"></i>fshaarfly</a>
                            </div>
                        </div>
                        <p class="mb-0"><i class="fa-solid fa-location-dot me-2"></i>Batam kota, Kepulauan Riau, Indonesia.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="scroll position-fixed bottom-0 start-50 translate-middle-x d-flex align-items-center gap-2 mb-3">
            <p class="mb-0">Scroll</p>
            <a href="#about" class="scroll-down-btn" aria-label="Scroll Down"></a>
            <p class="mb-0">Down</p>
        </div>

    </div>
    <div class="bg"></div>


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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('section'); // Semua bagian konten
            const navLinks = document.querySelectorAll('.nav-link'); // Semua tautan di navbar

            const setActiveLink = () => {
                let index = sections.length;

                // Loop dari bawah ke atas untuk menemukan bagian yang sedang terlihat
                while (--index && window.scrollY + 50 < sections[index].offsetTop) {}

                // Menghapus kelas 'active' dari semua tautan
                navLinks.forEach((link) => link.classList.remove('active'));
                // Menambahkan kelas 'active' ke tautan yang sesuai
                navLinks[index].classList.add('active');
            };

            // Jalankan fungsi saat halaman di-scroll
            window.addEventListener('scroll', setActiveLink);

            // Jalankan fungsi pertama kali untuk memastikan status aktif benar
            setActiveLink();
        });
    </script>
    <script>
        document.getElementById("sidebarToggle").addEventListener("click", function(event) {
            document.getElementById("sidebar").classList.toggle("show");
            event.stopPropagation(); // Mencegah event klik menyebar ke document
        });

        document.getElementById("sidebarClose").addEventListener("click", function() {
            document.getElementById("sidebar").classList.remove("show");
        });

        // Tutup sidebar jika klik di luar sidebar
        document.addEventListener("click", function(event) {
            let sidebar = document.getElementById("sidebar");
            if (!sidebar.contains(event.target) && !event.target.matches("#sidebarToggle")) {
                sidebar.classList.remove("show");
            }
        });
    </script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let progress = 0;
            let loadingText = document.getElementById("loading-text");

            // Simulasi loading menggunakan interval
            let fakeLoading = setInterval(() => {
                progress += 5; // Tambah 5% setiap interval
                loadingText.innerText = progress + "%";

                if (progress >= 100) {
                    clearInterval(fakeLoading); // Hentikan interval saat mencapai 100%
                    setTimeout(() => {
                        document.getElementById("preloader").classList.add("hidden");

                        // Mulai animasi Typed.js setelah preloader selesai
                        var typed = new Typed('.welcome', {
                            strings: ['Welcome!,', 'To My Portfolio', 'fshaarfly.'],
                            typeSpeed: 50,
                        });

                    }, 1500); // Tambahkan sedikit delay agar smooth
                }
            }, 100);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let aboutSection = document.getElementById("about");
            let hasTypedRun = false; // Agar tidak dijalankan berkali-kali

            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !hasTypedRun) {
                        hasTypedRun = true; // Set agar tidak berulang
                        var typed = new Typed('.about', {
                            strings: [
                                'My name is <strong>Fasha Ar-Rafly</strong>, an 18-years-old passionate <strong>web developer</strong> from the vibrant city of Batam. I am currently in my 2nd semester of a Diploma 4 program in Software Engineering at Politeknik Negeri Batam, where I am honing my skills and creativity to contribute to the ever-evolving world of technology.'
                            ],
                            typeSpeed: 5,
                        });
                    }
                });
            }, {
                threshold: 0.5
            }); // 50% bagian about harus terlihat

            observer.observe(aboutSection);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>