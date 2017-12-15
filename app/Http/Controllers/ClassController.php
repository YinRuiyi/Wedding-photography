<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class = DB::table('class')->orderBy('num')->Paginate(15);
         return view('Admin.class.index',[
            'class' => $class
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');   
// dd($request->all());
        $num = (int)$data['num'];
        $name = $data['classname'];

        $classnum = DB::table('class')->where('num',$num)->first();
        $classname = DB::table('class')->where('classname',$name)->first();
  // dd($classname);
        if(!$classnum && !$classname){
            if (DB::table('class')->insert($data)) {
                return redirect('/admin/class')->with('msg','添加成功');
            }else{
                 return redirect('/admin/class/create')->with('msg','添加失败');
            }
           
        }else if($classnum){
            return redirect('/admin/class/create')->with('msg','分类序号重复');
        }else{
            return redirect('/admin/class/create')->with('msg','分类名称重复');
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
        return abort(404);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class = DB::table('class')->where('id',$id)->get();
        return view('Admin.class.edit',['class'=>$class]);
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
        dd($request->all());
        $data = $request->except('_method','_token');
        if (DB::table('class')->where('id',$id)->update($data)) {
            return redirect('admin/class')->with('msg','修改成功');
        }else{
            return redirect('admin/class')->with('msg','修改失败');
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
        if (DB::table('class')->where('id',$id)->delete()) {
            return redirect('admin/class')->with('msg','删除成功');
        }else{
            return redirect('admin/class')->with('msg','删除失败');
        }
    }
}
