<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() 
    {

    	
    	$focus = DB::table('focus')->where('status',1)->get();

        $series = DB::table('series')->orderBy('num')->get();
        
    	$series_img = DB::table('series_img')->where('status',1)->orderBy('id')->get();

    	$team = DB::table('team')->where('status','>',"0")->orderBy('status')->get();

    	$news = DB::table('news')->where('status',1)->get();

    	$partners = DB::table('partners')->get();
        
    	return view('Index.index',[
    		'focus'=>$focus,
    		'series'=>$series,
    		'team'=>$team,
    		'news'=>$news,
    		'partners'=>$partners,
    	]);
    }
    
    public function fuwu()
    {
        $article1=DB::table('article1')->get();
        $image1=DB::table('image1')->get();

        return view('index.fw_p',[
            'article1'=>$article1,
            'image1'=>$image1,
        ]);
    }
}
