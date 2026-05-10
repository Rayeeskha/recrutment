<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Contactus;
use CustomHelper;
use App\Models\InstagramFeed;
use App\Models\Contact;
use App\Models\Blog;

class HomeController extends Controller
{
    public function __invoke(){
        $blogs = Blog::where('status', 1)->latest()->take(6)->get();
    	return view('frontend.index', compact('blogs'));
    }

    public function urlRouting($url){
    	$blog = Blog::where('status', 1)->where(function ($q) use ($url) {
            $q->where('blog_url', $url)->orWhere('blog_arabic_url', $url);
        })->first();
        if(!empty($blog)){
            // 🔹 Detect language from matched slug
            if ($blog->blog_arabic_url === $url) {
                app()->setLocale('ar');
                session()->put('locale', 'ar');
            } else {
                app()->setLocale('en');
                session()->put('locale', 'en');
            }
            return view('frontend.blogs.blog_detail', compact('blog'));
        }else{
            $view = CustomHelper::urlSlugFilter($url);
            return view("frontend.services.$view");
        }
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

    public function blogs(){
        $lang = session()->get('locale');
        $blogsData = Blog::latest()->where('status', 1)->get();
        return view('frontend.blogs.index', compact('blogsData', 'lang'));
    }

}
