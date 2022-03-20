<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $about = About::first();
        $skill = Skill::all();
        return view('pages.allAdmin', compact('about','skill'));
    }
}
