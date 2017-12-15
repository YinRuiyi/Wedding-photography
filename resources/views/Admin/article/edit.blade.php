@extends('Admin.index')

@section('title')
文章修改
@endsection

@section('text')
文章修改
@endsection

@section('img1')
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" action="/admin/article/{!!$article->id!!}" method="post" enctype="multipart/form-data" class="text-left">
                            <div class="form-group">
                                <label>文章标题</label>
                                <input class="form-control" name="title" value="{!!$article->title!!}">
                            </div>
                            <div class="form-group">
                                <label>报价</label>
                                <input class="form-control" name="author" value="{!!$article->author!!}">
                            </div>
                            <div class="form-group">
                                <label>文章头图</label>
                                <input type="file" class="form-control" name="pic" value="{!!$article->pic!!}">
                            </div>
                            <div class="form-group">
                                <label>文章内容</label>
                                <script id="editor" name="content" type="text/plain" style="width:1024px;height:150px;">{!!$article->content!!}</script>
                            </div>

                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <button type="submit" class="btn btn-white btn-info btn-bold menu-icon fa  fa-folder-open-o"> 更新</button>
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

<script>
	var ue = UE.getEditor('editor',{
        // toolbars: [
        //     ['fullscreen', 'source', 'undo', 'redo', 'bold']
        // ]
    });

</script>
@endsection