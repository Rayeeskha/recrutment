<!DOCTYPE html>
<!-- rtl ltr-->
<html lang="en" dir="{{ session()->get('locale') =='ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Rayees khan">

    <meta name="keywords" content="@yield('meta_keywords','مكتب استقدام الهند - أفضل الخيارات في مومباي ونيودلهي')" />

    <meta name="description" content="@yield('meta_description','نقدم أفضل خدمات استقدام العمالة الهندية من مومباي ونيودلهي. عمالة ماهرة وخادمة منزلية. اتصل بنا الآن!')" />
    <title>@yield('page_title',"مكتب استقدام الهند - أفضل الخيارات في مومباي ونيودلهي")</title>
    
    <link rel="canonical" href="{{url()->current()}}"/>

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--Meanmenu Css-->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!--Owl carousel-->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!--Owl Theme-->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!--Magnific-popup-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--Flaticon-->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!--Remixicon-->
    <link rel="stylesheet" href="{{ asset('assets/css/remixicon.css') }}">
    <!--Odometer-->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <!--Aos css-->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <!--Style css-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!--Dark css-->
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
    <!--Responsive css-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <style type="text/css">
        .ptag{font-style: italic;font-size: 16px}
    </style>

</head>
<body>
<!-- Pre Loader Start -->
{{-- <div class="preloader clock text-center">
    <div class="organiaLoader">
        <div class="loaderO">
        <span>M</span>
        <span>S</span>
        <span>G</span>
        <span>T</span>
        
        </div>
    </div>
</div> --}}