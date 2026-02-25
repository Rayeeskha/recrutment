@extends('frontend.layouts.app')
@section('page_title', __('front.about_us') . ' | MS Group Recruitment Company')
@section('meta_keywords', 'Indian recruitment company, manpower supply to Gulf, HR solutions India to Middle East')
@section('meta_description', 'MS Group is a trusted Indian recruitment and manpower supply company connecting skilled professionals to Gulf countries with transparent and reliable processes.')

@section('container')

@php 
    $aboutPath = "assets/images/img/about.png";
	$aboutBanner = "assets/images/img/about_banner.png";
    if(session()->get('locale') === 'ar'){
        $aboutPath = "assets/images/img/about_ar.png";
    }

@endphp

<!-- ===== Page Header ===== -->
<!-- ===== Premium About Hero Section ===== -->
<section class="about-hero-section position-relative text-white">
    <div class="hero-overlay"></div>

    <div class="container position-relative z-2">
        <div class="row align-items-center min-vh-50">

            <div class="col-lg-7">
                <h1 class="hero-title">
                    @lang('front.about_us')
                </h1>

                <p class="hero-subtitle">
                    Trusted Indian Recruitment & Manpower Supply Company Connecting Skilled Professionals to Gulf Countries
                </p>

                <nav aria-label="breadcrumb">
    <ol class="breadcrumb hero-breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('/') }}">@lang('front.home')</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            @lang('front.about_us')
        </li>
    </ol>
</nav>
            </div>

            <div class="col-lg-5 text-center">
                <img src="{{ asset($aboutBanner) }}"
                     alt="MS Group Recruitment Company India to Gulf"
                     class="img-fluid hero-image"
                     loading="lazy">
            </div>

        </div>
    </div>
</section>

<!-- ===== Company Introduction ===== -->
<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 text-center">
                <img src="{{ asset($aboutPath) }}"
                     alt="MS Group Logo"
                     class="img-fluid about-logo"
                     loading="lazy">
            </div>

            <div class="col-lg-6">
                <h2 class="section-heading">@lang('front.about_us')</h2>
                <p class="section-text">
                    @lang('about.about_title1')
                    @lang('about.about_title2')
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ===== Our Vision Component ===== -->
<x-frontend.ourvision />

<!-- ===== Our Goals ===== -->
<section class="goals-section py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <h2 class="section-heading">@lang('about.our_goals')</h2>

                <p class="section-text">
                    @lang('about.about_title3')
                    @lang('about.about_title4')
                </p>

                <p class="section-text">
                    @lang('about.about_title5')
                    @lang('about.about_title6')
                </p>

                <p class="section-text">
                    @lang('about.about_title7')
                </p>
            </div>

            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/images/persional/web/goals.jpg') }}"
                     alt="Company Goals and Recruitment Strategy"
                     class="img-fluid rounded shadow"
                     loading="lazy">
            </div>

        </div>
    </div>
</section>

<!-- ===== Why Choose Us ===== -->
<section class="why-choose-section py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-heading">@lang('about.why_choose')</h2>
        </div>

        <div class="why-content">
            <p class="section-text">
                @lang('about.why_choose_title')
                @lang('about.why_choose_title1')
            </p>

            <p class="section-text">
                @lang('about.our_p_focus')
                @lang('about.our_p_focus1')
            </p>

            <p class="section-text">
                @lang('about.p_cust1')
                @lang('about.str_title')
            </p>
        </div>
    </div>
</section>

<!-- ===== Contact Section ===== -->
<section class="contact-section py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <x-frontend.contactus />
            </div>
        </div>
    </div>
</section>

@endsection

<style>

/* ===== HERO SECTION ===== */

.about-hero-section::before {
    content: "";
    position: absolute;
    left: -150px;
    top: -150px;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(34,197,94,0.25), transparent 70%);
    z-index: 0;
}

.hero-overlay {
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at right, rgba(34,197,94,0.15), transparent 60%);
}

.min-vh-50 {
    min-height: 420px;
}

.hero-title {
    font-size: 52px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 18px;
    letter-spacing: 0.5px;
}

.hero-subtitle {
    font-size: 20px;
    line-height: 1.8;
    color: #e5e7eb;
    margin-bottom: 25px;
}

.hero-image {
    max-height: 400px;
    border-radius: 12px;
    box-shadow: 0 25px 50px rgba(0,0,0,0.35);
}

.hero-breadcrumb {
    background: transparent;
    padding: 0;
}

.hero-breadcrumb .breadcrumb-item a {
    color: #22c55e;
    text-decoration: none;
}

.hero-breadcrumb .breadcrumb-item.active {
    color: #ffffff;
}

	.main-title {
    font-size: 42px;
    font-weight: 700;
    color: #111827;
    margin-bottom: 15px;
}

.section-heading {
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #111827;
}

.section-text {
    font-size: 18px;
    line-height: 1.9;
    color: #374151;
    margin-bottom: 20px;
}

.about-logo {
    max-width: 250px;
}

.goals-section img {
    max-height: 450px;
    object-fit: cover;
}

.breadcrumb {
    background: transparent;
    padding: 0;
}

.breadcrumb-item a {
    text-decoration: none;
    color: #22c55e;
}
</style>