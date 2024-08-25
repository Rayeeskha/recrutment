<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Contactus;
use CustomHelper;
use App\Models\InstagramFeed;
use App\Models\Contact;

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

    public function contactUsPage(){
        return view('frontend.services.contact_us');
    }

    public function contactUS(Contactus $request){
        $request->validated();
    	try {
            Contact::create($request->all());
            return response()->json(['success' => true,'message' => 'Sent successfully !','url'=>''],200);
    	}catch (Throwable $e)  {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

}
