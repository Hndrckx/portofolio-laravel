<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit ($id){
        $edit = About::find($id);
        return view ('pages.adminAbout', compact('edit'));
    }

    public function update($id, Request $request){
        $update = About::find($id);
        $update->title = $request->title;
        $update->introduction = $request->introduction;
        $update->birthday = $request->birthday;
        $update->website = $request->website;
        $update->phone = $request->phone;
        $update->city = $request->city;
        $update->age = $request->age;
        $update->degree = $request->degree;
        $update->email = $request->email;
        $update->freelance = $request->freelance;
        $update->conclusion = $request->conclusion;
        $update->save();
        return redirect ('/');
    }
}

