<!-- ===== Recruitment Sources Section Start ===== -->
<section class="recruitment-source-section pt-100 pb-100" aria-labelledby="recruitment-source-heading">
    <div class="container">

        <header class="text-center mb-5">
            <h2 id="recruitment-source-heading" class="section-title">
                @lang('front.recruitment_source')
            </h2>
            <p class="section-subtitle">
                @lang('front.we_utilize')
            </p>
        </header>

        <div class="row">

            <!-- Internal Source -->
            <div class="col-lg-6 mb-4">
                <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.intrl_empl_src'))) }}" class="source-card" aria-label="Internal Recruitment Source">
                    <div class="source-image">
                        <img src="{{ asset('assets/images/persional/web/intern.jpg') }}"
                             alt="Internal Recruitment Source"
                             loading="lazy">
                        <div class="overlay"></div>
                        <div class="source-content">
                            <h3>@lang('front.intrl_src')</h3>
                        </div>
                    </div>
                </a>
            </div>

            <!-- External Source -->
            <div class="col-lg-6 mb-4">
                <a href="{{ route('urlRouting', CustomHelper::seoUrl(Lang::get('front.extrnl_empl_src'))) }}" class="source-card" aria-label="External Recruitment Source">
                    <div class="source-image">
                        <img src="{{ asset('assets/images/persional/web/extern.jpg') }}"
                             alt="External Recruitment Source"
                             loading="lazy">
                        <div class="overlay"></div>
                        <div class="source-content">
                            <h3>@lang('front.extrnl_source')</h3>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
<!-- ===== Recruitment Sources Section End ===== -->
