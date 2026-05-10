@php
  $lang = session()->get('locale', 'en');
  $dir = $lang === 'ar' ? 'rtl' : 'ltr';
  $siteName = __('front.title');
  $logoUrl = asset('assets/img/logo.png');
@endphp

@if($blogs->isNotEmpty())
<section class="container my-5" aria-label="{{ __('front.latest_blogs') }}">

    <h2 class="section-heading text-center mb-4">
        {{ __('front.latest_blogs') }}
    </h2>

    <!-- Swiper Slider Container -->
    <div class="swiper blogSwiper" dir="{{ $dir }}">
        <div class="swiper-wrapper">

            @foreach($blogs as $blog)
                @php
                    $blogTitle = $lang === 'ar' && !empty($blog->arabic_title) ? $blog->arabic_title : $blog->title;
                    $blogDesc = $lang === 'ar' && !empty($blog->arabic_short_desc) ? $blog->arabic_short_desc : $blog->short_desc;
                    $blogUrl  = route('urlRouting', $lang === 'ar' ? $blog->blog_arabic_url : $blog->blog_url);
                    $blogImage = asset($blog->image ?? 'assets/img/default-blog.png');

                    $blogSchema = [
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
                                "url" => $logoUrl
                            ]
                        ]
                    ];
                @endphp

                <div class="swiper-slide">
                    <article class="blog-card">
                        <a href="{{ $blogUrl }}">
                            <div class="blog-card-image">
                                <img src="{{ $blogImage }}" alt="{{ $blogTitle }}">
                            </div>

                            <div class="blog-card-content">
                                <h3>{{ $blogTitle }}</h3>
                                <p>{{ $blogDesc }}</p>
                                <span class="read-btn">{{ __('front.read_more') }} →</span>
                            </div>
                        </a>

                        <!-- SEO Schema -->
                        <script type="application/ld+json">
                            {!! json_encode($blogSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
                        </script>
                    </article>
                </div>
            @endforeach
        </div>

        <!-- Slider Controls -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination mt-4"></div>
    </div>
</section>
@endif
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".blogSwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        breakpoints: {
            320: { slidesPerView: 1 },
            576: { slidesPerView: 1.25 },
            768: { slidesPerView: 2 },
            992: { slidesPerView: 3 },
        }
    });
</script>


