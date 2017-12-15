<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ChildClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $child = DB::table('class_child')->orderBy('classid')->orderBy('childnum')->Paginate(30);
        $class = DB::table('class')->get();
        // $classid = DB::table('class_child')->value('classid');

       
        // dd($class);
        return view('Admin.class.ChildIndex',[
            'child'=>$child,
            'class'=>$class,
        ]);
    }

    /**
     * Show the form for creating a new re source.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $class = DB::table('class')->orderBy('num')->get();
      
        return view('Admin.class.ChildCreate',[
            "class" => $class,
        ]);
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

        $data['childnum'] = (int)$data['childnum'];
        $name = $data['childname'];
        $classid = (int)$data['classid'];

        $childnum = DB::table('class_child')->where('childnum',$data['childnum'])->where('classid',$data['classid'])->first();
        $childname = DB::table('class_child')->where('childname',$name)->where('classid',$data['classid'])->first();

        if(!$childnum && !$childname){
            if (DB::table('class_child')->insert($data)) {
                return redirect('/admin/childclass')->with('msg','添加成功');
            }else{
                 return redirect('/admin/childclass/create')->with('msg','添加失败');
            }
           
        }else if($childnum){
            return redirect('/admin/childclass/create')->with('msg','分类序号重复');
        }else{
            return redirect('/admin/childclass/create')->with('msg','分类名称重复');
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
        $child = DB::table('class_child')->where('id',$id)->get();
        $classid = DB::table('class_child')->where('id',$id)->value('classid');
        $class = DB::table('class')->where('id',$classid)->get();
        // dd($class);
        return view('Admin.class.ChildEdit',[
            'child'=>$child,
            'class'=>$class,

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
        $data = $request->except('_method','_token');
        dd($data);

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       if (DB::table('class_child')->where('id',$id)->delete()) {
            return redirect('admin/childclass')->with('msg','删除成功');
        }else{
            return redirect('admin/childclass')->with('msg','删除失败');
        }
    }
}
