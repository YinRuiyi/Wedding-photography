<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $series = DB::table('series')->orderBy('id')->paginate(15);

         return view('Admin.series.index',[
            'series'=>$series
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token','series_img','status']);

        $suffix_status = $request->file('status')->extension();

        $name_status = uniqid("img_").'.'.$suffix_status;

        $dir_status = './uploads/series/'.date('Y-m-d');

        $a = $request->file('status')->move($dir_status,$name_status);

        $data['status'] = trim($dir_status.'/'.$name_status,'.');






// dd($data);
        $id=DB::table('series')->insertGetId($data);

     

        if($request->hasFile('series_img') && $request->has('status')){
            $series_img = []; 
            foreach ($request->file('series_img') as $k => $v) {
                $tmp = [];

                $suffix = $v->extension();

                $name = uniqid("img_").'.'.$suffix;

                $dir = './uploads/series/'.date('Y-m-d');

                $v->move($dir,$name);
               
                $tmp['series_id'] = $id;
                $tmp['series_name'] = $request->series;
                $tmp['img'] = trim($dir.'/'.$name,'.');

                $series_img[]=$tmp;

            } 
           
           
       
            if (DB::table('series_img')->insert($series_img)) {
                return redirect('admin/series')->with('msg','添加成功');
            }else{
                return redirect('admin/series')->with('msg','添加失败');
            }
        }else{
            return redirect('admin/series')->with('msg','你猜有没有成功');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $series = DB::table('series')->where('id',$id)->get();
        return view('Admin.series.show',[
            'series'=>$series
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $series = DB::table('series')->where('id',$id)->get();

        return view('Admin.series.edit',[
            'series'=>$series
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data = $request->except(['_token','_method']);
        // dd($data);
        if($request->has('status')){
            $suffix = $request->file('status')->extension();
// dd($suffix);
            $name = uniqid("img_").'.'.$suffix;

            $dir = './uploads/series/'.date('Y-m-d');

            $request->file('status')->move($dir,$name);

            $data['status'] = trim($dir.'/'.$name,'.');
            
            if (DB::table('series')->where('id',$id)->update($data)) {
                return redirect('admin/series')->with('msg','添加成功');
            }else{
                return redirect('admin/series')->with('msg','添加失败');
            }
        }
        if (DB::table('series')->where('id',$id)->update($data)) {
            return redirect('admin/series')->with('msg','添加成功');
        }else{
            return redirect('admin/series')->with('msg','添加失败');
        }
        // var_dump($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(DB::table('series')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }

    public function editImg($id)
    {
        return '1';
        // $series_img = DB::table('series_img')->where('seriesid',$id)->get();
        // $series = DB::table('series')->where('id',$id)->get();

        // return view('Admin.series.seriesImg',[
        //     'series'=>$series,
        //     'series_img'=>$series_img
        // ]);
    }
}
