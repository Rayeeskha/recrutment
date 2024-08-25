@extends('frontend.layouts.app')
@section('page_title', Lang::get('employee.our_client'))
@section('meta_keywords', Lang::get('employee.our_client'))
@section('meta_description',  Lang::get('employee.our_client'))
@section('container')

<div class="page-header-area bg-f4fbf6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-header-content">
                    <h1>@lang('employee.our_client')</h1>
                    <ul>
                        <li><a href="/">@lang('front.home')</a></li>
                        <li>@lang('employee.our_client')</li>
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
    <div class="container">
    	<center>
    		<h1>@lang('employee.our_client')</h1>
    	</center>

    	<div class="row">
    		<div class="col-md-4">
    			<img src="{{ asset('assets/images/persional/clients.jpeg') }}" style="width: 300px; height: 300px;border-radius: 50%">
    		</div>
    		<div class="col-md-4">
    			<img src="{{ asset('assets/images/persional/clients1.jpeg') }}" style="width: 300px; height: 300px;border-radius: 50%">
    		</div>
    		<div class="col-md-4">
    			<img src="{{ asset('assets/images/persional/clients2.jpeg') }}" style="width:300px; height: 300px;border-radius: 50%">
    		</div>
    		<div class="col-md-4"></div>
    		<div class="col-md-4">
    			<img src="{{ asset('assets/images/persional/clients3.jpeg') }}" style="width: 300px; height: 300px;border-radius: 50%">
    		</div>
    		<div class="col-md-4"></div>
    	</div>
    	<h3>
            @lang('employee.many_more')
        </h3>
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