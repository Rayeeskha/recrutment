<!-- ===== About Leadership Section (SEO Optimized) ===== -->
<section class="leadership-section ptb-100" aria-labelledby="about-heading">
    <div class="container">

        <!-- Main Page Heading (Only ONE H1) -->
        <header class="text-center mb-5">
            <h1 id="about-heading" class="main-heading">
                @lang('front.leadership_team')
            </h1>

            <p class="section-subtitle">
                @lang('front.leadership_team_description')
            </p>
        </header>

        <!-- ================= DIRECTOR ================= -->
        <article class="leader-card mb-5"
                 itemscope itemtype="https://schema.org/Person">

            <div class="row align-items-center">

                <div class="col-lg-4">
                    <div class="leader-image">
                        <img src="{{ asset('assets/images/persional/manager.png') }}"
                             alt="Managing Director of MS Group Recruitment Company"
                             loading="lazy"
                             itemprop="image">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="leader-content">

                        <h2 itemprop="name">
                            @lang('front.director')
                        </h2>

                        <h3 class="leader-role" itemprop="jobTitle">
                           @lang('front.managing_director')
                        </h3>

                        <p class="leader-description" itemprop="description">
                            @lang('front.director_content')
                        </p>

                        <ul class="leader-features">
                            <li>@lang('front.permnt_mng_slt')</li>
                            <li>@lang('front.cont_sl_rmt_hiring')</li>
                            <li>@lang('front.admnnst_cst_sprt')</li>
                            <li>@lang('front.mrkt_crt_fnc_acc')</li>
                        </ul>

                    </div>
                </div>

            </div>
        </article>

        <!-- ================= MARKETING MANAGER ================= -->
        <article class="leader-card"
                 itemscope itemtype="https://schema.org/Person">

            <div class="row align-items-center">

                <div class="col-lg-4">
                    <div class="leader-image">
                        <img src="{{ asset('assets/images/persional/director.png') }}"
                             alt="Marketing Manager of MS Group Recruitment Company"
                             loading="lazy"
                             itemprop="image">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="leader-content">

                        <h2 itemprop="name">
                            @lang('front.mrkt_mng')
                        </h2>

                        <h3 class="leader-role" itemprop="jobTitle">
                            @lang('front.mrkt_mng')
                        </h3>

                        <p class="leader-description" itemprop="description">
                            @lang('front.manager_content')
                        </p>

                        <ul class="leader-features">
                            <li>@lang('front.permnt_mng_slt')</li>
                            <li>@lang('front.cont_sl_rmt_hiring')</li>
                            <li>@lang('front.admnnst_cst_sprt')</li>
                            <li>@lang('front.mrkt_crt_fnc_acc')</li>
                        </ul>

                    </div>
                </div>

            </div>
        </article>

    </div>
</section>

