<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Portofolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $about = About::first();
        $skills = Skill::all();
        $portofolios = Portofolio::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        $contact = Contact::first();
        return view('pages.allAdmin', compact('about','skills', 'portofolios', 'services', 'testimonials', 'contact'));
    }
}
