@extends('frontend.layouts.app')

@section('page_title', __('services.ofc_rec_ind'))
@section('meta_keywords',  __('services.office_rec_keyword'))
@section('meta_description', __('services.office_rec_desc'))

@section('container')

<!-- ===== HERO SECTION ===== -->
<section class="service-hero">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-7">
                <h1 class="hero-title">
                    @lang('services.ofc_rec_ind')
                </h1>

                <p class="hero-subtitle">
                     @lang('services.professional_office')
                </p>

                
            </div>

            <div class="col-lg-5 text-center">
                <img src="{{ asset('assets/images/img/office_recruitment.png') }}"
                     alt="Office Recruitment Process in India for Gulf Countries"
                     class="img-fluid hero-image"
                     loading="lazy">
            </div>

        </div>
    </div>
</section>


<!-- ===== INTRO SECTION ===== -->
<section class="section-block">
    <div class="container">
        <h2 class="section-title">@lang('services.rec_office')</h2>

        <p class="section-text">@lang('services.through_rec_ofc')</p>
        <p class="section-text">@lang('services.we_r_able')</p>
        <p class="section-text">@lang('services.we_hve_any')</p>
        <p class="section-text">@lang('services.we_sign_mdcl')</p>
        <p class="section-text">@lang('services.we_provide')</p>
        <p class="section-text">@lang('services.we_prvd_hghly')</p>
        <p class="section-text">@lang('services.in_addition')</p>
    </div>
</section>


<!-- ===== RECRUITMENT PROCESS ===== -->
<section class="section-block bg-light">
    <div class="container">
        <h2 class="section-title">@lang('services.the_most_imp')</h2>

        <div class="process-timeline">

            <div class="process-step">
                <span class="step-number">01</span>
                <h3>@lang('services.sending_1')</h3>
                <p>@lang('services.the_first_stp')</p>
            </div>

            <div class="process-step">
                <span class="step-number">02</span>
                <h3>@lang('services.scnd_slc')</h3>
                <p>@lang('services.at_this_stage')</p>
            </div>

            <div class="process-step">
                <span class="step-number">03</span>
                <h3>@lang('services.thr_prsnl_int')</h3>
                <p>@lang('services.we_frm_lbr')</p>
            </div>

            <div class="process-step">
                <span class="step-number">04</span>
                <h3>@lang('services.four_mdcl')</h3>
                <p>@lang('services.a_mdcl_exam')</p>
            </div>

            <div class="process-step">
                <span class="step-number">05</span>
                <h3>@lang('services.wrk_visa')</h3>
                <p>@lang('services.aftr_wrker_pass')</p>
            </div>

            <div class="process-step">
                <span class="step-number">06</span>
                <h3>@lang('services.preparing_wrker')</h3>
                <p>@lang('services.at_this_stg_wrker')</p>
            </div>

            <div class="process-step">
                <span class="step-number">07</span>
                <h3>@lang('services.svn_dlv')</h3>
                <p>@lang('services.the_lst_stp') @lang('services.in_clusion')</p>
            </div>

        </div>
    </div>
</section>

<x-frontend.contactus />

@endsection

