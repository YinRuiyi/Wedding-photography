<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $num=$request->input('num',10);
        $keywords=$request->input('keywords','');

        //关键字检索
        if($request->has('keywords')){
            $users=DB::table('users')->where('username','like','%'.$keywords.'%')->paginate($num);
        }else{
            //列表显示
            $users=DB::table('users')->paginate($num);
        }

        //解析模板
        return view('admin.user.index', [
            'users'=>$users,
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
        //添加用户
        return view('admin.user.create');
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
        $data=$request->only(['username','password','email','profile']);

        //加密密码
        $data['password']=encrypt($data['password']);

        //文件上传
        if($request->hasFile('profile')){
            //获取文件后缀
            $suffix=$request->file('profile')->extension();

            //创建随机名称
            $name=uniqid('img_').'.'.$suffix;
            //文件夹路径
            $dir='./img/'.date('Y-m-d');

            //移动文件
            $request->file('profile')->move($dir,$name);
            // dd($request->file('profile')->move($dir,$name));die;

            // 获取文件的路径
            $data['profile']=trim($dir.'/'.$name,'.');
        }

        //将数据插入到数据库中
        if(DB::table('users')->insert($data)){
            return redirect('/admin/user');
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
        //读取当前用户的信息
        $user = DB::table('users')->where('id',$id)->first();

        return view('admin.user.edit', ['user'=>$user]);
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
        $data = $request->only(['username','password','email','profile']);
        //图片上传
        //文件上传
        if($request->hasFile('profile')) {

            //获取文件的后缀名
            $suffix = $request->file('profile')->extension();

            //创建一个新的随机名称
            $name = uniqid('img_').'.'.$suffix;

            //文件夹路径
            $dir = './uploads/'.date('Y-m-d');

            //移动文件
            $request->file('profile')->move($dir, $name);

            //获取文件的路径
            $data['profile'] = trim($dir.'/'.$name,'.');
        }

        //更新
        if(DB::table('users')->where('id',$id)->update($data)) {
            return redirect('/admin/user');
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
        if(DB::table('users')->where('id', $id)->delete()) {
            return back();
        }else{
            return back();
        }
    }
}
