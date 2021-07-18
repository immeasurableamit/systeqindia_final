<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teams;
use App\Models\Services;
use App\Models\WorkingAreas;
use App\Models\Missions;
use App\Models\SliderServices;
use App\Models\Slider;
use App\Models\About;
use App\Http\Requests\FounderMessageRequest;
use App\Models\FounderMessage;
use App\Models\Settings;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\PremiumClints;
use App\Models\Testimonial;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::oldest('order')->get();
        $teams = Teams::oldest('order')->get();

        $services = Services::oldest('order')->get();

        $industries = WorkingAreas::oldest('order')->get();

        $mission = Missions::get();

        $sliderServices = SliderServices::oldest('order')->get();

        $about = About::first();

        $founder_message = FounderMessage::first();

        $setting = Settings::first();

        $blogs = Blog::latest()->get();

        $testimonials = Testimonial::latest()->get();

        $premium_clints = PremiumClints::latest()->get();

        $gallery = Gallery::latest()->get();


        return view('welcome', compact(
            'sliders',
            'teams',
            'services',
            'industries',
            'mission',
            'sliderServices',
            'about',
            'founder_message',
            'setting',
            'blogs',
            'premium_clints',
            'testimonials',
            'gallery'
        ));
    }

    public function getBlog()
    {
        $blogs = Blog::latest()->get();
        return view('blog.blog', compact('blogs'));
    }

    public function blogDescription($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('blog.blog-description', compact('blog'));
    }

    public function getTeam()
    {
        $teams = Teams::latest()->get();
        return view('team', compact('teams'));
    }

    public function about()
    {
        $about = About::first();
        return view('about', compact('about'));
    }

    public function services()
    {
        $services = Services::latest()->get();
        return view('services', compact('services'));
    }

    public function contact()
    {
        $setting = Settings::first();
        return view('contact', compact('setting'));
    }

    public function pages($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('page', compact('page'));
    }

    public function faq()
    {
        $faqs = Faq::get();
        return view('faq', compact('faqs'));
    }

    public function gallery()
    {
        $gallery = Gallery::get();
        return view('gallery', compact('gallery'));
    }
}
