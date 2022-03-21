<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function create(){
        $createFour = Testimonial::all();
        return view('pages.adminTesti', compact('createFour'));
    }

    public function store(Request $request){
        $storeFour = new Testimonial();
        $storeFour->testiText = $request->testiText;
        $storeFour->testiName = $request->testiName;
        $storeFour->testiWork = $request->testiWork;
        $storeFour->testiImg = $request->testiImg;
        $storeFour->save();
        return redirect("/admin/all");
    }

    public function destroy($id){
        $deleteFour = Testimonial::find($id);
        $deleteFour->delete();
        return redirect('/admin/all');
    }
}
