<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profile;

class ProfilesController extends Controller
{
    //
    public function index(){
        
        $profile = Profile::all();
        return view('profile',compact('profile'));

    }

   
}
