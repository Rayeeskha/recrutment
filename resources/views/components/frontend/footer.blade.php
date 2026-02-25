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

<a href="https://api.whatsapp.com/send/?phone={{ CustomHelper::whatsAppNumber() }}&text={{ __('front.enquiry') }}" 
   target="_blank" 
   class="whatsapp-float" 
   aria-label="Chat with us on WhatsApp">
    <img src="{{ asset('assets/images/whatsapp.png') }}" alt="WhatsApp" />
</a>
