<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class myControllers extends Controller
{
    public function printrohit($id)
    {
 
  $res=\DB::table('story')->where('id',$id)->first();
  dd($res);
  echo $res['title'];


    	
    }
}
