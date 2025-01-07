// Bootstrap ve SCSS dosyalarını içe aktar
import 'swiper/swiper-bundle.min.css';
import Swiper, { Navigation, Pagination } from 'swiper';
import 'swiper/swiper-bundle.min.css'; // Swiper CSS dosyasını dahil ettiğinizden emin olun

Swiper.use([Navigation, Pagination]);

import './bootstrap';
import '../scss/app.scss';
import.meta.glob([
    '../images/**'
]);

// DOM yüklendiğinde çalışacak işlemler
document.addEventListener('DOMContentLoaded', () => {
    // Navbar için scroll işlemleri
    const navbar = document.querySelector('.navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled'); // 50px'den fazla kaydırıldığında sınıf ekle
            } else {
                navbar.classList.remove('scrolled'); // 50px'den az ise sınıfı kaldır
            }
        });
    } else {
        console.error('Navbar bulunamadı! .navbar sınıfını kontrol edin.');
    }

    // Scroll To Top Button işlemleri
    const mybutton = document.getElementById("scrollToTopBtn");
    if (mybutton) {
        window.onscroll = function () {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                mybutton.style.display = "block"; // Butonu göster
            } else {
                mybutton.style.display = "none"; // Butonu gizle
            }
        };

        mybutton.onclick = function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth" // Yumuşak kaydırma
            });
        };
    } else {
        console.error('"scrollToTopBtn" ID\'li bir element bulunamadı!');
    }

    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 0,
        centeredSlides: true,
        allowTouchMove:false,
        loop:true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });



    // Footer dinamik copyright ekleme
    const copyrightElement = document.getElementById("footer-copyright");
    if (copyrightElement) {
        const currentYear = new Date().getFullYear(); // Dinamik yıl
        const copyrightText = `© Copyright ${currentYear} - Delizus by OceanThemes`;
        copyrightElement.textContent = copyrightText; // Metni ekle
    } else {
        console.error('"footer-copyright" ID\'li bir element bulunamadı!');
    }
});

