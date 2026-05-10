@extends('frontend.layouts.app')

@php
$lang = session()->get('locale', 'en');
$companyName = __('messages.title');

// Blog Data
$blogTitle = $lang === 'ar' && !empty($blog->arabic_title) ? $blog->arabic_title : $blog->title;
$blogDesc = $lang === 'ar' && !empty($blog->arabic_short_desc) ? $blog->arabic_short_desc : $blog->short_desc;
$blogContent = $lang === 'ar' && !empty($blog->arabic_content) ? $blog->arabic_content : $blog->content;
$blogImage = !empty($blog->image) ? asset($blog->image) : asset('assets/img/default-blog.jpg');

// SEO Meta
$metaKeywords = $lang === 'ar' && !empty($blog->meta_keyword_arabic) ? $blog->meta_keyword_arabic : $blog->meta_keyword;
$metaDescription = $lang === 'ar' && !empty($blog->meta_desc_arabic) ? $blog->meta_desc_arabic : $blog->meta_desc;
$shortDesc = Str::limit(strip_tags($blogDesc), 160);
$blogUrl = url()->current();
$wordCount = str_word_count(strip_tags($blogContent));

$blogSchema = [
    "@context" => "https://schema.org",
    "@type" => "BlogPosting",
    "headline" => $blogTitle,
    "description" => $blogDesc,
    "articleSection" => $metaKeywords,
    "image" => [
        "@type" => "ImageObject",
        "url" => $blogImage
    ],
    "mainEntityOfPage" => $blogUrl,
    "url" => $blogUrl,
    "wordCount" => $wordCount,
    "author" => [
        "@type" => "Organization",
        "name" => $companyName,
        "url" => url('/')
    ],
    "publisher" => [
        "@type" => "Organization",
        "name" => $companyName,
        "logo" => [
            "@type" => "ImageObject",
            "url" => asset('assets/img/logo.png')
        ]
    ],
    "datePublished" => $blog->created_at->toIso8601String(),
    "dateModified" => $blog->updated_at->toIso8601String()
];
@endphp

@section('page_title', $blogTitle . ' | ' . $companyName)
@section('meta_keywords', $metaKeywords)
@section('meta_description', Str::limit(strip_tags($metaDescription), 155))

@section('container')

<script type="application/ld+json">
{!! json_encode($blogSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>


<!-- ================================
     PREMIUM BLOG DETAIL PAGE DESIGN
================================ -->
<section class="blog-detail-wrapper py-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-9">

                <!-- Blog Header -->
                <header class="blog-header text-center mb-4">
                    <h1 class="blog-title">{{ $blogTitle }}</h1>

                    @if(!empty($blogDesc))
                    <p class="blog-subtitle">{{ $blogDesc }}</p>
                    @endif

                    <div class="blog-meta mt-3">
                        <span><i class="far fa-calendar"></i> {{ $blog->created_at->format('M d, Y') }}</span>
                        <span class="mx-2">•</span>
                        <span><i class="far fa-clock"></i> {{ ceil($wordCount / 200) }} min read</span>
                    </div>
                </header>

                <!-- Featured Image -->
                <figure class="featured-image mb-4 text-center">
                    <img src="{{ $blogImage }}" alt="{{ $blogTitle }}" class="rounded shadow img-fluid">
                </figure>

                <!-- Blog Content -->
                <article class="blog-content">
                    {!! html_entity_decode($blogContent) !!}
                </article>

            </div>
        </div>

    </div>
</section>

@endsection


<!-- ===============================
     PREMIUM BLOG DETAIL CSS
================================= -->
<style>
.blog-detail-wrapper {
    background: #fafbfd;
}

/* Title */
.blog-title {
    font-size: 38px;
    font-weight: 800;
    color: #0c213a;
    line-height: 1.3;
}

/* Subtitle */
.blog-subtitle {
    font-size: 18px;
    color: #4a5568;
    max-width: 700px;
    margin: 10px auto;
}

/* Meta */
.blog-meta {
    font-size: 14px;
    color: #7b8794;
}

.blog-meta i {
    color: #0077ff;
}

/* Featured Image */
.featured-image img {
    border-radius: 16px;
    max-height: 500px;
    object-fit: cover;
}

/* Blog content */
.blog-content {
    font-size: 18px;
    line-height: 1.8;
    color: #2d3748;
}

.blog-content h2,
.blog-content h3 {
    color: #0c213a;
    margin-top: 30px;
    margin-bottom: 10px;
    font-weight: 700;
}

.blog-content p {
    margin-bottom: 18px;
}

/* Make images inside content clean */
.blog-content img {
    max-width: 100%;
    border-radius: 14px;
    margin: 20px 0;
}

/* Quotes */
.blog-content blockquote {
    padding: 20px;
    border-left: 5px solid #0077ff;
    background: #f5faff;
    border-radius: 8px;
    margin: 25px 0;
    font-style: italic;
    color: #03315c;
}

/* Code blocks */
.blog-content pre {
    background: #1e293b;
    color: #f8fafc;
    padding: 12px 18px;
    border-radius: 8px;
    overflow-x: auto;
    margin: 20px 0;
}

/* Links */
.blog-content a {
    color: #0077ff;
    font-weight: 600;
}

.blog-content a:hover {
    text-decoration: underline;
}

/* Mobile fix */
@media(max-width:768px){
    .blog-title { font-size: 30px; }
    .blog-subtitle { font-size: 16px; }
    .blog-content { font-size: 17px; }
}
</style>
