<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function create(){
        $createTwo = Portofolio::all();
        return view('pages.adminPorto', compact('createTwo'));
    }

    public function store(Request $request){
        $storeTwo = new Portofolio();
        $storeTwo->imgLink = $request->imgLink;
        $storeTwo->save();
        return redirect("/admin/all");
    }

    public function destroy($id){
        $deleteTwo = Portofolio::find($id);
        $deleteTwo->delete();
        return redirect('/admin/all');
    }
}
