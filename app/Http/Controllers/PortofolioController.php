<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Profile;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    //
    function show(){
        $data['admin'] = Admin::all();
        $data['profile'] = Profile::all();
        return view('portofolio',$data);
    }
}
