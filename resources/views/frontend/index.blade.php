@extends('frontend.layouts.app')
@section('page_title','مكتب استقدام الهند - أفضل الخيارات في مومباي ونيودلهي')
@section('meta_keywords','نقدم أفضل خدمات استقدام العمالة الهندية من مومباي ونيودلهي. عمالة ماهرة وخادمة منزلية. اتصل بنا الآن!     ')
@section('meta_description', 'نقدم أفضل خدمات استقدام العمالة الهندية من مومباي ونيودلهي. عمالة ماهرة وخادمة منزلية. اتصل بنا الآن!     ')
@section('container')

<!-- Banner -->
<x-frontend.slider />

@if(session()->get('locale') == 'ar')
<div class="container mt-10 mb-10" dir="rtl">
<h1>مكتب استقدام الهند</h1>
  <h2>أفضل مكتب استقدام في مومباي ونيودلهي</h2>
  <p>نحن متخصصون في <strong>استقدام العمالة الهندية</strong> من مدن مثل <strong>مومباي</strong> و<strong>نيودلهي</strong>. لدينا فريق عمل متمرس يضمن لك الحصول على أفضل الخدمات.</p>
</div>
@endif
<!-- Partner -->
{{--<x-frontend.partner /> --}}

<!-- About us -->
<x-frontend.aboutus />

<!-- Services -->
{{-- <x-frontend.services />--}}

<!-- Our Vision -->
<x-frontend.ourvision />

<!-- Our Basic Value -->
<x-frontend.basicvalue />

<!-- Why choose -->
<x-frontend.whychooseus />

<!-- Work step -->
<x-frontend.worksstep />

<!-- Employee souce -->
<x-frontend.employementsource />

{{-- <!-- Start video -->
<x-frontend.startvideo /> --}}

<!-- Reviews -->
{{--<x-frontend.review /> --}}

<!-- Team member -->
{{--<x-frontend.teammember /> --}}

{{-- <!-- Blog -->
<x-frontend.blog />

<!-- News Letter -->
<x-frontend.newsletter /> --}}

@endsection