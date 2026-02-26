@extends('frontend.layouts.app')

@section('page_title', __('employee.ext_emp_src_title'))
@section('meta_keywords',  __('employee.external_rec_kwyword'))
@section('meta_description',  __('employee.explore_tour'))

@section('container')

<!-- ===== HERO SECTION ===== -->
<section class="inner-hero bg-light py-5">
    <div class="container text-center">
        <h1 class="hero-title">
            @lang('employee.ext_emp_src')
        </h1>
        <p class="hero-subtitle">
            @lang('employee.strategic_external')            
        </p>
    </div>
</section>


<!-- ===== EXTERNAL SOURCING SECTION ===== -->
<section class="py-5">
    <div class="container">

        <div class="row g-4">

            <!-- Journal Advertisement -->
            <div class="col-lg-4 col-md-6">
                <div class="info-card h-100">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/persional/web/journalist.png') }}" alt="Job Advertisement Recruitment">
                    </div>
                    <h3>@lang('employee.jrnl_adv')</h3>
                    <p>@lang('employee.we_mke_adv')</p>
                </div>
            </div>

            <!-- Campus Recruitment -->
            <div class="col-lg-4 col-md-6">
                <div class="info-card h-100">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/persional/web/campus.png') }}" alt="Campus Recruitment Strategy">
                    </div>
                    <h3>@lang('employee.Campus')</h3>
                    <p>@lang('employee.the_cmps')</p>
                </div>
            </div>

            <!-- Employment Agency -->
            <div class="col-lg-4 col-md-6">
                <div class="info-card h-100">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/persional/web/emp_agn.png') }}" alt="Employment Agency Collaboration">
                    </div>
                    <h3>@lang('employee.empl_agn')</h3>
                    <p>@lang('employee.we_mke_agc')</p>
                </div>
            </div>

            <!-- Exchange Program -->
            <div class="col-lg-6 col-md-6">
                <div class="info-card h-100">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/persional/web/exchange.png') }}" alt="Workforce Exchange Program">
                    </div>
                    <h3>@lang('employee.Exchange')</h3>
                    <p>@lang('employee.we_cn_exch')</p>
                </div>
            </div>

            <!-- Interviews -->
            <div class="col-lg-6 col-md-6">
                <div class="info-card h-100">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/persional/web/interviews.png') }}" alt="Professional Interviews Process">
                    </div>
                    <h3>@lang('employee.Interviews')</h3>
                    <p>@lang('employee.we_r_wrk')</p>
                </div>
            </div>

        </div>

    </div>
</section>

<x-frontend.contactus />

@endsection
