@extends('layouts.layout')

@section('content')
<section id="home">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            @foreach($banners as $banner )
            <div class="swiper-slide">
                <div class="content">
                    <p class="banner-title select-disable fw-lighter">{{ $banner->title }}</p>
                    <p class="banner-subtitle select-disable">{{ $banner->sub_title }}</p>
                    <a href="#" class="button-1">{{ $banner->button_1 }}</a>
                    <a href="#" class="button-2">{{ $banner->button_2 }}</a>
                </div>
                <img class="select-disable"
                    src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/slide-1.jpg') }}"
                    alt="Slide 1">
            </div>
            @endforeach
            <!-- Slide 2 -->
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
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-3.jpg') }}"
                        class="custom-image" alt="Custom Image">
                    <div class="icon-overlay">
                        <i class="fa-solid fa-play icon-borders  image-link" onclick="openVideoModal()"></i>
                        <!-- Font Awesome Video İkonu -->
                    </div>
                </div>
                <div>
                    <div class="custom-links">
                        <div class="custom-tags">
                            <p class="text-white fs-6">
                                Healthy & Tasty
                            </p>
                        </div>
                    </div>
                    <p class="custom-title">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
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
        <div class="custom-flex">
            <div class="custom-group">
                <div class="popup-gallery my-5">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
                            <a href="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-3.jpg') }}" class="project-gallery">
                                <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-3.jpg') }}">
                            </a>
                        </div>
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
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

                <div class="popup-gallery my-5">
                    <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
                                <a href='{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-3.jpg') }}' class="project-gallery">
                                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-3.jpg') }}">
                                </a>
                            </div>
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
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

<section id="section2">
    <div class="chef-area">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="chef-picture image-link">
                    <img src="{{$aboutUs->getFirstMediaUrl('logo') }}"
                        alt="Gallery Image 1">
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="chef-description">
                    <div class="chef-area-title">{{ $aboutUs->title }}</div>
                    <div class="chef-area-subtitle">{{ $aboutUs->sub_title }}</div>
                    <div class="orange-line"></div>
                    <p>{{ $aboutUs->description }}
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
                        <div class="custom-image-container image-link">
                            <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/parallax-pic-1.jpg') }}"
                                class="custom-image  " alt="Custom Image">
                            <div class="icon-overlay">
                                <i class="fa-regular fa-images icon-borders" ></i>
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
                                class="custom-image image-link" alt="Custom Image">
                            <div class="icon-overlay">
                                <i class="fa-regular fa-images icon-borders" ></i>
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
                                class="custom-image image-link" alt="Custom Image">
                            <div class="icon-overlay">
                                <i class="fa-regular fa-images icon-borders" ></i>
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
                                <i class="fa-regular fa-images icon-borders" ></i>
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
        <div class="tab-content container container-padding our-menu-settings" id="pills-tabContent">
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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
                                <h4><a class="" href="">Chicken Crispy Roll </a></h4>
                                <div>
                                    <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed
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

    </div>
</section>
<section id="section6">
    <div class="parallax parallax-2">

        <form class="container reservation-form d-flex flex-column justify-content-center ">
            <div class="text-center">
                <div class="reservation-title-area">
                    <h2 class="text-uppercase">Book a Table</h2>
                    <h3 class="italic-font-style">Reservation</h3>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="orange-line"></div>
                    </div>
                </div>
            </div>
            <div class="form-settings">
                <div class="form-group d-flex flex-row justify-content-center inputs-gap-padding">
                    <div>
                        <label for="exampleFormControlInput1">Tarih</label>
                        <input type="date" id="datepicker" class=" inputs-settings" placeholder="07/06/2003">
                    </div>
                    <div><label for="exampleFormControlInput2">Saat</label>
                        <input type="time" class=" inputs-settings"></div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kişi Sayısı</label>
                        <select class=" inputs-settings" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="">
                    <div class="form-group mb-4">
                        <label for="inputFullName">İsim Soyisim</label>
                        <input type="text" class="form-control" id="inputFullName">
                    </div>
                    <div class="form-group mb-4">
                        <label for="inputEmail">E-Mail</label>
                        <input type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="form-group mb-4">
                        <label for="inputPhoneNumber">Telefon Numarası</label>
                        <input type="tel" class="form-control" id="inputPhoneNumber">
                    </div>
                    <div class="text-center mt-4 ">
                        <a href="#" class="button-2">Rezervasyon Oluştur</a></div>
                </div>
            </div>
        </form>
    </div>
</section>


