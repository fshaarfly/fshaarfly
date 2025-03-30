document.addEventListener("DOMContentLoaded", function () {
    // Navbar Scroll Effect
    const navbar = document.getElementById("navbar");
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });

    // Navbar Active Link on Click
    const menuItems = document.querySelectorAll(".navbar-nav .nav-item a");
    menuItems.forEach((item) => {
        item.addEventListener("click", function () {
            menuItems.forEach((i) => i.classList.remove("active"));
            this.classList.add("active");
        });
    });

    // Navbar Active Link on Scroll
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");
    const setActiveLink = () => {
        let index = sections.length;
        while (--index && window.scrollY + 50 < sections[index].offsetTop) {}
        navLinks.forEach((link) => link.classList.remove("active"));
        navLinks[index].classList.add("active");
    };
    window.addEventListener("scroll", setActiveLink);
    setActiveLink();

    // Sidebar Toggle
    document.getElementById("sidebarToggle").addEventListener("click", function (event) {
        document.getElementById("sidebar").classList.toggle("show");
        event.stopPropagation();
    });
    document.getElementById("sidebarClose").addEventListener("click", function () {
        document.getElementById("sidebar").classList.remove("show");
    });
    document.addEventListener("click", function (event) {
        let sidebar = document.getElementById("sidebar");
        if (!sidebar.contains(event.target) && !event.target.matches("#sidebarToggle")) {
            sidebar.classList.remove("show");
        }
    });

    // Preloader & Typed.js
    let progress = 0;
    let loadingText = document.getElementById("loading-text");
    let fakeLoading = setInterval(() => {
        progress += 5;
        loadingText.innerText = progress + "%";
        if (progress >= 100) {
            clearInterval(fakeLoading);
            setTimeout(() => {
                document.getElementById("preloader").classList.add("hidden");
                var typed = new Typed(".welcome", {
                    strings: ["Welcome to my portfolio!", "I am a Fullstack Web Developer", "My Name is,", "fshaarfly."],
                    typeSpeed: 50,
                });
            }, 1500);
        }
    }, 100);

    // About Section Typed.js Animation
    let aboutSection = document.getElementById("about");
    let hasTypedRun = false;
    let observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting && !hasTypedRun) {
                hasTypedRun = true;
                var typed = new Typed(".about", {
                    strings: ["My name is <strong>Fasha Ar-Rafly</strong>, an 18-years-old passionate <strong>web developer</strong> from the vibrant city of Batam. I am currently in my 2nd semester of a Diploma 4 program in Software Engineering at Politeknik Negeri Batam, where I am honing my skills and creativity to contribute to the ever-evolving world of technology."],
                    typeSpeed: 5,
                });
            }
        });
    }, { threshold: 0.5 });
    observer.observe(aboutSection);

    // Custom Cursor Effect
    const cursor = document.querySelector(".custom-cursor");
    const circle = document.querySelector(".circle");
    let isMouseMoving = false;
    document.addEventListener("mousemove", (e) => {
        cursor.style.left = `${e.clientX}px`;
        cursor.style.top = `${e.clientY}px`;
        isMouseMoving = true;
    });
    circle.addEventListener("mouseenter", () => {
        cursor.style.transform = "translate(-50%, -50%) scale(1.5) rotate(0deg)";
        cursor.style.width = "64px";
        cursor.style.height = "64px";
    });
    circle.addEventListener("mouseleave", () => {
        cursor.style.transform = "translate(-50%, -50%) scale(1) rotate(90deg)";
        cursor.style.width = "1px";
        cursor.style.height = "1px";
        isMouseMoving = false;
    });
    document.addEventListener("scroll", () => {
        if (!isMouseMoving) {
            cursor.style.transform = "translate(-50%, -50%) scale(1) rotate(90deg)";
            cursor.style.width = "1px";
            cursor.style.height = "1px";
        }
    });

    // Thank You Section Animation & Scroll Indicator
    const thankYouSection = document.querySelector(".thankyou");
    const scrollIndicator = document.querySelector(".scroll");
    const observerThankYou = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            } else {
                entry.target.classList.remove("show");
            }
        });
    }, { threshold: 0.9 });
    observerThankYou.observe(thankYouSection);
    const handleScroll = () => {
        const scrollPosition = window.innerHeight + window.scrollY;
        const pageHeight = document.documentElement.scrollHeight;
        if (scrollPosition >= pageHeight - 1) {
            scrollIndicator.classList.add("hidden");
        } else {
            scrollIndicator.classList.remove("hidden");
        }
    };
    window.addEventListener("scroll", handleScroll);
});
