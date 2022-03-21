<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit ($id){
        $editTwo = Contact::find($id);
        return view('pages.adminContact', compact('editTwo'));
    }

    public function update($id, Request $request){
        $updateTwo = Contact::find($id);
        $updateTwo->contactLocation = $request->contactLocation;
        $updateTwo->contactEmail = $request->contactEmail;
        $updateTwo->contactPhone = $request->contactPhone;
        $updateTwo->save();
        return redirect ('/admin/all');
    }
}
