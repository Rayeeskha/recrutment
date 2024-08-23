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

    public function recruitmentAgencyMumbaiAndDelhi(){
        return view('frontend.services.rec_agncy_mumbai_new_delhi');
    }

    public function recruitmentAgencyMumbaiAndDelhiArbic(){
        return view('frontend.services.rec_agncy_mumbai_new_delhi_arbic');
    }

    public function maktabIstakbal(){
        return view('frontend.services.maktab_istakbal');
    }
    
    public function maktabIstakbalAlhind(){
        return view('frontend.services.maktab_istakbal_alhind');
    }

}
