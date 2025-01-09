@extends('layouts.layout')

@section('content')
<section id="home">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="content">
                    <p class="banner-title select-disable fw-lighter">ENJOY YOUR DINNER</p>
                    <p class="banner-subtitle select-disable">Enjoy the real fresh food from our chef.</p>
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
                    <p class="banner-title select-disable">EXQUIESITE ATMOSPHERE</p>
                    <p class="banner-subtitle pb-5 pt-2 select-disable">Enjoy the real fresh food from our chef.</p>
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
</section>
<section id="section1">
    <!-- Content After Slider -->
    <div class="featured-contents ">
        <div class="custom-flex ">
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
                    <a class="read-more-links " href="">
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
</section>
<!-- Video Modal -->

<div id="videoModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeVideoModal()">&times;</span>
        <video controls id="videoElement">
            <source
                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/videos/sample-video.mp4') }}"
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
<section id="section2">
    <div class="chef-area">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="chef-picture">
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/chef.jpg') }}"
                        alt="Gallery Image 1">
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="chef-description">
                    <h1>WELCOME TO DELIZUS</h1>
                    <h3>The Art of Cookings</h3>
                    <div class="orange-line"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.
                    </p>
                    <button href="#" class="button-2 btn ">READ MORE</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section3">
    <div class="parallax parallax-1">
        <div class="container">
            <div class="text-center mt-4">
                <h1 class="text-uppercase">Today's Special</h1>
                <h3 class="italic-font-style">Fresh and delicious</h3>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="orange-line"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3  ">
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <div class="custom-image-container">
                            <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/parallax-pic-1.jpg') }}"
                                class="custom-image" alt="Custom Image">
                            <div class="icon-overlay">
                                <i class="fa-regular fa-images icon-borders" onclick="openGalleryModal()"></i>
                            </div>
                        </div>
                        <div class="menu-1-settings">
                            <p>Cheese Shrimp Roll</p>
                            <hr>
                            <h6 class="">$42</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ">
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <div class="custom-image-container">
                            <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/parallax-pic-2.jpg') }}"
                                class="custom-image" alt="Custom Image">
                            <div class="icon-overlay">
                                <i class="fa-regular fa-images icon-borders" onclick="openGalleryModal()"></i>
                            </div>
                        </div>
                        <div class="menu-1-settings">
                            <p>Baked Crab Cheese</p>
                            <hr>
                            <h6 class="">$66</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <div class="custom-image-container">
                            <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/parallax-pic-3.jpg') }}"
                                class="custom-image" alt="Custom Image">
                            <div class="icon-overlay">
                                <i class="fa-regular fa-images icon-borders" onclick="openGalleryModal()"></i>
                            </div>
                        </div>
                        <div class="menu-1-settings">
                            <p>Foie Gras</p>
                            <hr>
                            <h6 class="">$99</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-column justify-content-center align-items-center text-center">
                        <div class="custom-image-container">
                            <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/parallax-pic-4.jpg') }}"
                                class="custom-image" alt="Custom Image">
                            <div class="icon-overlay">
                                <i class="fa-regular fa-images icon-borders" onclick="openGalleryModal()"></i>
                            </div>
                        </div>
                        <div class="menu-1-settings">
                            <p>Roasted Chicken</p>
                            <hr>
                            <h6 class="">$55</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section4">
    <div class="container container-padding-bottom">
        <div class="text-center mt-4">
            <h1 class="text-uppercase">Our Menu</h1>
            <h3 class="italic-font-style">Healthy & Tasty</h3>
            <div class="d-flex justify-content-center align-items-center">
                <div class="orange-line"></div>
            </div>
        </div>
        <ul class="nav nav-pills nav-tab-settings mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active nav-tab-buttons" id="education-tab" data-bs-toggle="pill"
                    data-bs-target="#education-content" type="button" role="tab" aria-controls="education-content"
                    aria-selected="true">maın
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-tab-buttons" id="software-tab" data-bs-toggle="pill"
                    data-bs-target="#software-content" type="button" role="tab" aria-controls="software-content"
                    aria-selected="false">starter
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-tab-buttons" id="robotics-tab" data-bs-toggle="pill"
                    data-bs-target="#robotics-content" type="button" role="tab" aria-controls="robotics-content"
                    aria-selected="false">drinks
                </button>
            </li>

        </ul>
        <div class="tab-content container container-padding" id="pills-tabContent">
            <div class="tab-pane fade show active" id="education-content" role="tabpanel"
                aria-labelledby="education-tab">
                <div class="row">
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-1.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-2.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-3.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-4.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-5.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-6.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>

                </div>


            </div>
            <div class="tab-pane fade" id="software-content" role="tabpanel" aria-labelledby="software-tab">

                <div class="row">
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-2-1.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-2-2.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-2-3.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-2-4.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-2-5.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-2-6.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>

                </div>


            </div>

            <div class="tab-pane fade" id="robotics-content" role="tabpanel" aria-labelledby="robotics-tab">
                <div class="row">
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-3-1.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-3-2.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-3-3.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-3-4.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-3-5.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>
                    <div class="d-flex flex-row menu-items col-sm-12 col-md-6 col-lg-6 ">
                        <a href="">
                            <img class="mini-img"
                                src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/menu-3-6.jpg') }}"
                                alt="logo">
                        </a>
                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <h4><a class="deneme" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do
                                        eiusmod
                                        tempor.</p>
                                </div>
                            </div>
                        </div>
                        <h6>$66</h6>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="section5">
    <div class="container">
        <div class="text-center">
            <div class="normal-content">
                <h2>Başlık</h2>
                <h3 class="italic-font-style">Healthy & Tasty</h3>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="orange-line"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section6">
    <div class="parallax parallax-2">

        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Example multiple select</label>
                <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </form>
    </div>
</section>



<div>
    <!-- Sol Taraf -->
    <div>
        <div>
            <div data-aos="fade-down" data-aos-duration="1000">
                <p>
                    YAZILAN KOD SATIRI
                </p>
            </div>
            <div data-aos="fade-down" data-aos-duration="1000">
                <div id="counter1" class="counting" data-count="1658">0</div>
            </div>
        </div>
        <div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <p>
                    KAÇ KÜTÜPHANE KULLANILDI
                </p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <div id="counter2" class="counting" data-count="16">0</div>
            </div>
        </div>
    </div>
    <!-- Sağ Taraf -->
    <div>
        <div>
            <div data-aos="fade-down" data-aos-duration="1000">
                <p>
                    KAÇ GÜNDE BİTTİ
                </p>
            </div>
            <div data-aos="fade-down" data-aos-duration="1000">
                <div id="counter3" class="counting" data-count="35">0</div>
            </div>
        </div>
        <div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <p>
                    İÇİLEN KAHVE SAYISI
                </p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000">
                <div id="counter4" class="counting" data-count="84">0</div>
            </div>
        </div>
    </div>
</div>

<div style="text-align: center; margin-top: 50px;">
    <!-- Sayının gösterileceği alan -->
    <h3 id="counting" style="font-size: 40px;">₺0</h3>
</div>




@endsection
