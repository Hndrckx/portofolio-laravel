<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Portofolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $about = About::first();
        $skill = Skill::all();
        $portofolio = Portofolio::all();
        $service = Service::all();
        $testimonial = Testimonial::all();
        return view('pages.allAdmin', compact('about','skill', 'portofolio', 'service'));
    }
}
