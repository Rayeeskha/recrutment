@extends('frontend.layouts.app')

@section('page_title', __('services.agency_title'))
@section('meta_keywords',  __('services.agency_keyword'))
@section('meta_description',  __('services.agency_desc'))

@section('container')

<!-- ===== HERO SECTION ===== -->
<section class="agency-hero">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-7">
                <h1 class="hero-title">
                    @lang('services.agency')
                </h1>

                <p class="hero-subtitle">
                    @lang('services.official_license')
                </p>
            </div>

            <div class="col-lg-5 text-center">
                <img src="{{ asset('assets/images/img/license_rec.png') }}"
                     alt="Licensed Indian Recruitment Agency for Gulf Countries"
                     class="img-fluid hero-image"
                     loading="lazy">
            </div>

        </div>
    </div>
</section>


<!-- ===== AGENCY CERTIFICATION SECTION ===== -->
<section class="section-block">
    <div class="container text-center">

        <h2 class="section-title">
            @lang('services.gov_approved')
        </h2>

        <p class="section-text">
            @lang('services.operate')
        </p>

        <div class="license-image-wrapper mt-4">
            <img src="{{ asset('assets/images/persional/wakaala.jpeg') }}"
                 alt="MS Group Official Recruitment Agency License"
                 class="img-fluid license-image shadow">
        </div>

    </div>
</section>


<!-- ===== TRUST SECTION ===== -->
<section class="section-block bg-light">
    <div class="container text-center">

        <h2 class="section-title">
             @lang('services.why_choose')
        </h2>

        <div class="row g-4 mt-4">

            <div class="col-md-4">
                <div class="trust-box">
                    @lang('services.legal')
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="trust-box">
                    @lang('services.trans_rec')                   
                </div>
            </div>

            <div class="col-md-4">
                <div class="trust-box">
                    @lang('services.trusted_by')                     
                </div>
            </div>

        </div>

    </div>
</section>

<x-frontend.contactus />

@endsection

