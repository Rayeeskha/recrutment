@extends('frontend.layouts.app')
@section('page_title', Lang::get('services.the_best'))
@section('meta_keywords', Lang::get('services.the_best'))
@section('meta_description',  Lang::get('services.the_best'))
@section('container')

<div class="page-header-area bg-f4fbf6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-header-content">
                    <h4>
                        @lang('services.the_best')
                    </h4>
                    <ul>
                        <li><a href="/">@lang('front.home') </a></li>
                        <li>@lang('services.the_best')</li>
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
                        <h3>
                            @lang('services.the_best')
                        </h3>
                    </div>
                    <div class="service-description">
                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.the_best_title')

                            @lang('services.the_best_title1')

                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="services-details-content">
                    <div class="analysis-content">
                        <h3>
                            @lang('services.the_best')
                        </h3>
                    </div>
                    <div class="service-description">
                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.through_ofc')

                            @lang('services.through_ofc1')
                            @lang('services.bcz_we_are')
                        </p>
                    </div>
                </div>


                <div class="services-details-content">
                    <div class="analysis-content">
                        <h3>
                            @lang('services.accred_rec')
                        </h3>
                    </div>
                    <div class="service-description">
                        <p style="font-style: italic;font-size: 16px">
                            @lang('services.we_r_dstg')
                            @lang('services.we_got')
                            @lang('services.thrg_the_cmp')
                        </p>
                    </div>
                </div>

                <div class="services-details-content">
                    <div class="analysis-content">
                        <h3>
                            @lang('services.p_v_t_e')
                        </h3>
                    </div>
                    <div class="service-description">
                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.in_the_cmp')
                        </p>

                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.oil_nd_eng')
                        </p>

                        <p style="font-style: italic;font-size: 16px">
                            @lang('services.contracting')
                        </p>

                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.Transport')</p>

                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.trnd_edu')
                        </p>

                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.eng_sec')
                        </p>

                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.Security')
                        </p>

                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.agr_sctr')
                        </p>

                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.mntc_nd_opt')
                        </p>

                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.cleanliness')
                        </p>

                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.Telecommunications')
                        </p>

                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.the_real_sec')
                        </p>
                    </div>
                </div>


                <div class="services-details-content">
                    <div class="analysis-content">
                        <h3>
                           @lang('services.stp_to_rec')
                        </h3>
                    </div>
                    <div class="service-description">
                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.the_rec_lbr')
                        </p>

                        <p style="font-style: italic;font-size: 16px">

                            @lang('services.lrg_nmb')
						</p>

						<p style="font-style: italic;font-size: 16px">

                            @lang('services.the_nmb')
						</p>

						<p style="font-style: italic;font-size: 16px">

                            @lang('services.the_r_sbj')
						</p>

						<p style="font-style: italic;font-size: 16px">

                            @lang('services.the_nxt_stp')
						</p>

						<p style="font-style: italic;font-size: 16px">

                            @lang('services.then_the_lbr')
						</p>

						<p style="font-style: italic;font-size: 16px">

                            @lang('services.as_fr_the_lst')
						</p>


						<p style="font-style: italic;font-size: 16px">

                            @lang('services.tke_the_int')
						</p>
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