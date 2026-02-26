@extends('frontend.layouts.app')

@section('page_title', __('employee.our_client_title'))
@section('meta_keywords',   __('employee.our_client_keyword'))
@section('meta_description',  __('employee.our_client_desc'))

@section('container')

<!-- ===== HERO SECTION ===== -->
<section class="inner-hero bg-light py-5">
    <div class="container text-center">
        <h1 class="hero-title">
            @lang('employee.our_client')
        </h1>
        <p class="hero-subtitle">
             @lang('employee.trusted_by_leading')
        </p>
    </div>
</section>

<!-- ===== CLIENT LOGOS SECTION ===== -->
<section class="py-5">
    <div class="container">

        <div class="row g-4 justify-content-center">

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="client-card">
                    <img src="{{ asset('assets/images/persional/clients.jpeg') }}" 
                         alt="Gulf Recruitment Client Company 1">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="client-card">
                    <img src="{{ asset('assets/images/persional/clients1.jpeg') }}" 
                         alt="Gulf Recruitment Client Company 2">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="client-card">
                    <img src="{{ asset('assets/images/persional/clients2.jpeg') }}" 
                         alt="Gulf Recruitment Client Company 3">
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="client-card">
                    <img src="{{ asset('assets/images/persional/clients3.jpeg') }}" 
                         alt="Gulf Recruitment Client Company 4">
                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <h3 class="more-text">
                @lang('employee.many_more')
            </h3>
        </div>

    </div>
</section>

<!-- ===== TRUST SECTION ===== -->
<section class="bg-light py-5">
    <div class="container text-center">

        <h2 class="section-title">
            @lang('employee.why_global_comp')
             
        </h2>

        <p class="section-text">
            @lang('employee.we_deliver_reliable')           
        </p>

    </div>
</section>

<x-frontend.contactus />

@endsection
