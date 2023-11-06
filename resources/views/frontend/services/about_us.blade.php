@extends('frontend.layouts.app')
@section('page_title', Lang::get('front.about_us'))
@section('meta_keywords', Lang::get('front.about_us'))
@section('meta_description',  Lang::get('front.about_us'))
@section('container')

<div class="page-header-area bg-f4fbf6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-header-content">
                    <h1>@lang('front.about_us')</h1>
                    <ul>
                        <li><a href="/">@lang('front.home')</a></li>
                        <li>@lang('front.about_us')</li>
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
        	<div class="col-md-6">
        		<div class="card">
        			<div class="card-body">
        				<img src="{{ asset('assets/images/logo/msgroup_logo2.png') }}">
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<h1>@lang('front.about_us')</h1>
        		<p style="font-style: italic;font-size: 16px">@lang('about.about_title1')
        			&nbsp;&nbsp;
        			@lang('about.about_title2')
        		</p>
        	</div>
        </div>
        <!-- Our Vision -->
		<x-frontend.ourvision />

		<div class="row">
			<div class="col-md-6">
				<h1>@lang('about.our_goals')</h1>

				<p style="font-style: italic;font-size: 16px">
					@lang('about.our_goals')
					@lang('about.about_title3')
				</p>

				<p style="font-style: italic;font-size: 16px">
					@lang('about.about_title3')
					@lang('about.about_title4')
				</p>

				<p style="font-style: italic;font-size: 16px">
					@lang('about.about_title4')
					@lang('about.about_title5')
				</p>

				<p style="font-style: italic;font-size: 16px">
					@lang('about.about_title5')
					@lang('about.about_title6')
				</p>

				<p style="font-style: italic;font-size: 16px">
					@lang('about.about_title6')
					@lang('about.about_title7')
				</p>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<img src="{{ asset('assets/images/persional/web/goals.jpg') }}">
					</div>
				</div>
			</div>
		</div>		
    </div>

    <div style="background-color: #f1f6f9;margin-top: 5%">
		<div class="container-fluid" style="margin-top: 5%">
			<div class="row" >
				<div class="col-md-12">
					<h1>
					@lang('about.why_choose')</h1>

					<p style="font-style: italic;font-size: 16px">

						@lang('about.why_choose')
						@lang('about.why_choose_title')
					</p>

					<p style="font-style: italic;font-size: 16px">
						@lang('about.why_choose')
						@lang('about.why_choose_title1')

					</p>

					<p style="font-style: italic;font-size: 16px">
						@lang('about.our_p_focus')
					</p>

					<p style="font-style: italic;font-size: 16px">
						@lang('about.our_p_focus1')
					</p>

					<p style="font-style: italic;font-size: 16px">
						@lang('about.p_cust1')
					</p>

					<p style="font-style: italic;font-size: 16px">
						@lang('about.str_title')
					</p>

				</div>
			</div>
		</div>
	</div> 

	<div style="margin-top: 5%">
		<div class="container-fluid">
			<h1>
				@lang('about.who_shaikh')</h1>

			<p style="font-style: italic;font-size: 16px">
				<span style="color: blue">
					@lang('about.shaikh_obd')</span>

				@lang('about.businesses_inarab')
			</p>

			{{--<h1>@lang('about.about_his_lfe')</h1>

			<p style="font-style: italic;font-size: 16px">
				@lang('about.about_his_lfe')
				@lang('about.about_his_lfe1')
				@lang('about.about_his_lfe2')
			</p> --}}

			<p style="font-style: italic;font-size: 16px">
				@lang('about.abt_lfe1')
				@lang('about.abt_lfe2')
			</p>

			<h1>
				@lang('about.most_imp_achv')</h1>

			<p style="font-style: italic;font-size: 16px">
				<span style="color: blue">
					@lang('about.achv_title')
				</span>
			</p>
		</div>
	</div> 
</div>


@endsection