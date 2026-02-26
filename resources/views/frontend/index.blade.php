@extends('frontend.layouts.app')
@section('page_title', __('front.rec_office_india'))
@section('meta_keywords', __('front.rec_office_keyword'))
@section('meta_description',  __('front.rec_office_desc'))
@section('container')

<!-- ===== HERO SLIDER ===== -->
<x-frontend.slider />

<!-- ===== WHY WE ARE BEST (UPGRADED CARDS) ===== -->
<section class="why-best-section">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">
              @lang('front.why_shoose')               
            </h2>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="icon-circle">✔</div>
                    <h3>@lang('front.license_rec')</h3>
                    <p>@lang('front.gov_approved')</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="icon-circle">📍</div>
                    <h3>@lang('front.mumbai_delhi_office')</h3>
                    <p>@lang('front.strategical_located')</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="icon-circle">🌍</div>
                    <h3>@lang('front.specialiging_gulf')</h3>
                    <p>@lang('front.we_spelize')</p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- About us -->
<x-frontend.aboutus />

<!-- Our Vision -->
<x-frontend.ourvision />

<!-- Core Values -->
<x-frontend.basicvalue />

<!-- Why Choose Us -->
<x-frontend.whychooseus />

<!-- Recruitment Process -->
<x-frontend.worksstep />

<!-- Employee Sources -->
<x-frontend.employementsource />

@endsection
