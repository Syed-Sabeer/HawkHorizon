<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        return view('service');
    }

    public function webdesigndev(){
        return view('webdesigndev');
    }

    public function googleads(){
        return view('googleads');
    }

    public function seo(){
        return view('seo');
    }
    public function socialmediamarketing(){
        return view('socialmediamarketing');
    }

    public function ecommercewebsite(){
        return view('ecommercewebsite');
    }

    public function contentwriting(){
        return view('contentwriting');
    }

    public function googlemybusiness(){
        return view('googlemybusiness');
    }
    public function graphicsdesigning(){
        return view('graphicsdesigning');
    }
    public function emailmarketing(){
        return view('emailmarketing');
    }
}
