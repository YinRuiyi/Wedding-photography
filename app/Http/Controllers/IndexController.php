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
    
    public function teamA() 
    {
        $teamA = DB::table('team')->where('position','北京')->orderBy('id')->paginate(10);

        return view('Index.teamA',[
            'teamA'=>$teamA
        ]);
    }

    public function teamB() 
    {
       
        $teamB = DB::table('team')->where('position','上海')->orderBy('id')->paginate(10);
        
        return view('Index.teamB',[
            'teamB'=>$teamB
        ]);
    }

    public function teamC() 
    {
        $teamC = DB::table('team')->where('position','天津')->orderBy('id')->paginate(10);

        return view('Index.teamC',[
            'teamC'=>$teamC
        ]);
    }

    public function teamShow($id) 
    {

        $id = (int)$id;
        //下一个id
        $iddown = $id+1;  
        // $idup = (string)$idup;

        //上一个id
        $idup = $id-1;
        // $iddown = (string)$iddown;
      
        $news = DB::table('news')->where('status',1)->get();

        $teamShow = DB::table('team')->where('id',$id)->first();
        
        //最大id
        $idMax = DB::table('team')->max('id');

        //最小id
        $idMin = DB::table('team')->min('id');
            
        //上一个id的名字
        $teamUp = DB::table('team')->where('id',$idup)->value('membername');

        //下一个ID的名字
        $teamDown = DB::table('team')->where('id',$iddown)->value('membername');
        
        $team = DB::table('team')->whereIn('status',[1,2,3,4,5])->orderBy('status')->get();

        return view('Index.team_show',[
            'team'=>$team,
            'teamShow'=>$teamShow,
            'teamUp'=>$teamUp,
            'teamDown'=>$teamDown,
            'idMax'=>$idMax,
            'idMin'=>$idMin,
            "news"=>$news,
            "idup"=>$idup,
            "iddown"=>$iddown,
        ]);
    }

    public function fuwu()
    {
        $article1=DB::table('article1')->where('status',1)->get();

        return view('fuwu.fuwu',[
            'article1'=>$article1,
        ]);
    }
}
