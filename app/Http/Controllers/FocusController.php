<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class FocusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	$focus = DB::table('focus')->orderBy('id')->paginate(5);
        return view('Admin.Focus.index',[
        'focus'=>$focus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin.Focus.create');
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

        if($request->hasFile('focus')){
            $suffix = $request->file('focus')->extension();

            $name = uniqid("img_").'.'.$suffix;

            $dir = './uploads/Focus/'.date('Y-m-d');

            $request->file('focus')->move($dir,$name);

            $data['focus'] = trim($dir.'/'.$name,'.');
       		
       		

       		if (DB::table('focus')->insert($data)) {
	            return redirect('admin/focus')->with('msg','添加成功');
	        }else{
                return redirect('admin/focus')->with('msg','添加失败');
            }
        }else{
            return redirect('admin/focus')->with('msg','添加失败');
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
        $focus = DB::table('focus')->where('id',$id)->get();

        return view('Admin.Focus.show',[
        'focus'=>$focus
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
    	$focus = DB::table('focus')->where('id',$id)->get();

        return view('Admin.Focus.edit',[
        'focus'=>$focus
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

        if($request->hasFile('focus')){
            $suffix = $request->file('focus')->extension();

            $name = uniqid("img_").'.'.$suffix;

            $dir = './uploads/Focus/'.date('Y-m-d');

            $request->file('focus')->move($dir,$name);

            $data['focus'] = trim($dir.'/'.$name,'.');
            
        }

		if (DB::table('focus')->where('id',$id)->update($data)) {
			return redirect('admin/focus')->with('msg','更新成功..');
        }else{
           return redirect('admin/focus')->with('msg','您没有更新哦=￣ω￣=');
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
        if(DB::table('focus')->where('id', $id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }
}
