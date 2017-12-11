<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class BackstageController extends Controller
{
    public function seriesImg($id) 
    {
    	$series_img = DB::table('series_img')->where('series_id',$id)->get();
    	$series = DB::table('series')->where('id',$id)->get();

    	return view('Admin.series.seriesImg',[
    		'series_img'=> $series_img,
    		'series'=> $series
    	]);
    }
    public function seriesUpImg(Request $request, $id) 
    {
    	
    	$img = $request->except(['_method','_token']);

    	$series = DB::table('series')->where('id',$id)->value('series');
    
        if($request->hasFile('series_img')){
        	$series_img = [];
        	foreach ($request->file('series_img') as $k => $v) {
        		$tmp = [];

        		$suffix = $v->extension();

	            $name = uniqid("img_").'.'.$suffix;

	            $dir = './uploads/series/'.date('Y-m-d');

	            $v->move($dir,$name);

	          	$tmp['series_id'] = $id;
	          	$tmp['series_name'] = $series;
	          	$tmp['img'] = trim($dir.'/'.$name,'.');

	          	$series_img[]=$tmp;
        	}
         
            // dd($series_img);
            if (DB::table('series_img')->insert($series_img)) {
                return redirect('admin/series')->with('msg','添加成功');
            }else{
                return redirect('admin/series')->with('msg','添加失败');
            }
        }else{
            return redirect('admin/series');
        }
    	
    }
    public function deleteImg($id) 
    {
    	if(DB::table('series_img')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }
}
