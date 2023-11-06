@extends('frontend.layouts.app')
@section('page_title', Lang::get('employee.ext_emp_src'))
@section('meta_keywords', Lang::get('employee.ext_emp_src'))
@section('meta_description',  Lang::get('employee.ext_emp_src'))
@section('container')

<div class="page-header-area bg-f4fbf6">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-6">
<div class="page-header-content">
    <h4>@lang('employee.ext_emp_src')
    </h4>
    <ul>
        <li><a href="/">
        	@lang('front.home')
        </a></li>
        <li>@lang('employee.ext_emp_src')
        </li>
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
<div class="row">
<div class="col-lg-12">
<div class="services-details-content">
    <div class="analysis-content">
        <center>
        	<h3>
        		@lang('employee.ext_emp_src')
        	</h3>
        </center>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/journalist.png') }}" style="height:50px;width:50px;border-radius: 50%">

                            <h4>
                            	@lang('employee.jrnl_adv')
                            </h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">

                        	@lang('employee.we_mke_adv')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/campus.png') }}" style="height:50px;width:50px;border-radius: 50%">
                            <h4>
                            	@lang('employee.Campus')
                            </h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">

                        	@lang('employee.the_cmps')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/emp_agn.png') }}" style="height:50px;width:50px;border-radius: 50%">
                            <h4>

                            	@lang('employee.empl_agn')
                            </h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">

                        	@lang('employee.we_mke_agc')
                        </p>
                    </div>
                </div>
            </div>            
        </div>

        <div class="row" style="margin-top: 3%">
            <div class="col-md-6">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/exchange.png') }}" style="height:50px;width:50px;border-radius: 50%">
                            <h4>
                            	@lang('employee.Exchange')
                            </h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">

                        	@lang('employee.we_cn_exch')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/interviews.png') }}" style="height:50px;width:50px;border-radius: 50%">
                            <h4>
                            	@lang('employee.Interviews')</h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">

                        	@lang('employee.we_r_wrk')
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
</div>
</div>

@endsection