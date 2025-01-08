@extends('layouts.layout')

@section('content')
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="content">
                    <p class="banner-baslik-yazi select-disable fw-lighter">ENJOY YOUR DINNER</p>
                    <p class="banner-alt-yazi pb-5 pt-2 select-disable">Enjoy the real fresh food from our chef.</p>
                    <a href="#" class="button-1">BOOK NOW</a>
                    <a href="#" class="button-2">VIEW MENU</a>
                </div>
                <img class="select-disable"
                     src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/slide-1.jpg') }}"
                     alt="Slide 1">
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="content">
                    <p class="banner-baslik-yazi select-disable">EXQUIESITE ATMOSPHERE</p>
                    <p class="banner-alt-yazi pb-5 pt-2 select-disable">Enjoy the real fresh food from our chef.</p>
                    <a href="#" class="button-1">BOOK NOW</a>
                    <a href="#" class="button-2">VIEW MENU</a>
                </div>
                <img class="select-disable"
                     src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/slide-2.jpg') }}"
                     alt="Slide 2">
            </div>
        </div>
        <!-- Navigation Buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Content After Slider -->
    <div class="featured-contents">
        <div class="custom-flex">
            <div class="custom-group">
                <div class="custom-image-container">
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-1.jpg') }}"
                         class="custom-image" alt="Custom Image">
                    <div class="icon-overlay">
                        <i class="fa-solid fa-play icon-borders" onclick="openVideoModal()"></i>
                        <!-- Font Awesome Video İkonu -->
                    </div>
                </div>
                <div class="custom-links">
                    <div class="custom-tags">
                        <p class="text-white fs-6">
                            Healthy & Tasty
                        </p>
                    </div>
                </div>
                <p class="custom-title">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>

                <div class="">
                    <a class="read-more-links" href="">
                        READ MORE
                    </a>
                </div>
            </div>
        </div>
        <div class="custom-flex">
            <div class="custom-group">
                <div class="custom-image-container">
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-2.jpg') }}"
                         class="custom-image" alt="Custom Image">
                    <div class="icon-overlay">
                        <i class="fa-regular fa-images icon-borders" onclick="openGalleryModal()"></i>
                        <!-- Font Awesome Galeri İkonu -->
                    </div>
                </div>
                <div class="custom-links">
                    <div class="custom-tags">
                        <p class="text-white fs-6">
                            Today's Special
                        </p>
                    </div>
                </div>
                <p class="custom-title">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>

                <div class="">
                    <a class="read-more-links" href="">
                        READ MORE
                    </a>
                </div>
            </div>
        </div>
        <div class="custom-flex">
            <div class="custom-group">
                <div class="custom-image-container">
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-3.jpg') }}"
                         class="custom-image" alt="Custom Image">
                    <div class="icon-overlay">
                        <i class="fa-regular fa-images icon-borders" onclick="openGalleryModal()"></i>
                        <!-- Font Awesome Galeri İkonu -->
                    </div>
                </div>
                <div class="custom-links">
                    <div class="custom-tags">
                        <p class="text-white fs-6">
                            Romantic Dinner
                        </p>
                    </div>
                </div>
                <p class="custom-title">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                </p>

                <div class="">
                    <a class="read-more-links" href="">
                        READ MORE
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Video Modal -->
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeVideoModal()">&times;</span>
            <video controls id="videoElement">
                <source src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/videos/sample-video.mp4') }}"
                        type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <!-- Galeri Modal -->
    <div id="galleryModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeGalleryModal()">&times;</span>
            <div class="gallery">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-1.jpg') }}"
                     alt="Gallery Image 1">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-2.jpg') }}"
                     alt="Gallery Image 2">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-3.jpg') }}"
                     alt="Gallery Image 3">
            </div>
        </div>
    </div>
    <div class="chef-area">
        <div class="chef-picture">
            <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/chef.jpg') }}"
                 alt="Gallery Image 1">
        </div>
        <div class="chef-description">
            <h1>WELCOME TO DELIZUS</h1>
            <h3>The Art of Cookings</h3>
            <div class="orange-line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
            <button href="#" class="button-2 btn active">READ MORE</button>
        </div>
    </div>
    <!-- Page Title -->
    <div class="text-danger text-center fs-1 fw-bold screen-height"> HOME</div>

@endsection
@push('scripts')
    <script>
        // Sayfa tamamen yüklendikten sonra fonksiyonlar çalışacak
        document.addEventListener("DOMContentLoaded", function () {

            // Video Modal'ını Açma
            function openVideoModal() {
                var modal = document.getElementById("videoModal");
                modal.style.display = "flex";  // Modal'ı açıyoruz
            }

            // Video Modal'ını Kapatma
            function closeVideoModal() {
                var modal = document.getElementById("videoModal");
                modal.style.display = "none";  // Modal'ı kapatıyoruz
                var video = document.getElementById("videoElement");
                video.pause();  // Video durduruluyor
            }

            // Galeri Modal'ını Açma
            function openGalleryModal() {
                var modal = document.getElementById("galleryModal");
                modal.style.display = "flex";  // Galeri modal'ını açıyoruz
            }

            // Galeri Modal'ını Kapatma
            function closeGalleryModal() {
                var modal = document.getElementById("galleryModal");
                modal.style.display = "none";  // Galeri modal'ını kapatıyoruz
            }

            // Global scope'ta fonksiyonlara erişim sağlıyoruz
            window.openVideoModal = openVideoModal;
            window.closeVideoModal = closeVideoModal;
            window.openGalleryModal = openGalleryModal;
            window.closeGalleryModal = closeGalleryModal;

        });
    </script>
@endpush


