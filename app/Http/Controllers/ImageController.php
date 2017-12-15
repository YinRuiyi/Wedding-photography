<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 
        $num=$request->input('num',5);
        $keywords=$request->input('keywords','');

        if($request->has('keywords')){
            $image=DB::table('image1')->where('iname','like','%'.$keywords.'%')->paginate($num);
        }else{
            $image=DB::table('image1')->paginate($num);
        }

        return view('Admin.image.index',[
            'image'=>$image,
            'keywords'=>$keywords,
            'num'=>$num
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->only(['iname','img']);

        if($request->hasFile('img')){
            $suffix=$request->file('img')->extension();
            $name=uniqid('img_').'.'.$suffix;
            $dir='./img/'.date('Y-m-d');
            $request->file('img')->move($dir,$name);
            $data['img']=trim($dir.'/'.$name,'.');
        }

        // dd($request->all());
        if(DB::table('image1')->insert($data)){
            return redirect('/admin/image');
        }else{
            return back();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $image=DB::table('image1')->where('id',$id)->first();

        return view('Admin.image.edit',['image'=>$image]);
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
        //
        $data=$request->only(['iname','img']);

        if($request->hasFile('img')){
            $suffix=$request->file('img')->extension();

            $name=uniqid('img_').'.'.$suffix;

            $dir='./uploads/'.date('Y-m-d');

            $request->file('img')->move($dir,$name);

            $data['img']=trim($dir.'/'.$name,'.');
        }

        if(DB::table('image1')->where('id',$id)->update($data)){
            return redirect('/admin/image');
        }else{
            return back();
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
        //
        if(DB::table('image1')->where('id',$id)->delete()){
            return back();
        }else{
            return back();
        }
    }
}
