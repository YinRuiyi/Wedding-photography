<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = DB::table('team')->orderBy('id')->paginate(5);
        return view('Admin.Team.index',[
            'team'=>$team
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Team.create');
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
        if($request->has('photo')){
            $suffix = $request->file('photo')->extension();
            $name = uniqid('img_').'.'.$suffix;

            $dir = './uploads/Team'.date('Y-m-d');

            $request->file('photo')->move($dir,$name);


            $data['photo'] = trim($dir.'/'.$name,'.');

            if(DB::table('team')->insert($data)){
                return redirect('admin/team')->with('msg','添加成功');
            }else{
                return redirect('admin/team')->with('msg','您没有添加哦=.=');
            }
        }else{
            return redirect('admin/team')->with('msg','添加失败');
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
        $team = DB::table('team')->where('id',$id)->get();

        return view('Admin.Team.show',[
            'team'=>$team
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
        $team = DB::table('team')->where('id',$id)->get();
        return view('Admin.Team.edit',[
            'team'=>$team
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
        // dd($request->all());
        $data = $request->except(['_method','_token']);


        if($request->has('photo')){
            $suffix = $request->file('photo')->extension();
            $name = uniqid('img_').'.'.$suffix;

            $dir = './uploads/Team'.date('Y-m-d');

            $request->file('photo')->move($dir,$name);


            $data['photo'] = trim($dir.'/'.$name,'.');

            
        }
        
        $num = (int)$data['status'];


        $status = DB::table('team')->where('status',[$data['status']])->value('status');

         // dd($select);
        if ($num!=0 && $num!=$status) {
           
            if (count($status)) {
                return redirect('admin/team')->with('msg','这个坑有人占了哦');
            }
        }
       

        
    
       


        if(DB::table('team')->where('id',$id)->update($data)){
            return redirect('admin/team')->with('msg','添加成功');
        }else{
            return redirect('admin/team')->with('msg','您没有添加哦=.=');
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
        if(DB::table('team')->where('id',$id)->delete()){
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败');
        }
    }
}
