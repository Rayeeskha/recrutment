<!-- Start Navbar Area --> 
<style type="text/css">
    .logo_style{width: 80px; height: 50px}
</style>

@php 
    $lang = session()->get('locale') == 'en' ? 'ar' : 'en';

    $logoPath = "assets/images/logo/logo.png";
    if(session()->get('locale') === 'ar'){
        $logoPath = "assets/images/logo/logo_ar.png";
    }

@endphp

<div class="navbar-area">
<div class="mobile-responsive-nav">
    <div class="container" dir="ltr">
        <div class="mobile-responsive-menu">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset($logoPath) }}" class="logo-icon-1 logo_style" alt="logo">
                    <img src="{{ asset($logoPath) }}" class="logo-icon-2 logo_style" alt="logo">
                    
                    <img src="{{ asset($logoPath) }}" class="main-logo logo_style" alt="logo">
                    <img src="{{ asset($logoPath) }}" class="white-logo logo_style" alt="logo">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="desktop-nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="/">
                <img src="{{ asset($logoPath) }}" class="main-logo logo_style" alt="logo">
                <img src="{{ asset($logoPath) }}" class="white-logo logo_style" alt="logo">
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

                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle">
                            @lang('front.Blog')                           
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ url('best-recruitment-agencies-in-india-mumbai-and-newdelhi') }}" class="nav-link">
                                    @lang('front.rec_agency')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('مكتب-استقدام-الهند-مومباي-و-نيو-دلهي') }}" class="nav-link">
                                    @lang('front.ofc_ind_newdlhi')
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a href="{{ url('مكتب-استقدام-الهند-مومباي') }}" class="nav-link">
                                    @lang('front.rec_ofc_ind_mum')
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('مكتب-استقدام-الهند') }}" class="nav-link">
                                    @lang('front.rec_ofc_ind')
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link">@lang('front.cnts_us')</a>
                    </li>
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
                    <div class="option-item">
                        <a href="{{ route('changeLang', $lang) }}" class="btn btn-sm btn-success">{{ $lang }}</a>
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
                    
                </div>

                @if($lang == 'en')
                <div class="option-item" dir="ltr">
                    <a href="{{ route('changeLang', $lang) }}" class="btn btn-sm btn-success">{{ $lang }}</a>&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Navbar Area -->