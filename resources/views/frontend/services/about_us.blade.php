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
		$aboutBanner = "assets/images/img/about_banner_ar.png";
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
                   @lang('front.trusted_india')
                </p>

            
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
<x-frontend.contactus />

@endsection

