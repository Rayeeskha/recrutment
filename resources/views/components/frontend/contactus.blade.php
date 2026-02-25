<section class="contact-section-clean py-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10">

                <div class="contact-card-clean">

                    <div class="text-center mb-4">
                        <h2 class="contact-title-clean">
                            @lang('front.contact_us')
                        </h2>
                        <p class="contact-subtitle-clean">
                           @lang('front.contact_us_desc')
                        </p>
                    </div>

                    <form class="validateForm" action="{{ route('contactus') }}" method="post">
                        @csrf

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label>@lang('front.name')</label>
                                <input type="text" name="name" class="form-control clean-input">
                                <span class="text-danger Errname"></span>
                            </div>

                            <div class="col-md-6">
                                <label>@lang('front.email')</label>
                                <input type="email" name="email" class="form-control clean-input">
                                <span class="text-danger Erremail"></span>
                            </div>

                            <div class="col-md-6">
                                <label>@lang('front.phone')</label>
                                <input type="text" name="phone" class="form-control clean-input">
                                <span class="text-danger Errphone"></span>
                            </div>

                            <div class="col-md-6">
                                <label>@lang('front.Subject')</label>
                                <input type="text" name="subject" class="form-control clean-input">
                                <span class="text-danger Errsubject"></span>
                            </div>

                            <div class="col-12">
                                <label>@lang('front.Message')</label>
                                <textarea name="message" rows="5" class="form-control clean-input"></textarea>
                                <span class="text-danger Errmessage"></span>
                            </div>

                            <div class="col-12 text-center mt-3">
                                <x-backend.preloader />
                                <button type="submit" class="btn clean-btn">
                                    @lang('front.contact_now')
                                </button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>
</section>

