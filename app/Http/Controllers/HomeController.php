<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }

    //For User Type Specific Sites
    //if page is only for admins, correct middleware is used to authorize access
    public function admin(Request $req)
    {
        return view('middleware')->withMessage("Admin");
    }
    public function super_admin(Request $req)
    {
        return view('middleware')->withMessage("Moderator");
}
    public function member(Request $req)
    {
        return view('middleware')->withMessage("Member");
    }
}
