<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $partners = DB::table('partners')->orderBy('id')->paginate(15);
        return view('Admin.partners.index',[
        'partners'=>$partners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin.partners.create');
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
        
        if($request->has('logo')){
            $suffix = $request->file('logo')->extension();

            $name = uniqid("img_").'.'.$suffix;

            $dir = './uploads/partners/'.date('Y-m-d');

            $request->file('logo')->move($dir,$name);

            $data['logo'] = trim($dir.'/'.$name,'.');

            if (DB::table('partners')->insert($data)) {
                return redirect('admin/partners')->with('msg','添加成功');
            }else{
                return redirect('admin/partners')->with('msg','添加失败');
            }
        }else{
            return redirect('admin/partners')->with('msg','添加失败');
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
        $partners = DB::table('partners')->where('id',$id)->get();

        return view('Admin.partners.show',[
        'partners'=>$partners
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
        $partners = DB::table('partners')->where('id',$id)->get();

        return view('Admin.partners.edit',[
        'partners'=>$partners
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

        if($request->has('logo')){
            $suffix = $request->file('logo')->extension();

            $name = uniqid("img_").'.'.$suffix;

            $dir = './uploads/partners/'.date('Y-m-d');

            $request->file('logo')->move($dir,$name);

            $data['logo'] = trim($dir.'/'.$name,'.');

            
        }

        if (DB::table('partners')->where('id',$id)->update($data)) {
            return redirect('admin/partners')->with('msg','更新成功..');
        }else{
           return redirect('admin/partners')->with('msg','您没有更新哦=￣ω￣=');
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
        if(DB::table('partners')->where('id', $id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }
}
