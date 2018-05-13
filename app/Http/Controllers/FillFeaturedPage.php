<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FillFeaturedPage extends Controller
{
    public function returnFilledPage()
    {

        /*$user1 = DB::table('users')->where('id', '1')->value('lastname');
        $user2 = DB::table('users')->where('id', '2')->value('lastname');
        $user3 = DB::table('users')->where('id', '3')->value('lastname');
        $user4 = DB::table('users')->where('id', '4')->value('lastname');
        $user5 = DB::table('users')->where('id', '5')->value('lastname');
        $user6 = DB::table('users')->where('id', '6')->value('lastname');*/

        For($i=1;$i<=9;$i++) {
            ${'user' . $i}=DB::table('users')->where('id', $i)->value('lastname');
        }

        $data['users'] = [$user1, $user2, $user3, $user4, $user5, $user6, $user7, $user8, $user9];
        //return view('test', ['user1' => $user1],['user2'=> $user2],['user3'=> $user3],['user4'=> $user4],['user5'=> $user5],['user6'=> $user6]);
        //return view('test')->with('user1',$user1,'user2',$user2);
        return view('featured', $data);

        /* For Schleife und Array das übergeben werden sollte
        for ($x = 1; $x <= 6; $x++) {
            $user= DB::table('users')->where('id', $x)->value('lastname');


            error_log("variable x ist: ".$x);
            $data = array(
                'user1' => 'user1',
                'user2' => 'user2',
                'user3' => 'user3',
                'user4' => 'user4',
                'user5' => 'user5',
                'user6' => 'user6'
            );
            //return view('test', ["user".$x => $user]);
        }
        //return view('test')->with('data',$data);
        */
    }
}