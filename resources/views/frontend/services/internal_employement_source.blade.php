@extends('frontend.layouts.app')
@section('page_title', GoogleTranslate::trans('Internal sources of recruitment', session()->get('locale')))
@section('meta_keywords', GoogleTranslate::trans('Internal sources of recruitment', session()->get('locale')))
@section('meta_description',  GoogleTranslate::trans('Internal sources of recruitment', session()->get('locale')))
@section('container')

<div class="page-header-area bg-f4fbf6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-header-content">
                    <h4>{{ GoogleTranslate::trans('Internal sources of recruitment', session()->get('locale')) }}</h4>
                    <ul>
                        <li><a href="/">{{ GoogleTranslate::trans('Home', session()->get('locale')) }}</a></li>
                        <li>{{ GoogleTranslate::trans('Internal sources of recruitment', session()->get('locale')) }}</li>
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
            <h1>{{ GoogleTranslate::trans('Internal sources of recruitment', session()->get('locale')) }}</h1>
        </center>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/promotion.png') }}" style="height:50px;width:50px;border-radius: 50%">

                            <h4>{{ GoogleTranslate::trans('Promotions', session()->get('locale')) }}</h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">
                            {{ GoogleTranslate::trans('They are directed to all employees who show hard work and diligence and work according to the stipulated regulations in the company.', session()->get('locale')) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/retriess.png') }}" style="height:50px;width:50px;border-radius: 50%">
                            <h4>{{ GoogleTranslate::trans('Retirees', session()->get('locale')) }}</h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">
                            {{ GoogleTranslate::trans('In the event that retirees are needed for certain positions within the company, the work is extended to them.', session()->get('locale')) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/former_emp.png') }}" style="height:50px;width:50px;border-radius: 50%">
                            <h4>{{ GoogleTranslate::trans('Former Employees', session()->get('locale')) }}</h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">
                            {{ GoogleTranslate::trans('Former employees who have demonstrated good skills during previous periods of work may be hired for their experience in hiring qualified workers.', session()->get('locale')) }}
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
                            <h4>{{ GoogleTranslate::trans('Transportation', session()->get('locale')) }}</h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">
                            {{ GoogleTranslate::trans('Some employees may be transported from one department to another within the company if it is necessary.', session()->get('locale')) }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="height: 250px">
                    <div class="card-body">
                        <center><img src="{{ asset('assets/images/persional/web/advertisement.png') }}" style="height:50px;width:50px;border-radius: 50%">
                            <h4>{{ GoogleTranslate::trans('Indoor Advertising', session()->get('locale')) }}</h4>
                        </center>
                        <p style="font-size: 16px;font-style: italic;">
                            {{ GoogleTranslate::trans('Existing employees within the company can take on certain positions, and employees are informed of the company’s need to do a number of tasks.', session()->get('locale')) }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection