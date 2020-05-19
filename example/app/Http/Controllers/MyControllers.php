<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyControllers extends Controller
{
    public function firstfunction($id)
    {
    	echo "Hello world in Controller<br>";
    	echo "$id";
    }
 	public function httprequest(Request $req)
    {
    	print_r($req);
    	print_r($req->input()) ;
    	echo $req->url();
    	echo $req->fullUrl();
    	echo $req->path();
    	echo $req->method();
    	
    }
    public function formcontrol(Request $req)
    {
    	echo "rohit";
    	print_r($req->input()); 
    	# code...
    }
       
}