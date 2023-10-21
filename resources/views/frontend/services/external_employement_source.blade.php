@extends('frontend.layouts.app')
@section('page_title', GoogleTranslate::trans('External Sources of Employment
', session()->get('locale')))
@section('meta_keywords', GoogleTranslate::trans('External Sources of Employment
', session()->get('locale')))
@section('meta_description',  GoogleTranslate::trans('External Sources of Employment
', session()->get('locale')))
@section('container')

<div class="page-header-area bg-f4fbf6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-header-content">
                    <h4>{{ GoogleTranslate::trans('External Sources of Employment', session()->get('locale')) }}</h4>
                    <ul>
                        <li><a href="/">{{ GoogleTranslate::trans('Home', session()->get('locale')) }}</a></li>
                        <li>{{ GoogleTranslate::trans('External Sources of Employment', session()->get('locale')) }}</li>
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
                        	<h3>{{ GoogleTranslate::trans('External Sources of Employment', session()->get('locale')) }}</h3>
                        </center>
                        <div class="row">
				            <div class="col-md-4">
				                <div class="card" style="height: 250px">
				                    <div class="card-body">
				                        <center><img src="{{ asset('assets/images/persional/web/journalist.png') }}" style="height:50px;width:50px;border-radius: 50%">

				                            <h4>{{ GoogleTranslate::trans('Journalist advertisements', session()->get('locale')) }}</h4>
				                        </center>
				                        <p style="font-size: 16px;font-style: italic;">
				                            {{ GoogleTranslate::trans('We make advertisements to select the most qualified employees according to their skills, through advertisements.', session()->get('locale')) }}
				                        </p>
				                    </div>
				                </div>
				            </div>
				            <div class="col-md-4">
				                <div class="card" style="height: 250px">
				                    <div class="card-body">
				                        <center><img src="{{ asset('assets/images/persional/web/campus.png') }}" style="height:50px;width:50px;border-radius: 50%">
				                            <h4>{{ GoogleTranslate::trans('Campus', session()->get('locale')) }}</h4>
				                        </center>
				                        <p style="font-size: 16px;font-style: italic;">
				                            {{ GoogleTranslate::trans('The campus can be used to attract human cadres of students in educational institutions to prove themselves in various jobs.', session()->get('locale')) }}
				                        </p>
				                    </div>
				                </div>
				            </div>
				            <div class="col-md-4">
				                <div class="card" style="height: 250px">
				                    <div class="card-body">
				                        <center><img src="{{ asset('assets/images/persional/web/emp_agn.png') }}" style="height:50px;width:50px;border-radius: 50%">
				                            <h4>{{ GoogleTranslate::trans('Employment Agencies', session()->get('locale')) }}</h4>
				                        </center>
				                        <p style="font-size: 16px;font-style: italic;">
				                            {{ GoogleTranslate::trans('We make contracts with employment agencies in order to attract human cadres and build a public database.', session()->get('locale')) }}
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
				                            <h4>{{ GoogleTranslate::trans('Exchange', session()->get('locale')) }}</h4>
				                        </center>
				                        <p style="font-size: 16px;font-style: italic;">
				                            {{ GoogleTranslate::trans('We can exchange employees with other agencies, including government agencies, according to needs.', session()->get('locale')) }}
				                        </p>
				                    </div>
				                </div>
				            </div>
				            <div class="col-md-6">
				                <div class="card" style="height: 250px">
				                    <div class="card-body">
				                        <center><img src="{{ asset('assets/images/persional/web/interviews.png') }}" style="height:50px;width:50px;border-radius: 50%">
				                            <h4>{{ GoogleTranslate::trans('Interviews', session()->get('locale')) }}</h4>
				                        </center>
				                        <p style="font-size: 16px;font-style: italic;">
				                            {{ GoogleTranslate::trans('We are working on holding interviews within the company that are announced in advance in order to attract human cadres and identify their skills.', session()->get('locale')) }}
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