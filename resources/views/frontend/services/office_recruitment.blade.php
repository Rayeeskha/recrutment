@extends('frontend.layouts.app')
@section('page_title', Lang::get('services.ofc_rec_ind'))
@section('meta_keywords',Lang::get('services.ofc_rec_ind'))
@section('meta_description', Lang::get('services.ofc_rec_ind'))
@section('container')

<div class="page-header-area bg-f4fbf6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-header-content">
                    <h4>
						@lang('services.ofc_rec_ind')
					</h4>
                    <ul>
                        <li><a href="/">

                        	@lang('front.home')
                        </a></li>
                        <li>@lang('services.ofc_rec_ind')</li>
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
                        <h3>@lang('services.ofc_rec_ind')</h3>
                    </div>
                    <div class="service-description">
                        <p style="font-style: italic;font-size: 18px">
	                        @lang('services.through_rec_ofc')
	                    </p>
                    </div>
                </div>
                <div class="services-details-content">
                    <div class="analysis-content">
                        <h3>
                        	@lang('services.rec_office')
                        </h3>
                    </div>
                    <div class="service-description">
                        <p style="font-style: italic;font-size: 18px">

	                        @lang('services.we_r_able')
	                    </p>

                        <p style="font-style: italic;font-size: 18px">
								@lang('services.we_hve_any')
		                    </p>

                        <p style="font-style: italic;font-size: 18px">

	                        @lang('services.we_sign_mdcl')
	                    </p>

                        <p style="font-style: italic;font-size: 18px">

	                        @lang('services.we_provide')
	                    </p>

                        <p style="font-style: italic;font-size: 18px">
							@lang('services.we_prvd_hghly')
                        </p>

                        <p style="font-style: italic;font-size: 18px">

	                        @lang('services.in_addition')
	                    </p>

                        <h3>
                        	@lang('services.the_most_imp')
                        </h3>

                        <p style="font-style: italic;font-size: 18px">

	                        @lang('services.the_process')
	                    </p>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>

<div class="services-details-content pt-100 pb-70" style="background-color: #f1f6f9">
	<div class="container" style="background-color: #fff;">
		<div class="services-details-content">
	        <div class="analysis-content">
	            <h3>
	            	@lang('services.sending_1')
	            </h3>
	        </div>
	        <div class="service-description">
	            <p style="font-style: italic;font-size: 18px">
	            @lang('services.the_first_stp')</p>            
	        </div>
	    </div>
    </div>
    <div class="container" style="background-color: #fff;">
		<div class="services-details-content">
	        <div class="analysis-content">
	            <h3>
	            	@lang('services.scnd_slc')
	            </h3>
	        </div>
	        <div class="service-description">
	            <p style="font-style: italic;font-size: 18px">
	            	@lang('services.at_this_stage')
	            </p>            
	        </div>
	    </div>
    </div>
    <div class="container" style="background-color: #fff;">
		<div class="services-details-content">
	        <div class="analysis-content">
	            <h3>
	            	@lang('services.thr_prsnl_int')
	            </h3>
	        </div>
	        <div class="service-description">
	            <p style="font-style: italic;font-size: 18px">

	            	@lang('services.we_frm_lbr')
				</p>
	        </div>
	    </div>
	</div>

	<div class="container" style="background-color: #fff;">
		<div class="services-details-content">
	        <div class="analysis-content">
	            <h3>
	            	@lang('services.four_mdcl')
	            </h3>
	        </div>
	        <div class="service-description">
	            <p style="font-style: italic;font-size: 18px">
	            	@lang('services.a_mdcl_exam')
	            </p>
	        </div>
	    </div>
	</div>

	<div class="container" style="background-color: #fff;">
		<div class="services-details-content">
	        <div class="analysis-content">
	            <h3>
	            	@lang('services.wrk_visa')
	            </h3>
	        </div>
	        <div class="service-description">
	            <p style="font-style: italic;font-size: 18px">
	            	@lang('services.aftr_wrker_pass')
	            </p>
	        </div>
	    </div>
	</div>

	<div class="container" style="background-color: #fff;">
		<div class="services-details-content">
	        <div class="analysis-content">
	            <h3>
	            	@lang('services.preparing_wrker')
	            </h3>
	        </div>
	        <div class="service-description">
	            <p style="font-style: italic;font-size: 18px">
	            	@lang('services.at_this_stg_wrker')
	            </p>
	        </div>
	    </div>
	</div>

	<div class="container" style="background-color: #fff;">
		<div class="services-details-content">
	        <div class="analysis-content">
	            <h3>
	            	@lang('services.svn_dlv')
	            </h3>
	        </div>
	        <div class="service-description">
	            <p style="font-style: italic;font-size: 18px">
	            	@lang('services.the_lst_stp')
	            	@lang('services.in_clusion')
	            </p>
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