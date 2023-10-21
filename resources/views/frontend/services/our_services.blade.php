@extends('frontend.layouts.app')
@section('page_title', GoogleTranslate::trans('Our Services', session()->get('locale')))
@section('meta_keywords', GoogleTranslate::trans('Our Services', session()->get('locale')))
@section('meta_description',  GoogleTranslate::trans('Our Services', session()->get('locale')))
@section('container')

<div class="page-header-area bg-f4fbf6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-header-content">
                    <h1>{{ GoogleTranslate::trans('Our Services', session()->get('locale')) }}</h1>
                    <ul>
                        <li><a href="/">{{ GoogleTranslate::trans('Home', session()->get('locale')) }}</a></li>
                        <li>{{ GoogleTranslate::trans('Our Services', session()->get('locale')) }}</li>
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
                        <h3>{{ GoogleTranslate::trans('Our Services', session()->get('locale')) }}</h3>
                    </div>
                    <div class="service-description">
                        <p style="font-style: italic;font-size: 16px">{{ GoogleTranslate::trans('The company offers a variety of services that suit individuals and suit all business sectors, and we offer all our services with the highest quality and professionalism to ensure that we meet the requirements of our customers, as follows:', session()->get('locale')) }}</p>
                    </div>
                	<div class="row">
                		<div class="col-md-6">
                			<div class="card" style="height:550px">
                				<div class="card-body">
                					<img src="{{ asset('assets/images/persional/web/ind.servie.jpg') }}">
                					<center>
                						<h1>{{ GoogleTranslate::trans('Business sector services', session()->get('locale')) }}</h1>
                						<p style="font-style: italic;font-size: 16px">{{ GoogleTranslate::trans("We are working to provide self-services on our website with the possibility of connecting human cadres to the customer's headquarters, and we offer a variety of services for individuals represented in (personal assistance - security guard - gardener - traveler - private driver - nanny - hourly labor", session()->get('locale')) }}</p>
                					</center>
                				</div>                				
                			</div>
                		</div>
                		<div class="col-md-6">
                			<div class="card" style="height:550px">
                				<div class="card-body">
                					<img src="{{ asset('assets/images/persional/web/business.jpg') }}">
                					<center>
                						<h1>{{ GoogleTranslate::trans('Individual sector services', session()->get('locale')) }}</h1>

                						<p style="font-style: italic;font-size: 16px">{{ GoogleTranslate::trans("We provide our clients with everything related to qualified human cadres brought from outside the Kingdom according to the client’s requirements, whether administrative, technical or professional cadres, while providing consulting services in development through experts and specialists, and we also support the seasonal goals of our clients at the time of increasing requests.", session()->get('locale')) }}</p>
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

@endsection