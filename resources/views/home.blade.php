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
                <img class="select-disable" src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/slide-1.jpg') }}" alt="Slide 1">
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="content">
                    <p class="banner-baslik-yazi select-disable">EXQUIESITE ATMOSPHERE</p>
                    <p class="banner-alt-yazi pb-5 pt-2 select-disable">Enjoy the real fresh food from our chef.</p>
                    <a href="#" class="button-1">BOOK NOW</a>
                    <a href="#" class="button-2">VIEW MENU</a>
                </div>
                <img class="select-disable" src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/slide-2.jpg') }}" alt="Slide 2">
            </div>
        </div>
        <!-- Navigation Buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Content After Slider -->
    <div class="d-flex flex-row justify-content-center gap-4 ">
    <div class="custom-flex">
        <div class="custom-group">
            <div class="custom-image-container">
                <img class="custom-image" src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-1.jpg') }}" alt="karakalem"/>

            </div>
            <div class="custom-links">
                <div class="custom-tags">
                    <a class="custom-link" href="">
                        <i class="fa-solid fa-tag mr-3"></i>ETKİNLİK/HABER
                    </a>
                    <a class="custom-link" href="">
                        <i class="fa-regular fa-comment mr-3"></i>YORUMLAR SAYISI
                    </a>
                </div>
            </div>
            <a class="custom-title" href="">
                Aramıza Hoş Gelmişsindir Umarım Buraya Paylaşım Başlığı Eklenecek...
            </a>
            <div class="custom-description">
                <p class="custom-text">
                    Sosyalleşme fırsatı yakalayacağız. Birbirimize çok şey katacağımıza inanıyorum! Yazının bir kısmını kapsayacak...
                </p>
            </div>
            <div class="custom-button">
                <button class="btn-custom">
                    DEVAMINI OKU
                </button>
            </div>
        </div>
    </div>
    <div class="custom-flex">
        <div class="custom-group">
            <div class="custom-image-container">
                <img class="custom-image" src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-1.jpg') }}" alt="karakalem"/>

            </div>
            <div class="custom-links">
                <div class="custom-tags">
                    <a class="custom-link" href="">
                        <i class="fa-solid fa-tag mr-3"></i>ETKİNLİK/HABER
                    </a>
                    <a class="custom-link" href="">
                        <i class="fa-regular fa-comment mr-3"></i>YORUMLAR SAYISI
                    </a>
                </div>
            </div>
            <a class="custom-title" href="">
                Aramıza Hoş Gelmişsindir Umarım Buraya Paylaşım Başlığı Eklenecek...
            </a>
            <div class="custom-description">
                <p class="custom-text">
                    Sosyalleşme fırsatı yakalayacağız. Birbirimize çok şey katacağımıza inanıyorum! Yazının bir kısmını kapsayacak...
                </p>
            </div>
            <div class="custom-button">
                <button class="btn-custom">
                    DEVAMINI OKU
                </button>
            </div>
        </div>
    </div>

    <div class="custom-flex">
        <div class="custom-group">
            <div class="custom-image-container">
                <img class="custom-image" src="{{ \Illuminate\Support\Facades\Vite::asset('/resources/images/pic-1.jpg') }}" alt="karakalem"/>

            </div>
            <div class="custom-links">
                <div class="custom-tags">
                    <a class="custom-link" href="">
                        <i class="fa-solid fa-tag mr-3"></i>ETKİNLİK/HABER
                    </a>
                    <a class="custom-link" href="">
                        <i class="fa-regular fa-comment mr-3"></i>YORUMLAR SAYISI
                    </a>
                </div>
            </div>
            <a class="custom-title" href="">
                Aramıza Hoş Gelmişsindir Umarım Buraya Paylaşım Başlığı Eklenecek...
            </a>
            <div class="custom-description">
                <p class="custom-text">
                    Sosyalleşme fırsatı yakalayacağız. Birbirimize çok şey katacağımıza inanıyorum! Yazının bir kısmını kapsayacak...
                </p>
            </div>
            <div class="custom-button">
                <button class="btn-custom">
                    DEVAMINI OKU
                </button>
            </div>
        </div>
    </div>
    </div>

    {{--    <i class="fa-regular fa-circle-play"></i>--}}
    {{--    <i class="fa-regular fa-image"></i>--}}

    <div class=" text-danger text-center fs-1 fw-bold screen-height"> HOME</div>
@endsection
