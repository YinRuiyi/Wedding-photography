@extends('Admin.index')

@section('title')
图片管理
@endsection

@section('text')
图片管理
@endsection

@section('img1')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="/admin/image" method="post" enctype="multipart/form-data" class="text-left">
                            <div class="form-group">
                                <label>图片名称</label>
                                <input class="form-control" name="iname">
                            </div>
                            <div class="form-group">
                                <label>选择图片</label>
                                <input type="file" class="form-control" name="img">
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

















