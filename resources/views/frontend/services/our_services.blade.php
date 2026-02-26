@extends('frontend.layouts.app')

@section('page_title', __('front.our_services_title'))
@section('meta_keywords',  __('front.services_keyword'))
@section('meta_description',  __('front.services_desc'))

@section('container')

<!-- ===== HERO HEADER ===== -->
<section class="services-hero-section">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <h1 class="hero-title">
                    @lang('front.our_services')
                </h1>

                <p class="hero-subtitle">
                   @lang('front.services_heading')
                </p>
            </div>

            <div class="col-lg-6 text-center">
                <img src="{{ asset('assets/images/img/services.png') }}"
                     alt="MS Group Recruitment Services India to Gulf"
                     class="img-fluid hero-image"
                     loading="lazy">
            </div>

        </div>
    </div>
</section>

<!-- ===== INTRO SECTION ===== -->
<section class="services-intro py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-heading">
                @lang('front.our_services')
            </h2>
        </div>

        <p class="section-text text-center">
            @lang('services.the_cmp')
        </p>
    </div>
</section>

<!-- ===== SERVICES CARDS ===== -->
<section class="services-cards-section pb-5">
    <div class="container">
        <div class="row g-4">

            <!-- Service 1 -->
            <div class="col-lg-6">
                <div class="service-card">
                    <img src="{{ asset('assets/images/persional/web/ind.servie.jpg') }}"
                         alt="Business Sector Recruitment Services"
                         class="img-fluid">

                    <div class="service-card-body">
                        <h3>@lang('services.bsn_sct')</h3>

                        <p>
                            @lang('services.we_r_working')
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-6">
                <div class="service-card">
                    <img src="{{ asset('assets/images/persional/web/business.jpg') }}"
                         alt="Industrial Sector Staffing Solutions"
                         class="img-fluid">

                    <div class="service-card-body">
                        <h3>@lang('services.ind_sec_se')</h3>

                        <p>
                            @lang('services.we_r_prd')
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===== CONTACT CTA ===== -->
<x-frontend.contactus />

@endsection
