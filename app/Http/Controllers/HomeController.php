<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype=="9304"){
          return view('admin.home');
        }
        else{
            return view('frontend.index');
        }
    }


    public function index(){
        return view('frontend.index');
    }




}
