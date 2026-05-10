@extends('frontend.layouts.app')

@php
$lang = session()->get('locale', 'en');
$siteName = __('front.company');
@endphp

{{-- SEO --}}
@section('page_title', __('front.blog_title'))
@section('meta_keywords', __('front.blog_keywords'))
@section('meta_description', __('front.blog_meta_description'))

@section('container')
<main>

<!-- ==========================
     Premium Blog List Section
============================== -->
<section class="blog-list-wrapper py-5">
    <div class="container">

        <h1 class="blog-page-title text-center mb-5">
            {{ __('front.latest_blogs') }}
        </h1>

        @if($blogsData->count() > 0)

        <div class="row g-4">
        @foreach($blogsData as $blog)

            @php
                $blogTitle = $lang === 'ar' ? $blog->arabic_title : $blog->title;
                $blogDesc  = $lang === 'ar' ? $blog->arabic_short_desc : $blog->short_desc;
                $blogUrl   = route('urlRouting', $lang === 'ar' ? $blog->blog_arabic_url : $blog->blog_url);
                $blogImage = $blog->image ? asset($blog->image) : asset('assets/img/services/washer.jpg');

                $blogJson = json_encode([
                    "@context" => "https://schema.org",
                    "@type" => "BlogPosting",
                    "headline" => $blogTitle,
                    "description" => $blogDesc,
                    "image" => $blogImage,
                    "url" => $blogUrl,
                    "author" => [
                        "@type" => "Organization",
                        "name" => $siteName
                    ],
                    "publisher" => [
                        "@type" => "Organization",
                        "name" => $siteName,
                        "logo" => [
                            "@type" => "ImageObject",
                            "url" => asset('assets/img/logo.png')
                        ]
                    ],
                    "datePublished" => $blog->created_at->toIso8601String()
                ]);
            @endphp

            <div class="col-lg-4 col-md-6">
                <article class="premium-blog-card" itemscope itemtype="https://schema.org/BlogPosting">

                    <a href="{{ $blogUrl }}" itemprop="url">

                        <!-- Image -->
                        <div class="premium-blog-img">
                            <img src="{{ $blogImage }}" alt="{{ $blogTitle }}" itemprop="image">
                        </div>

                        <!-- Content -->
                        <div class="premium-blog-content">
                            <h2 class="premium-blog-title" itemprop="headline">
                                {{ $blogTitle }}
                            </h2>

                            <p class="premium-blog-desc" itemprop="description">
                                {{ $blogDesc }}
                            </p>

                            <span class="premium-read-btn">
                                {{ __('front.read_more') }}
                                <i class="fas fa-arrow-right arrow-icon"></i>
                            </span>
                        </div>
                    </a>

                    <!-- SEO JSON -->
                    <script type="application/ld+json">
                        {!! $blogJson !!}
                    </script>

                </article>
            </div>

        @endforeach
        </div>

        @else
            <p class="text-center">{{ __('front.no_blogs_found') }}</p>
        @endif

    </div>
</section>

</main>
@endsection


