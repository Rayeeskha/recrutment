<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CustomHelper;
use App\Models\InstagramFeed;

class HomeController extends Controller
{
    public function __invoke(){
    	return view('frontend.index');
    }

    public function urlRouting($url){
    	$view = CustomHelper::urlSlugFilter($url);
    	return view("frontend.services.$view");
    }
}
