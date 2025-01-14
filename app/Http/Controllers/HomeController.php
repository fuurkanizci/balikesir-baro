<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $aboutUs = AboutUs::query()->firstOrFail();
        return view('home', [
            'aboutUs' => $aboutUs,
        ]);
    }
    public function deneme(){
        return view('deneme');
    }

}
