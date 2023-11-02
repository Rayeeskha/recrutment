<?php 
namespace App\Helpers;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
use App\Models\InstagramFeed;
use Lang;

class CustomHelper{

	static function urlSlugFilter($slug = ''){
		$heading = [
			CustomHelper::seoUrl(Lang::get('front.our_services')) => 'our_services',

			CustomHelper::seoUrl(Lang::get('front.the_bst_rcrt_ofc_ind')) => 'recruitment_office',

			CustomHelper::seoUrl(Lang::get('front.ofc_rcrt_ind_rdh')) => 'office_recruitment',

			CustomHelper::seoUrl(Lang::get('front.inrnal_empl_src')) => 'internal_employement_source',

			CustomHelper::seoUrl(Lang::get('front.extrnl_empl_src')) => 'external_employement_source',

			CustomHelper::seoUrl(Lang::get('front.about_us')) => 'about_us',

			CustomHelper::seoUrl(Lang::get('front.our_clients')) => 'our_clients',

			CustomHelper::seoUrl(Lang::get('front.agency')) => 'agency'
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
        $token = "IGQWRPYk1jQ21iR29yTGJxRmY1TlJwdXBvckVOdWpyQVRMd2hyRlB0d29Gd29MdGlZAbDlZAM1FoNUtxQTBmWDNrMFhLWHN2akdjTlQ4V0JhSW1RRm1CNElGb0VzX293bURKSVdrQ2tLRDlpdWdlMHJXMGVIc01Vd00ZD";
        $limit = 12;
         
        $json_feed_url="https://graph.instagram.com/me/media?fields={$fields}&access_token={$token}&limit={$limit}";
        $json_feed = @file_get_contents($json_feed_url);
        $data =  json_decode($json_feed, true, 512, JSON_BIGINT_AS_STRING);
        return isset($data['data']) ? $data['data'] : '';
	}

	static function getInstagramFeeds(){
		return InstagramFeed::select('media_url','permalink')->latest()->take(9)->get();
	}

}