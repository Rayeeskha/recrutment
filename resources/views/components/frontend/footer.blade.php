<!--Start Footer Area-->
<div class="start-footer-area pt-100 pb-70" >
<div class="container">
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget footer-logo-area">
            <a href="/"><img src="{{ asset('assets/images/logo/msgroup_logo_1.png') }}" alt="Logo" width="120" height="70"></a>
            <p>@lang('front.company')</p>
            <div class="social-content">
                <ul>
                    
                    <li>
                        <a href="#!" target="_blank"><i class="ri-facebook-line"></i></a>
                    </li>
                    <li>
                        <a href="#!" target="_blank"><i class="ri-twitter-line"></i></a>
                    </li>
                    <li>
                        <a href="#!" target="_blank"><i class="ri-instagram-line"></i></a>
                    </li>
                    <li>
                        <a href="#!" target="_blank"><i class="ri-linkedin-line"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget footer-address-area">
            <h3>
                @lang('front.address')
            </h3>
            <ul>
                <li>
                    <div class="icon">
                        <i class="flaticon-phone-call-1"></i>
                    </div>
                    <p>
                        @lang('front.call_us_now')
                    </p>
                    <a href="tel:+0408886666">+040 888 6666</a>
                </li>
                <li>
                    <div class="icon">
                        <i class="flaticon-mail"></i>
                    </div>
                    <p>
                        @lang('front.eml_add')
                    </p>
                    <a href="mailto:info@msgroupoftravels.com"><span class="__cf_email__" data-cfemail="553d3039393a151c273c26307b363a38">info@msgroupoftravels.com</span></a>
                </li>
                <li>
                    <div class="icon">
                        <i class="flaticon-place"></i>
                    </div>
                    <p>
                        @lang('front.address')
                    </p>
                    <span>
                        @lang('front.shop_address')
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget footer-useful-links-area">
            <h3>
                @lang('front.useful_links')
            </h3>
            <div class="link-list">
                <ul>
                    <li>
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.about_us')))}}">    @lang('front.about_us')
                        </a>
                    </li>
                    <li>
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.inrnal_empl_src'))) }}">
                            @lang('front.inrnal_empl_src')
                        </a>
                    </li>
                    <li>
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.extrnal_src')
                        ))}}">
                            @lang('front.extrnal_src')
                        </a>
                    </li>
                    <li>
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="#!">
                            @lang('front.cnts_us')
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget footer-instagram-area">
            <h3>
                @lang('front.insta')
            </h3>
            <div class="row">
                @php $instagram = CustomHelper::getInstagramFeeds(); @endphp
                @if(isset($instagram[0]))
                    @foreach($instagram ?? '' as $insta)
                    <div class="col-4">
                        <div class="instagram-img">
                            <img src="{{ $insta->media_url }}" alt="Image" width="100" height="50">
                            <div class="icon">
                                <a href="{{ $insta->permalink }}" target="_blank"><i class="flaticon-instagram-1"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!--End Footer Area-->

 <!--Start Copy Right Area-->
<div class="copy-right-area">
    <div class="container">
        <p>© <span>
            @lang('front.company')
              |</span> @lang('front.all_rsvd_wbs_dvlp')<a href="https://khanrayees.com/" target="_blank">
                @lang('front.khan_rayees')</a></p>
    </div>
</div>
<!--End Copy Right Area-->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-rocket-line"></i>
    <i class="ri-rocket-line"></i>
</div>
<!-- End Go Top Area -->