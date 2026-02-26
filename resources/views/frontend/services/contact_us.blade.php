@extends('frontend.layouts.app')

@section('page_title',  __('front.contact_us_title'))
@section('meta_keywords',   __('front.contact_us_meta'))
@section('meta_description',  __('front.contact_ms_desc'))

@section('container')

<!-- ===== HERO ===== -->
<section class="contact-hero">
    <div class="container text-center">
        <h1> @lang('front.contact_us_heading')</h1>
        <p> @lang('front.trusted_india')</p>
    </div>
</section>

<!-- ===== QUICK CONTACT INFO ===== -->
<section class="quick-contact-section">
    <div class="container">
        <div class="row g-4 text-center">

            <div class="col-md-4">
                <div class="quick-contact-box">
                    <div class="icon">📞</div>
                    <h4> @lang('front.call_us')</h4>
                    <a href="tel:+918299352134" class="contact-link">
                        +91 82993 52134
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="quick-contact-box">
                    <div class="icon">✉️</div>
                    <h4> @lang('front.email_us')</h4>
                    <a href="mailto:info@msgroupoftravels.com" class="contact-link">
                        info@msgroupoftravels.com
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="quick-contact-box">
                    <div class="icon">💬</div>
                    <h4> @lang('front.whatsapp')</h4>
                    <a href="https://api.whatsapp.com/send/?phone={{ CustomHelper::whatsAppNumber() }}&text={{ __('front.enquiry') }}" target="_blank" class="contact-link">
                         @lang('front.chat_on')
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ===== OFFICE LOCATIONS ===== -->
<section class="office-section">
    <div class="container">
        <div class="row g-4">

            <!-- Delhi Office -->
            <div class="col-lg-6">
                <div class="office-card">
                    <h3> @lang('front.new_delhi_office')</h3>
                    <p>
                        
                        @lang('front.new_delhi_office_location')
                    </p>

                    <div class="map-wrapper">
                        <iframe 
                            src="https://www.google.com/maps?q=New+Delhi,+India&output=embed"
                            width="100%" height="300" style="border:0;" 
                            allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Mumbai Office -->
            <div class="col-lg-6">
                <div class="office-card">
                    <h3> @lang('front.mumbai_office')</h3>
                    <p>
                          @lang('front.shop_address')
                    </p>

                    <div class="map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.084633719024!2d72.81320947110238!3d18.971869315942808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce6e410e2001%3A0x15bd65f7960aa117!2sShop%20No%2C%20WELLINGTON%20VIEW%20TARDEO%2C%201%2C%20Rto%20Road%2C%20Gokuldham%20Co-operative%20Housing%20Society%2C%20Ratan%20Tata%20Colony%2C%20Bane%20Compound%2C%20Tardeo%2C%20Mumbai%2C%20Maharashtra%20400034!5e0!3m2!1sen!2sin!4v1772131147006!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ===== CONTACT FORM ===== -->
<x-frontend.contactus />


<!-- ===== TRUST SECTION ===== -->
<!-- ===== TRUST SECTION (IMPROVED) ===== -->
<section class="trust-section-new">
    <div class="container text-center">

        <h2 class="trust-title">
             
            @lang('front.why_global_trust')
        </h2>

        <p class="trust-subtitle">
            
             @lang('front.gov_app') 
        </p>

        <div class="row mt-5 g-4">

            <div class="col-md-4">
                <div class="trust-box">
                     
                    @lang('front.gov_lice') 
                </div>
            </div>

            <div class="col-md-4">
                <div class="trust-box">
                    
                    @lang('front.mumbai_office_f') 
                </div>
            </div>

            <div class="col-md-4">
                <div class="trust-box">
                    
                    @lang('front.per') 
                </div>
            </div>

        </div>

    </div>
</section>

@endsection

<style>

/* HERO */
.contact-hero {
    background:#20c99721;
    /* color: white; */
    padding: 100px 0;
}

.contact-hero h1 {
    font-size: 42px;
    font-weight: 800;
}

.contact-hero p {
    font-size: 18px;
    /* color: #cbd5e1; */
}

/* OFFICE SECTION */
.office-section {
    padding: 80px 0;
    background: #F8FAFC;
}

.office-card {
    background: white;
    padding: 30px;
    border-radius: 16px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.06);
}

.office-card h3 {
    margin-bottom: 15px;
    font-weight: 700;
}

.map-wrapper {
    margin-top: 15px;
    border-radius: 12px;
    overflow: hidden;
}

/* FORM */
.contact-form-section {
    padding: 100px 0;
}

.form-wrapper {
    background: #F8FAFC;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 25px 60px rgba(0,0,0,0.05);
}

.form-wrapper h2 {
    font-weight: 700;
    margin-bottom: 15px;
}

.form-control {
    padding: 12px;
    border-radius: 8px;
}

.btn-primary {
    background: #16A34A;
    border: none;
    padding: 12px 30px;
}

.btn-primary:hover {
    background: #15803D;
}

/* TRUST SECTION IMPROVED */
.trust-section-new {
    background: linear-gradient(135deg, #f8fafc, #eef2f7);
    padding: 100px 0;
}

.trust-title {
    font-size: 36px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 15px;
}

.trust-subtitle {
    font-size: 18px;
    color: #475569;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.8;
}

.trust-box {
    background: #ffffff;
    padding: 25px;
    border-radius: 14px;
    font-weight: 600;
    box-shadow: 0 15px 40px rgba(0,0,0,0.05);
    transition: 0.3s;
}

.trust-box:hover {
    transform: translateY(-6px);
    box-shadow: 0 25px 60px rgba(0,0,0,0.08);
}

/* Remove heavy dark look */
.trust-section {
    display: none;
}

/* QUICK CONTACT SECTION */
.quick-contact-section {
    background: #ffffff;
    padding: 60px 0;
    border-bottom: 1px solid #e5e7eb;
}

.quick-contact-box {
    background: #f8fafc;
    padding: 30px;
    border-radius: 16px;
    transition: 0.3s;
    box-shadow: 0 15px 40px rgba(0,0,0,0.05);
}

.quick-contact-box:hover {
    transform: translateY(-6px);
    box-shadow: 0 25px 60px rgba(0,0,0,0.08);
}

.quick-contact-box .icon {
    font-size: 28px;
    margin-bottom: 12px;
}

.quick-contact-box h4 {
    font-weight: 700;
    margin-bottom: 10px;
}

.contact-link {
    font-size: 16px;
    color: #15803D;
    font-weight: 600;
    text-decoration: none;
}

.contact-link:hover {
    text-decoration: underline;
}

</style>