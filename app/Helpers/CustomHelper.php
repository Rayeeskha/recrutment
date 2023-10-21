<?php 
namespace App\Helpers;
use Illuminate\Support\Facades\Hash;
use GoogleTranslate;
use DB;
use Auth;

class CustomHelper{

	static function urlSlugFilter($slug = ''){
		$heading = [
			CustomHelper::seoUrl(GoogleTranslate::trans('our-services', session()->get('locale'))) => 'our_services',

			CustomHelper::seoUrl(GoogleTranslate::trans('the-best recruitment-office-in-india', session()->get('locale'))) => 'recruitment_office',

			CustomHelper::seoUrl(GoogleTranslate::trans('office-recruitment india-riyadh', session()->get('locale'))) => 'office_recruitment',

			CustomHelper::seoUrl(GoogleTranslate::trans('internal-source', session()->get('locale'))) => 'internal_employement_source',

			CustomHelper::seoUrl(GoogleTranslate::trans('external-source', session()->get('locale'))) => 'external_employement_source',

			CustomHelper::seoUrl(GoogleTranslate::trans('about-us', session()->get('locale'))) => 'about_us',

			CustomHelper::seoUrl(GoogleTranslate::trans('our-clients', session()->get('locale'))) => 'our_clients',
			CustomHelper::seoUrl(GoogleTranslate::trans('agency', session()->get('locale'))) => 'agency'
		];

		$slug = trim($slug);
        if(array_key_exists($slug, $heading)){
            return $heading[$slug];
        }
        return $slug;
	}

	static function seoUrl($string) {
	    $string = mb_strtolower($string);
        $string = str_replace('&',' ',$string);
        $string = preg_replace("/[^\w\s-]+/u", " ", $string);
        $string = preg_replace("/[\s-]+/u", " ", $string);
        $string = preg_replace("/[\s_]+/u", "-", $string);
        return $string;
	}

}