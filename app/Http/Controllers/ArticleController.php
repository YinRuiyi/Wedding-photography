<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $num=$request->input('num',10);
        $keywords=$request->input('keywords','');

        //关键字检索
        if($request->has('keywords')){
            $article=DB::table('article1')->where('title','like','%'.$keywords.'%')->paginate($num);
        }else{
            //列表显示
            $article=DB::table('article1')->paginate($num);
        }

        //解析模板
        return view('Admin.article.index', [
            'article'=>$article,
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
        return view('Admin.article.create');
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
        $data=$request->only(['title','author','content']);

        //文件上传
        if($request->hasFile('pic')){
            //获取文件后缀
            $suffix=$request->file('pic')->extension();

            //创建随机名称
            $name=uniqid('img_').'.'.$suffix;
            //文件夹路径
            $dir='./img/'.date('Y-m-d');

            //移动文件
            $request->file('pic')->move($dir,$name);
            // dd($request->file('pic')->move($dir,$name));die;

            // 获取文件的路径
            $data['pic']=trim($dir.'/'.$name,'.');
        }
        
        //将数据插入到数据库中
        if(DB::table('article1')->insert($data)){
            return redirect('/admin/article');
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
        $article=DB::table('article1')->where('id',$id)->first();

        return view('Admin.article.edit',['article'=>$article]);
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
        //获取数据
        $data=$request->only(['title','author','content']);

        //图片文件上传
        if($request->hasFile('pic')){
            //获取文件后缀名
            $suffix=$request->file('pic')->extension();

            //创建一个新的随机名称
            $name=uniqid('img_').'.'.$suffix;

            //文件夹路径
            $dir='./uploads/'.date('Y-m-d');

            //移动文件
            $request->file('pic')->move($dir,$name);

            //获取文件路径
            $data['pic']=trim($dir.'/'.$name,'.');
        }

        //更新
        if(DB::table('article1')->where('id',$id)->update($data)){
            return redirect('/admin/article');
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
        //执行删除
        if(DB::table('article1')->where('id',$id)->delete()){
            return back();
        }else{
            return back();
        }
    }
}


//good good stady
//day day up
