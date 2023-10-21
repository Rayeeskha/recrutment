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

	public static function getInstagramFeed(){
        $fields = "id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username";
        $token = "IGQVJXTXBEZAm92NTJ5VEJQNFNkMGxYOWgzcHNqTXFJMVpMaTRsMG95cU14N3UwcEhaYmhDMmtuUTVtcE5yb0lwdmREUHJVMUtEN3lIdHFaTmhkXzdwZAzZAOOUZAWeDg3ZAGwxWk04T3AyQS0xN1RpSXp3ZAgZDZD";
        $limit = 100;
         
        $json_feed_url="https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}";
        $json_feed = @file_get_contents($json_feed_url);
        return json_decode($json_feed, true, 512, JSON_BIGINT_AS_STRING);
    }

}