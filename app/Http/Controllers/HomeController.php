<?php

namespace App\Http\Controllers;
use App\Models\Banners;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $aboutUs = AboutUs::query()->firstOrFail();
        return view('home', [
            'aboutUs' => $aboutUs,
        ]);
        $banners = Banners::query()->first();
        return view('home', [
            'banners' => $banners,
        ]);
    }
    public function deneme(){
        return view('deneme');
    }

}
