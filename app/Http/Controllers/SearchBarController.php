<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchBarController extends Controller
{
    public function index(){

        return view('search');

    }
    public function search(Request $request)
    {

        if($request->ajax()) {

            $output="";

            $users=DB::table('user')->where('vorname','LIKE','%'.$request->search."%")->get();

            if($users) {
                foreach ($users as $key => $user) {

                    $output.='<tr>'.

                        '<td>'.$user->name.'</td>'.

                        '</tr>';

                }
                return Response($output);
            }
            //Return Response($users);
        }
    }
}
