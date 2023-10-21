<!--Start Footer Area-->
<div class="start-footer-area pt-100 pb-70">
<div class="container">
<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget footer-logo-area">
            <a href="/"><img src="assets/images/white-logo.png" alt="Logo"></a>
            <p>It is a long established fact that wo will
            be distracted by the readable content as
            when looking at its layout.</p>
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
                {{ GoogleTranslate::trans('Address Information', session()->get('locale')) }}
            </h3>
            <ul>
                <li>
                    <div class="icon">
                        <i class="flaticon-phone-call-1"></i>
                    </div>
                    <p>
                        {{ GoogleTranslate::trans('Call Us Now', session()->get('locale')) }}
                    </p>
                    <a href="tel:+0408886666">+040 888 6666</a>
                </li>
                <li>
                    <div class="icon">
                        <i class="flaticon-mail"></i>
                    </div>
                    <p>
                        {{ GoogleTranslate::trans('Email Address', session()->get('locale')) }}
                    </p>
                    <a href="#!"><span class="__cf_email__" data-cfemail="553d3039393a151c273c26307b363a38">[email&#160;protected]</span></a>
                </li>
                <li>
                    <div class="icon">
                        <i class="flaticon-place"></i>
                    </div>
                    <p>
                        {{ GoogleTranslate::trans('Address', session()->get('locale')) }}
                    </p>
                    <span>Shop No.7, Ground Floor,Patel Apartment, C wing 233/234 Bellasis Road, Nagpada, Mumbai - 400008</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget footer-useful-links-area">
            <h3>
                {{ GoogleTranslate::trans('Useful Links', session()->get('locale')) }}
            </h3>
            <div class="link-list">
                <ul>
                    <li>
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(GoogleTranslate::trans('about-us', session()->get('locale')))) }}"> 

                            {{ GoogleTranslate::trans('About Us', session()->get('locale')) }}
                        </a>
                    </li>
                    <li>
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(GoogleTranslate::trans('internal-source', session()->get('locale')))) }}">
                            {{ GoogleTranslate::trans('Internal Employment Source', session()->get('locale')) }}
                        </a>
                    </li>
                    <li>
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(GoogleTranslate::trans('external-source', session()->get('locale')))) }}">
                            {{ GoogleTranslate::trans('External Employment Source', session()->get('locale')) }}
                        </a>
                    </li>
                    <li>
                        <i class="ri-arrow-right-s-line"></i>
                        <a href="#!">
                            {{ GoogleTranslate::trans('Contact us', session()->get('locale')) }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget footer-instagram-area">
            <h3>
                {{ GoogleTranslate::trans('Instagram', session()->get('locale')) }}
            </h3>
            <div class="row">
                <div class="col-4">
                    <div class="instagram-img">
                        <img src="assets/images/instagram/instagram-img-1.jpg" alt="Image">
                        <div class="icon">
                            <a href="#!" target="_blank"><i class="flaticon-instagram-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="instagram-img">
                        <img src="assets/images/instagram/instagram-img-2.jpg" alt="Image">
                        <div class="icon">
                            <a href="#!" target="_blank"><i class="flaticon-instagram-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="instagram-img">
                        <img src="assets/images/instagram/instagram-img-3.jpg" alt="Image">
                        <div class="icon">
                            <a href="#!" target="_blank"><i class="flaticon-instagram-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="instagram-img">
                        <img src="assets/images/instagram/instagram-img-4.jpg" alt="Image">
                        <div class="icon">
                            <a href="#!" target="_blank"><i class="flaticon-instagram-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="instagram-img">
                        <img src="assets/images/instagram/instagram-img-5.jpg" alt="Image">
                        <div class="icon">
                            <a href="#!" target="_blank"><i class="flaticon-instagram-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="instagram-img">
                        <img src="assets/images/instagram/instagram-img-6.jpg" alt="Image">
                        <div class="icon">
                            <a href="#!" target="_blank"><i class="flaticon-instagram-1"></i></a>
                        </div>
                    </div>
                </div>
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
        <p>© <span> {{ GoogleTranslate::trans('MS International', session()->get('locale')) }}  |</span>   {{ GoogleTranslate::trans('All Rights Reserved | Website Developed by', session()->get('locale')) }}<a href="javascript:void(0)" target="_blank"> {{ GoogleTranslate::trans('Rayees khan', session()->get('locale')) }}</a></p>
    </div>
</div>
<!--End Copy Right Area-->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class="ri-rocket-line"></i>
    <i class="ri-rocket-line"></i>
</div>
<!-- End Go Top Area -->