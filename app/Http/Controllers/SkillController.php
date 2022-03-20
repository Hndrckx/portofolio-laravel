<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function create(){
        $create = Skill::all();
        return view('pages.adminSkills', compact('create'));
    }


    public function store(Request $request){
        $store = new Skill();
        $store->technoName = $request->technoName;
        $store->technoValue = $request->technoValue;
        $store->save();
        return redirect("/admin/all");
    }
}