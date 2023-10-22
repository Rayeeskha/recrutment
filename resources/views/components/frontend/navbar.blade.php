<!-- Start Navbar Area --> 
<div class="navbar-area">
<div class="mobile-responsive-nav">
    <div class="container">
        <div class="mobile-responsive-menu">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('assets/images/logo-icon-1.png') }}" class="logo-icon-1" alt="logo">
                    <img src="{{ asset('assets/images/logo-icon-2.png') }}" class="logo-icon-2" alt="logo">
                    
                    <img src="{{ asset('assets/images/logo.png') }}" class="main-logo" alt="logo">
                    <img src="{{ asset('assets/images/white-logo.png') }}" class="white-logo" alt="logo">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="desktop-nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/logo.png') }}" class="main-logo" alt="logo">
                <img src="{{ asset('assets/images/white-logo.png') }}" class="white-logo" alt="logo">
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            {{ GoogleTranslate::trans('Home', session()->get('locale')) }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(GoogleTranslate::trans('about-us', session()->get('locale')))) }}" class="nav-link">
                            {{ GoogleTranslate::trans('About Us', session()->get('locale')) }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(GoogleTranslate::trans('our-services', session()->get('locale')))) }}" class="nav-link dropdown-toggle">
                            {{ GoogleTranslate::trans('Our Services', session()->get('locale')) }}
                        </a>

                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ route('urlRouting', CustomHelper::seoUrl(GoogleTranslate::trans('the-best recruitment-office-in-india', session()->get('locale')))) }}" class="nav-link">
                                    {{ GoogleTranslate::trans('The best recruitment office India', session()->get('locale')) }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('urlRouting', CustomHelper::seoUrl(GoogleTranslate::trans('office-recruitment india-riyadh', session()->get('locale')))) }}" class="nav-link">
                                    {{ GoogleTranslate::trans('Office recruitment India Riyadh', session()->get('locale')) }}
                                </a>
                            </li>                
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(GoogleTranslate::trans('agency', session()->get('locale')))) }}" class="nav-link">
                            {{ GoogleTranslate::trans('agency', session()->get('locale')) }}
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link dropdown-toggle">
                            {{ GoogleTranslate::trans('Employment Source', session()->get('locale')) }}            
                        </a>

                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="{{ route('urlRouting', CustomHelper::seoUrl(GoogleTranslate::trans('internal-source', session()->get('locale')))) }}" class="nav-link">
                                    {{ GoogleTranslate::trans('Internal Employment Source', session()->get('locale')) }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('urlRouting', CustomHelper::seoUrl(GoogleTranslate::trans('external-source', session()->get('locale')))) }}" class="nav-link">
                                    {{ GoogleTranslate::trans('External Employment Source', session()->get('locale')) }}
                                </a>
                            </li>                 
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('urlRouting', CustomHelper::seoUrl(GoogleTranslate::trans('our-clients', session()->get('locale')))) }}" class="nav-link">
                            {{ GoogleTranslate::trans('Our Clients', session()->get('locale')) }}
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
                                <p>{{ GoogleTranslate::trans('Call Us Now', session()->get('locale')) }}
                                </p>
                                <a href="tel:8299352134">+91 8299352134</a>
                            </div>
                        </div>
                    </div>
                    <div class="option-item">
                        <a href="#!" class="default-btn btn ">
                            {{ GoogleTranslate::trans('Contact us', session()->get('locale')) }}
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                    <div class="option-item">
                        <div class="switch-box">
                            <label id="switch" class="switch">
                                <input type="checkbox" onchange="toggleTheme()" id="slider">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="option-item">
                        @php $lang = session()->get('locale') == 'en' ? 'ar' : 'en'; @endphp
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
                    <div class="option-item">
                        <a href="javascript:void(0)" class="default-btn btn ">
                            {{ GoogleTranslate::trans('Contact us', session()->get('locale')) }}
                        </a>
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
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Navbar Area -->