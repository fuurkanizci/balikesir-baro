@extends('layouts.layout')
@section('content')
<div class="swiper mySwiper ">
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
<div class="featured-contents ">
    <div class="custom-flex">
        <div class="custom-group">
            <div class="custom-image-container">
                <img class="custom-image"
                    src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-1.jpg') }}"
                    alt="karakalem" />

            </div>
            <div class="custom-links">
                <div class="custom-tags">
                    <p class="text-white fs-6">
                        Healthy & Tasty
                    </p>

                </div>
            </div>
            <p class="custom-title">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
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
                <img class="custom-image"
                    src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-2.jpg') }}"
                    alt="karakalem" />

            </div>
            <div class="custom-links">
                <div class="custom-tags">
                    <p class="text-white fs-6">
                        Today's Special
                    </p>

                </div>
            </div>
            <p class="custom-title">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
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
                <img class="custom-image"
                    src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-3.jpg') }}"
                    alt="karakalem" />

            </div>
            <div class="custom-links">
                <div class="custom-tags">
                    <p class="text-white fs-6">
                        Romantic Dinner
                    </p>

                </div>
            </div>
            <p class="custom-title">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
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

{{-- <i class="fa-regular fa-circle-play"></i> --}}
{{-- <i class="fa-regular fa-image"></i> --}}

<div class=" text-danger text-center fs-1 fw-bold screen-height"> HOME</div>
@endsection
