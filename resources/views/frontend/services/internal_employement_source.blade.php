@extends('frontend.layouts.app')
@section('page_title', Lang::get('employee.inrnl_emp_src'))
@section('meta_keywords',Lang::get('employee.inrnl_emp_src'))
@section('meta_description', Lang::get('employee.inrnl_emp_src'))
@section('container')

<div class="page-header-area bg-f4fbf6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-header-content">
                    <h4>@lang('employee.inrnl_emp_src')</h4>
                    <ul>
                        <li><a href="/">@lang('front.home')</a></li>
                        <li>@lang('employee.inrnl_emp_src')</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="page-header-image">
                    <img src="{{ asset('assets/images/banner/banner-img-3.png') }}" alt="Image">
                </div>
            </div>
        </div>

        <div class="page-header-shape">
            <img src="{{ asset('assets/images/shape/shape-8.png') }}" alt="Image">
            <img src="{{ asset('assets/images/shape/shape-9.png') }}" alt="Image">
            <img src="{{ asset('assets/images/shape/shape-10.png') }}" alt="Image">
        </div>
    </div>
</div>

<div class="service-details-area pt-100 pb-70">
    <div class="container-fluid">
        <center>
            <h1>@lang('employee.inrnl_emp_src')</h1>
        </center>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/promotion.png') }}" style="height:50px;width:50px;border-radius: 50%">

                            <h4>
                                @lang('employee.promotion')

                        </h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">

                            @lang('employee.they_r_drct')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/retriess.png') }}" style="height:50px;width:50px;border-radius: 50%">
                            <h4>
                                @lang('employee.retiress')
                            </h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">

                            @lang('employee.in_the_evnt')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/former_emp.png') }}" style="height:50px;width:50px;border-radius: 50%">
                            <h4>
                                @lang('employee.former_empl')
                            </h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">

                            @lang('employee.form_empl_who')
                        </p>
                    </div>
                </div>
            </div>            
        </div>
        <div class="row" style="margin-top: 3%">
            <div class="col-md-6">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/transporation.png') }}" style="height:50px;width:50px;border-radius: 50%">
                            <h4>
                                @lang('employee.Transportation')
                            </h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">

                            @lang('employee.some_empl_may')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/advertisement.png') }}" style="height:50px;width:50px;border-radius: 50%">
                            <h4>
                                @lang('employee.indoor_adv')
                            </h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">

                            @lang('employee.exstng_empl')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection