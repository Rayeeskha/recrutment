<!-- Start Navbar Area --> 
<style type="text/css">
    .logo_style{width: 50px; height: 50px}
</style>

@php $lang = session()->get('locale') == 'en' ? 'ar' : 'en'; @endphp

<div class="navbar-area">
<div class="mobile-responsive-nav">
    <div class="container" dir="ltr">
        <div class="mobile-responsive-menu">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('assets/images/logo/msgroup_logo4.png') }}" class="logo-icon-1 logo_style" alt="logo">
                    <img src="{{ asset('assets/images/logo/msgroup_logo4.png') }}" class="logo-icon-2 logo_style" alt="logo">
                    
                    <img src="{{ asset('assets/images/logo/msgroup_logo4.png') }}" class="main-logo logo_style" alt="logo">
                    <img src="{{ asset('assets/images/logo/msgroup_logo4.png') }}" class="white-logo logo_style" alt="logo">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="desktop-nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/logo/msgroup_logo4.png') }}" class="main-logo logo_style" alt="logo">
                <img src="{{ asset('assets/images/logo/msgroup_logo4.png') }}" class="white-logo logo_style" alt="logo">
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            @lang('front.home')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.about_us'))) }}" class="nav-link">
                            @lang('front.about_us')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.our_services'))) }}" class="nav-link dropdown-toggle">
                            @lang('front.our_services')
                        </a>

                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.the_bst_rcrt_ofc_ind'))) }}" class="nav-link">
                                    @lang('front.the_bst_rcrt_ofc_ind')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.ofc_rcrt_ind_rdh'))) }}" class="nav-link">
                                    @lang('front.ofc_rcrt_ind_rdh')
                                </a>
                            </li>                
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.agency'))) }}" class="nav-link">
                            @lang('front.agency')
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle">
                            @lang('front.empl_src')
                        </a>

                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.intrl_empl_src'))) }}" class="nav-link">
                                    @lang('front.intrl_empl_src')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.extrnl_empl_src'))) }}" class="nav-link">
                                    @lang('front.extrnl_empl_src')
                                </a>
                            </li>                 
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.our_clients'))) }}" class="nav-link">
                            @lang('front.our_clients')
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="contact-us.html" class="nav-link">Contact Us</a>
                    </li> -->
                </ul>

                <div class="others-options style2 ms-auto">
                    <div class="option-item">
                        <div class="header-contact-box">
                            <a href="tel:8299352134"><div class="icon">
                                <i class="flaticon-phone-call-1"></i>
                            </div></a>
                            <div class="content">
                                <p>
                                    @lang('front.call_us_now')
                                </p>
                                <a href="tel:8299352134">+91 8299352134</a>
                            </div>
                        </div>
                    </div>
                    &nbsp;&nbsp;&nbsp;
                    <div class="option-item">
                        <div class="switch-box">
                            <label id="switch" class="switch">
                                <input type="checkbox" onchange="toggleTheme()" id="slider">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="option-item">
                        <a href="{{ route('changeLang', $lang) }}">{{ $lang }}</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="others-option-for-responsive">
    <div class="container">
        <div class="dot-menu">
            <div class="inner">

                @if($lang == 'ar')
                <div class="option-item">
                    <a href="{{ route('changeLang', $lang) }}">{{ $lang }}</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                @endif

                <div class="others-options style2 ms-auto">
                    <div class="option-item">
                        <div class="header-contact-box">
                            <a href="tel:8299352134">
                                <div class="icon">
                                    <i class="flaticon-phone-call-1"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="option-item style2">
                        <div class="switch-box">
                            <label id="switch2" class="switch">
                                <input type="checkbox" onchange="toggleTheme()" id="slider2">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                </div>

                @if($lang == 'en')
                <div class="option-item" dir="ltr">
                    <a href="{{ route('changeLang', $lang) }}">{{ $lang }}</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Navbar Area -->