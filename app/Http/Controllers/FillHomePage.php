<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FillHomePage extends Controller
{
    public function returnFilledPage()
    {
        //$id = 1;
        //return view('test', ['user' => FillHomePage::findOrFail($id)]);
        //return view('test', ['user' => DB::table('user')]);

        $users = DB::table('users')->where('id', '1')->value('lastname');
        return view('test', ['users' => $users]);
    }
}
