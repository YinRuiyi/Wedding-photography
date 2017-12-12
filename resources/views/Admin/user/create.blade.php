@extends('Admin.index')

@section('title')
用户添加
@endsection

@section('text')
用户添加
@endsection

@section('img1')
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/lang/zh-cn/zh-cn.js"></script>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="/admin/user" method="post" enctype="multipart/form-data" class="text-left">
                            <div class="form-group">
                                <label>用户名</label>
                                <input class="form-control" name="username">
                            </div>

                            <div class="form-group">
                                <label>密码</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="form-group">
                                <label>确认密码</label>
                                <input type="password" class="form-control" name="repassword">
                            </div>

                            <div class="form-group">
                                <label>邮箱</label>
                                <input class="form-control" name="email">
                            </div>

                            <div class="form-group">
                                <label>头像</label>
                                <input type="file" class="form-control" name="profile">
                            </div>
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-white btn-info btn-bold menu-icon fa  fa-folder-open-o"> 添加</button>
                            <button type="reset" class="btn btn-white btn-default btn-round menu-icon fa  fa-folder-o"> 重置</button>
                        </form>
                    </div>
                    
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection

































