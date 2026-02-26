@extends('frontend.layouts.app')

@section('page_title', __('services.the_best'))
@section('meta_keywords',  __('services.the_best_keyword'))
@section('meta_description',  __('services.rec_desc'))

@section('container')

<!-- ===== HERO SECTION ===== -->
<section class="services-hero">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-7">
                <h1 class="hero-title">
                    @lang('services.the_best')
                </h1>

                <p class="hero-subtitle">
                    @lang('services.rec_sub_title')
                </p>
            </div>

            <div class="col-lg-5 text-center">
                <img src="{{ asset('assets/images/img/recruitment.png') }}"
                     alt="Licensed Indian Recruitment Company for Gulf Countries"
                     class="img-fluid hero-image"
                     loading="lazy">
            </div>

        </div>
    </div>
</section>


<!-- ===== INTRODUCTION ===== -->
<section class="section-block">
    <div class="container">
        <h2 class="section-title">@lang('services.the_best')</h2>

        <p class="section-text">
            @lang('services.the_best_title')
            @lang('services.the_best_title1')
        </p>

        <p class="section-text">
            @lang('services.through_ofc')
            @lang('services.through_ofc1')
            @lang('services.bcz_we_are')
        </p>
    </div>
</section>


<!-- ===== ACCREDITATION ===== -->
<section class="section-block bg-light">
    <div class="container">
        <h2 class="section-title">@lang('services.accred_rec')</h2>

        <p class="section-text">
            @lang('services.we_r_dstg')
            @lang('services.we_got')
            @lang('services.thrg_the_cmp')
        </p>
    </div>
</section>


<!-- ===== INDUSTRIES WE SERVE ===== -->
<section class="section-block">
    <div class="container">
        <h2 class="section-title">@lang('services.p_v_t_e')</h2>

        <div class="row g-4 industry-grid">

            <div class="col-md-4"><div class="industry-box">@lang('services.oil_nd_eng')</div></div>
            <div class="col-md-4"><div class="industry-box">@lang('services.contracting')</div></div>
            <div class="col-md-4"><div class="industry-box">@lang('services.Transport')</div></div>
            <div class="col-md-4"><div class="industry-box">@lang('services.trnd_edu')</div></div>
            <div class="col-md-4"><div class="industry-box">@lang('services.eng_sec')</div></div>
            <div class="col-md-4"><div class="industry-box">@lang('services.Security')</div></div>
            <div class="col-md-4"><div class="industry-box">@lang('services.agr_sctr')</div></div>
            <div class="col-md-4"><div class="industry-box">@lang('services.mntc_nd_opt')</div></div>
            <div class="col-md-4"><div class="industry-box">@lang('services.cleanliness')</div></div>
            <div class="col-md-4"><div class="industry-box">@lang('services.Telecommunications')</div></div>
            <div class="col-md-4"><div class="industry-box">@lang('services.the_real_sec')</div></div>

        </div>
    </div>
</section>


<!-- ===== RECRUITMENT PROCESS ===== -->
<section class="section-block bg-light">
    <div class="container">
        <h2 class="section-title">@lang('services.stp_to_rec')</h2>

        <div class="process-steps">
            <p>@lang('services.the_rec_lbr')</p>
            <p>@lang('services.lrg_nmb')</p>
            <p>@lang('services.the_nmb')</p>
            <p>@lang('services.the_r_sbj')</p>
            <p>@lang('services.the_nxt_stp')</p>
            <p>@lang('services.then_the_lbr')</p>
            <p>@lang('services.as_fr_the_lst')</p>
            <p>@lang('services.tke_the_int')</p>
        </div>
    </div>
</section>


<x-frontend.contactus />

@endsection
