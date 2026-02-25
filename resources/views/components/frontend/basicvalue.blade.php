<!-- ===== Core Values Section Start ===== -->
<section class="core-values-section pt-100 pb-100" aria-labelledby="core-values-heading">
    <div class="container">

        <header class="section-header text-center mb-5">
            <h2 id="core-values-heading" class="section-title">
                @lang('front.our_basic_value')
            </h2>
            <p class="section-subtitle">
                @lang('front.basic_value_desc')
            </p>
        </header>

        <div class="row justify-content-center">

            <!-- Value 1 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <article class="value-card" itemscope itemtype="https://schema.org/CreativeWork">
                    <div class="value-icon">
                        <img src="{{ asset('assets/images/persional/web/stand.png') }}"
                             alt="Professional Standards"
                             loading="lazy">
                    </div>
                    <div class="value-content">
                        <p itemprop="description">
                            @lang('front.working_creating')
                        </p>
                    </div>
                </article>
            </div>

            <!-- Value 2 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <article class="value-card" itemscope itemtype="https://schema.org/CreativeWork">
                    <div class="value-icon">
                        <img src="{{ asset('assets/images/persional/web/integ.png') }}"
                             alt="Integrity and Confidence"
                             loading="lazy">
                    </div>
                    <div class="value-content">
                        <p itemprop="description">
                            @lang('front.integrating_conf')
                        </p>
                    </div>
                </article>
            </div>

            <!-- Value 3 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <article class="value-card" itemscope itemtype="https://schema.org/CreativeWork">
                    <div class="value-icon">
                        <img src="{{ asset('assets/images/persional/web/cust.png') }}"
                             alt="Customer Passion"
                             loading="lazy">
                    </div>
                    <div class="value-content">
                        <p itemprop="description">
                            @lang('front.passion_on_ambination')
                        </p>
                    </div>
                </article>
            </div>

            <!-- Value 4 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <article class="value-card" itemscope itemtype="https://schema.org/CreativeWork">
                    <div class="value-icon">
                        <img src="{{ asset('assets/images/persional/web/ambition.png') }}"
                             alt="Innovation and Growth"
                             loading="lazy">
                    </div>
                    <div class="value-content">
                        <p itemprop="description">
                            @lang('front.challanging_curr')
                        </p>
                    </div>
                </article>
            </div>

        </div>
    </div>
</section>
<!-- ===== Core Values Section End ===== -->
