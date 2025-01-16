<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $aboutUs = AboutUs::query()->firstOrFail();
        $banners = Banner::query()->get();

        return view('home', [
            'aboutUs' => $aboutUs,
            'banners' => $banners
        ]);
    }
    public function deneme(){
        return view('deneme');
    }

}
