<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        $createThree = Service::all();
        return view('pages.adminService', compact('createThree'));
    }

    public function store(Request $request){
        $storeThree = new Service();
        $storeThree->serviceName = $request->serviceName;
        $storeThree->serviceText = $request->serviceText;
        $storeThree->serviceIcon = $request->serviceIcon;
        $storeThree->save();
        return redirect("/admin/all");
    }

    public function destroy($id){
        $deleteThree = Service::find($id);
        $deleteThree->delete();
        return redirect('/admin/all');
    }

}
