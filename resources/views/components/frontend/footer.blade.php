<!-- ===== Premium Footer Start ===== -->
 @php 
    $logoPath = "assets/images/logo/logo.png";
    if(session()->get('locale') === 'ar'){
        $logoPath = "assets/images/logo/logo_ar.png";
    }

@endphp

<footer class="premium-footer" itemscope itemtype="https://schema.org/Organization">

    <div class="container">
        <div class="row align-items-start">

            <!-- Company Info -->
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="footer-box">

                    <a href="/" class="footer-logo">
                        <img src="{{ asset($logoPath) }}"
                             alt="MS Group Logo"
                             width="140"
                             loading="lazy"
                             itemprop="logo">
                    </a>

                    <p class="footer-text" itemprop="description">
                        @lang('front.ms_trust')
                    </p>

                    <div class="footer-social">
                        <a href="#" target="_blank"><i class="ri-linkedin-line"></i></a>
                        <a href="https://instagram.com/indian_recruitment1" target="_blank"><i class="ri-instagram-line"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61552197280266" target="_blank"><i class="ri-facebook-line"></i></a>
                    </div>

                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="footer-box">
                    <h4>@lang('front.useful_links')</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.about_us'))) }}">
                            @lang('front.about_us')</a></li>

                        <li><a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.inrnal_empl_src'))) }}">
                            @lang('front.inrnal_empl_src')</a></li>

                        <li><a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.extrnal_src'))) }}">
                            @lang('front.extrnal_src')</a></li>

                        <li><a href="{{ url('contact-us') }}">
                            @lang('front.cnts_us')</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="footer-box">
                    <h4>@lang('front.address')</h4>

                    <div class="footer-contact">
                        <p><strong>@lang('front.call_us_now'):</strong>
                            <a href="tel:8299352134" itemprop="telephone">8299352134</a></p>

                        <p><strong>@lang('front.eml_add'):</strong>
                            <a href="mailto:info@msgroupoftravels.com" itemprop="email">
                                info@msgroupoftravels.com
                            </a></p>

                        <p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                            <strong>@lang('front.address'):</strong><br>
                            <span itemprop="streetAddress" class="streetAddress">
                                @lang('front.shop_address')
                            </span>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
        <div class="container text-center">
            <p>
                © {{ date('Y') }} @lang('front.company') |
                @lang('front.all_rsvd_wbs_dvlp')
                <a href="https://khanrayees.com/" target="_blank">
                    @lang('front.khan_rayees')
                </a>
            </p>
        </div>
    </div>

</footer>
<!-- ===== Premium Footer End ===== -->

<style>
    .streetAddress {
        color:white
    }
    .premium-footer {
    background: linear-gradient(135deg, #0f172a, #1e293b);
    color: #d1d5db;
    padding-top: 90px;
}

.footer-box {
    padding-right: 20px;
}

.footer-logo img {
    margin-bottom: 20px;
}

.footer-text {
    font-size: 15px;
    line-height: 1.8;
    margin-bottom: 25px;
    color: #cbd5e1;
}

.footer-box h4 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 25px;
    color: #ffffff;
    position: relative;
}

.footer-box h4::after {
    content: "";
    width: 40px;
    height: 3px;
    background: #22c55e;
    display: block;
    margin-top: 8px;
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: 12px;
}

.footer-links a {
    color: #cbd5e1;
    text-decoration: none;
    transition: 0.3s;
}

.footer-links a:hover {
    color: #22c55e;
}

.footer-contact p {
    margin-bottom: 15px;
    font-size: 15px;
}

.footer-contact a {
    color: #cbd5e1;
    text-decoration: none;
}

.footer-contact a:hover {
    color: #22c55e;
}

.footer-social a {
    display: inline-block;
    margin-right: 12px;
    font-size: 18px;
    color: #cbd5e1;
    transition: 0.3s;
}

.footer-social a:hover {
    color: #22c55e;
}

.footer-bottom {
    background: #0b1220;
    padding: 20px 0;
    margin-top: 40px;
    font-size: 14px;
    color: #94a3b8;
}

.footer-bottom a {
    color: #22c55e;
    text-decoration: none;
}
</style>