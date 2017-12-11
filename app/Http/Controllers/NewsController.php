<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = DB::table('news')->orderBy('id')->paginate(10);
        return view('Admin.news.index',[
        'news'=>$news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $data = $request->except(['_token']);
        
        if (DB::table('news')->insert($data)) {
            return redirect('admin/news')->with('msg','添加成功');
        }else{
            return redirect('admin/news')->with('msg','添加失败');
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
        $news = DB::table('news')->where('id',$id)->get();

        return view('Admin.news.show',[
        'news'=>$news
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
        $news = DB::table('news')->where('id',$id)->get();

        return view('Admin.news.edit',[
        'news'=>$news
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

        if($request->hasFile('news')){
            $suffix = $request->file('news')->extension();

            $name = uniqid("img_").'.'.$suffix;

            $dir = './uploads/news/'.date('Y-m-d');

            $request->file('news')->move($dir,$name);

            $data['news'] = trim($dir.'/'.$name,'.');
            
        }

        if (DB::table('news')->where('id',$id)->update($data)) {
            return redirect('admin/news')->with('msg','更新成功..');
        }else{
           return redirect('admin/news')->with('msg','您没有更新哦=￣ω￣=');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(DB::table('news')->where('id', $id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }
}
