<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\Blog;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
{
    public function index()
    {
        // Create a sitemap instance
        $sitemap = Sitemap::create();

        // Add static pages
        $sitemap->add(Url::create(url('/'))->setPriority(1.0)->setChangeFrequency('daily'));
        $sitemap->add(Url::create(url('/about-us'))->setPriority(0.8)->setChangeFrequency('monthly'));
        $sitemap->add(Url::create(url('/our-services'))->setPriority(0.8)->setChangeFrequency('monthly'));
        $sitemap->add(Url::create(url('/contact-us'))->setPriority(0.8)->setChangeFrequency('monthly'));
        $sitemap->add(Url::create(url('/blogs'))->setPriority(0.9)->setChangeFrequency('weekly'));

        // Add dynamic blog pages
        $blogs = Blog::where('status', 1)->get();
        foreach ($blogs as $blog) {
            $sitemap->add(
                Url::create(route('urlRouting', $blog->blog_url))
                    ->setLastModificationDate($blog->updated_at)
                    ->setPriority(0.7)
                    ->setChangeFrequency('weekly')
            );

            $sitemap->add(
                Url::create(route('urlRouting', $blog->blog_arabic_url))
                    ->setLastModificationDate($blog->updated_at)
                    ->setPriority(0.7)
                    ->setChangeFrequency('weekly')
            );
        }

        // Return XML response directly
        return response($sitemap->render(), 200)
            ->header('Content-Type', 'application/xml');
    }
}
