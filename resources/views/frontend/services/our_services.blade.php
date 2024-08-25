@extends('frontend.layouts.app')
@section('page_title',Lang::get('front.our_services'))
@section('meta_keywords', Lang::get('front.our_services'))
@section('meta_description',  Lang::get('front.our_services'))
@section('container')

<div class="page-header-area bg-f4fbf6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-header-content">
                    <h1>
                        @lang('front.our_services')
                    </h1>
                    <ul>
                        <li><a href="/">
                            @lang('front.home')
                        </a></li>
                        <li>@lang('front.our_services')</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="page-header-image">
                    <img src="assets/images/banner/banner-img-3.png" alt="Image">
                </div>
            </div>
        </div>

        <div class="page-header-shape">
            <img src="assets/images/shape/shape-8.png" alt="Image">
            <img src="assets/images/shape/shape-9.png" alt="Image">
            <img src="assets/images/shape/shape-10.png" alt="Image">
        </div>
    </div>
</div>

<div class="service-details-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="services-details-content">
                    <div class="analysis-content">
                        <h3>@lang('front.our_services')</h3>
                    </div>
                    <div class="service-description">
                        <p style="font-style: italic;font-size: 16px">
                            @lang('services.the_cmp')
                        </p>
                    </div>
                	<div class="row">
                		<div class="col-md-6">
                			<div class="card" style="height:550px">
                				<div class="card-body">
                					<img src="{{ asset('assets/images/persional/web/ind.servie.jpg') }}">
                					<center>
                						<h1>

                                        @lang('services.bsn_sct')</h1>
                						<p style="font-style: italic;font-size: 16px">

                                            @lang('services.we_r_working')
                                        </p>
                					</center>
                				</div>                				
                			</div>
                		</div>
                		<div class="col-md-6">
                			<div class="card" style="height:550px">
                				<div class="card-body">
                					<img src="{{ asset('assets/images/persional/web/business.jpg') }}">
                					<center>
                						<h1>

                                            @lang('services.ind_sec_se')

                                        </h1>

                						<p style="font-style: italic;font-size: 16px">

                                            @lang('services.we_r_prd')

                                        </p>
                					</center>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <x-frontend.contactus />
    </div>
    <div class="col-md-3"></div>
</div>

@endsection