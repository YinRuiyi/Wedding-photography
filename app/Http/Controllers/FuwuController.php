<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FuwuController extends Controller
{
    //
    public function fuwu()
    {
    	$article1=DB::table('article1')->where('status',1)->get();

	    return view('fuwu.fuwu',[
	    	'article1'=>$article1,
	    ]);
    }
}
