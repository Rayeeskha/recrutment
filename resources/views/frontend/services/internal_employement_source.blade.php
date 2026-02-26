@extends('frontend.layouts.app')

@section('page_title', __('employee.internal_emp_source_title'))
@section('meta_keywords',  __('employee.internal_emp_keyword'))
@section('meta_description',  __('employee.internal_emp_desc'))

@section('container')

<!-- ===== HERO HEADER ===== -->
<section class="inner-hero bg-light py-5">
    <div class="container text-center">
        <h1 class="hero-title">
            @lang('employee.inrnl_emp_src')
        </h1>
        <p class="hero-subtitle">
             @lang('employee.internal_emp_source')
        </p>
    </div>
</section>


<!-- ===== INTERNAL SOURCING SECTION ===== -->
<section class="py-5">
    <div class="container">

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="info-card h-100">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/persional/web/promotion.png') }}" alt="Employee Promotion Strategy">
                    </div>
                    <h3>@lang('employee.promotion')</h3>
                    <p>@lang('employee.they_r_drct')</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="info-card h-100">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/persional/web/retriess.png') }}" alt="Employee Retirement Replacement">
                    </div>
                    <h3>@lang('employee.retiress')</h3>
                    <p>@lang('employee.in_the_evnt')</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="info-card h-100">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/persional/web/former_emp.png') }}" alt="Former Employee Rehiring">
                    </div>
                    <h3>@lang('employee.former_empl')</h3>
                    <p>@lang('employee.form_empl_who')</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-6 col-md-6">
                <div class="info-card h-100">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/persional/web/transporation.png') }}" alt="Transportation Workforce Planning">
                    </div>
                    <h3>@lang('employee.Transportation')</h3>
                    <p>@lang('employee.some_empl_may')</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-6 col-md-6">
                <div class="info-card h-100">
                    <div class="icon-box">
                        <img src="{{ asset('assets/images/persional/web/advertisement.png') }}" alt="Internal Job Advertisement">
                    </div>
                    <h3>@lang('employee.indoor_adv')</h3>
                    <p>@lang('employee.exstng_empl')</p>
                </div>
            </div>

        </div>

    </div>
</section>

<x-frontend.contactus />

@endsection

