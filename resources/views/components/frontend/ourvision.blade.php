<!-- ===== Vision & Mission Section Start ===== -->
<section class="vision-mission-section ptb-100" aria-labelledby="vision-mission-heading">
    <div class="container">

        <header class="text-center mb-5">
            <h2 id="vision-mission-heading" class="section-title">
                @lang('front.vision_mission')
            </h2>
        </header>

        <div class="row">

            <!-- Vision -->
            <div class="col-lg-6 mb-4">
                <article class="vm-card vision-card" itemscope itemtype="https://schema.org/CreativeWork">

                    <div class="vm-icon">
                        <img src="{{ asset('assets/images/persional/shared-vision-1.png') }}"
                             alt="Company Vision"
                             loading="lazy">
                    </div>

                    <div class="vm-content">
                        <h3 itemprop="name">@lang('front.our_vision')</h3>
                        <p itemprop="description">
                            @lang('front.vision_title')
                        </p>
                    </div>

                </article>
            </div>

            <!-- Mission -->
            <div class="col-lg-6 mb-4">
                <article class="vm-card mission-card" itemscope itemtype="https://schema.org/CreativeWork">

                    <div class="vm-icon">
                        <img src="{{ asset('assets/images/persional/message.png') }}"
                             alt="Company Mission"
                             loading="lazy">
                    </div>

                    <div class="vm-content">
                        <h3 itemprop="name">@lang('front.our_mission')</h3>
                        <p itemprop="description">
                            @lang('front.mission_title')
                        </p>
                    </div>

                </article>
            </div>

        </div>

    </div>
</section>
<!-- ===== Vision & Mission Section End ===== -->
