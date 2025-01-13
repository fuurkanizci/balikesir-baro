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
        allowTouchMove: false,
        loop: true,
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
// Video Modal'ını Açma
function openVideoModal() {
    var modal = document.getElementById("videoModal");
    modal.style.display = "flex";
}

// Video Modal'ını Kapatma
function closeVideoModal() {
    var modal = document.getElementById("videoModal");
    modal.style.display = "none";
    var video = document.getElementById("videoElement");
    video.pause();  // Video durduruluyor
}

// Galeri Modal'ını Açma
function openGalleryModal() {
    var modal = document.getElementById("galleryModal");
    modal.style.display = "flex";
}

// Galeri Modal'ını Kapatma
function closeGalleryModal() {
    var modal = document.getElementById("galleryModal");
    modal.style.display = "none";
}

document.addEventListener('DOMContentLoaded', function () {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('#navbarSupportedContent');

    navbarToggler.addEventListener('click', function () {
        if (navbarCollapse.classList.contains('show')) {
            navbarCollapse.style.maxHeight = '0';
        } else {
            navbarCollapse.style.maxHeight = `${navbarCollapse.scrollHeight}px`;
        }
        navbarCollapse.classList.toggle('show');
    });
});

document.querySelectorAll('.counter').forEach(counter => {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-count');
                    const count = +counter.innerText;

                    const increment = target / 100; // Hız
                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 30); // 30ms
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
                observer.unobserve(counter); // Animasyon tamamlandığında gözlemi durdur
            }
        });
    });

    observer.observe(counter);
});



const swiper = new Swiper('.mySwiper1', {
    slidesPerView: 3,
    spaceBetween: 0,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {
        320: { // 320px ve üstü
            slidesPerView: 1,
            spaceBetween: 10,
        },
        640: { // 640px ve üstü
            slidesPerView: 2,
            spaceBetween: 15,
        },
        1024: { // 1024px ve üstü
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
});






document.addEventListener('DOMContentLoaded', function() {
    const dateInput = document.getElementById('datepicker');

    dateInput.addEventListener('focus', function() {
        if (this.value === '') {
            this.setAttribute('placeholder', '07/06/2003');
        }
    });

    dateInput.addEventListener('blur', function() {
        if (this.value !== '') {
            this.setAttribute('placeholder', '');
        }
    });
});