<section>
    <div class="container events-slider">
        <div class="text-center mt-4">
            <h1 class="text-uppercase">Our Menu</h1>
            <h3 class="italic-font-style">Healthy & Tasty</h3>
            <div class="d-flex justify-content-center align-items-center">
                <div class="orange-line"></div>
            </div>
        </div>
    </div>
    <div class="swiper mySwiper1 container events-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="d-flex flex-column">
                    <div class="custom-image-container">
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-3.jpg') }}"
                            class="custom-image" alt="Custom Image">
                        <div class="icon-overlay">
                            <i class="fa-solid fa-chain icon-borders" onclick="openVideoModal()"></i>
                        </div>
                    </div>
                    <a href="" class="text-start select-disable">Barbeque Party</a>
                    <div class="d-flex flex-row gap-4 select-disable">
                        <div class="d-flex flex-row"> <i class="fa-solid fa-calendar-days events-icons-settings"></i>
                            <p class="icons-description">15 June 2017</p>
                        </div>
                        <div class="d-flex flex-row"> <i class="fa-solid fa-clock events-icons-settings"></i>
                            <p class="icons-description">12:00-12:30</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="d-flex flex-column">
                    <div class="custom-image-container">
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-1.jpg') }}"
                            class="custom-image" alt="Custom Image">
                        <div class="icon-overlay">
                            <i class="fa-solid fa-chain icon-borders" onclick="openVideoModal()"></i>
                        </div>
                    </div>
                    <a href="" class="text-start select-disable">Barbeque Party</a>
                    <div class="d-flex flex-row gap-4 select-disable">
                        <div class="d-flex flex-row"> <i class="fa-solid fa-calendar-days events-icons-settings"></i>
                            <p class="icons-description">15 June 2017</p>
                        </div>
                        <div class="d-flex flex-row"> <i class="fa-solid fa-clock events-icons-settings"></i>
                            <p class="icons-description">12:00-12:30</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column">
                    <div class="custom-image-container">
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/2-7.jpg') }}"
                            class="custom-image" alt="Custom Image">
                        <div class="icon-overlay">
                            <i class="fa-solid fa-chain icon-borders" onclick="openVideoModal()"></i>
                        </div>
                    </div>
                    <a href="" class="text-start select-disable">Barbeque Party</a>
                    <div class="d-flex flex-row gap-4 select-disable">
                        <div class="d-flex flex-row"> <i class="fa-solid fa-calendar-days events-icons-settings"></i>
                            <p class="icons-description">15 June 2017</p>
                        </div>
                        <div class="d-flex flex-row"> <i class="fa-solid fa-clock events-icons-settings"></i>
                            <p class="icons-description">12:00-12:30</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column">
                    <div class="custom-image-container">
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/1-8.jpg') }}"
                            class="custom-image" alt="Custom Image">
                        <div class="icon-overlay">
                            <i class="fa-solid fa-chain icon-borders" onclick="openVideoModal()"></i>
                        </div>
                    </div>
                    <a href="" class="text-start select-disable">Barbeque Party</a>
                    <div class="d-flex flex-row gap-4 select-disable">
                        <div class="d-flex flex-row"> <i class="fa-solid fa-calendar-days events-icons-settings"></i>
                            <p class="icons-description">15 June 2017</p>
                        </div>
                        <div class="d-flex flex-row"> <i class="fa-solid fa-clock events-icons-settings"></i>
                            <p class="icons-description">12:00-12:30</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column">
                    <div class="custom-image-container">
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/2-7.jpg') }}"
                            class="custom-image" alt="Custom Image">
                        <div class="icon-overlay">
                            <i class="fa-solid fa-chain icon-borders" onclick="openVideoModal()"></i>
                        </div>
                    </div>
                    <a href="" class="text-start select-disable">Barbeque Party</a>
                    <div class="d-flex flex-row gap-4 select-disable">
                        <div class="d-flex flex-row"> <i class="fa-solid fa-calendar-days events-icons-settings"></i>
                            <p class="icons-description">15 June 2017</p>
                        </div>
                        <div class="d-flex flex-row"> <i class="fa-solid fa-clock events-icons-settings"></i>
                            <p class="icons-description">12:00-12:30</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="d-flex flex-column">
                    <div class="custom-image-container">
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/1-8.jpg') }}"
                            class="custom-image" alt="Custom Image">
                        <div class="icon-overlay">
                            <i class="fa-solid fa-chain icon-borders" onclick="openVideoModal()"></i>
                        </div>
                    </div>
                    <a href="" class="text-start select-disable">Barbeque Party</a>
                    <div class="d-flex flex-row gap-4 select-disable">
                        <div class="d-flex flex-row"> <i class="fa-solid fa-calendar-days events-icons-settings"></i>
                            <p class="icons-description">15 June 2017</p>
                        </div>
                        <div class="d-flex flex-row"> <i class="fa-solid fa-clock events-icons-settings"></i>
                            <p class="icons-description">12:00-12:30</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>





<div class="counter-settings d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="counter-contents">
            <div class="row text-center">
                <div class="col-md-3 ">
                    <div class="card">
                        <div id="counter1" class="counter" data-count="1658">0</div>
                        <p>YAZILAN KOD SATIRI</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div id="counter2" class="counter" data-count="16">0</div>
                        <p>KAÇ KÜTÜPHANE KULLANILDI</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div id="counter3" class="counter" data-count="35">0</div>
                        <p>KAÇ GÜNDE BİTTİ</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div id="counter4" class="counter" data-count="84">0</div>
                        <p>İÇİLEN KAHVE SAYISI</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
