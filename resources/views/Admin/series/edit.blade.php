@extends('Admin.index')
@section('topjs')
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>

@endsection
@section('title')
	@foreach($series as $k=>$v)
		{{$v->series}}的修改
	@endforeach
@endsection
@section('content')
<div class="main-content">
	<!-- #section:basics/content.breadcrumbs -->
	<div class="breadcrumbs" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="/admin">唯星库首页</a>
			</li>
			<li>
			<a href="/admin/series">series</a>
			</li>
			<li>
				<a href="">
					@foreach($series as $k=>$v)
					
					{{$v->series}}的修改
					
					@endforeach
				</a>
			</li>
		</ul><!-- /.breadcrumb -->

		<!-- #section:basics/content.searchbox -->
			

		<!-- /section:basics/content.searchbox -->
	</div>

	<div class="page-content">
		<!-- /section:settings.box -->
		<div class="page-content-area">

			<div class="row">
				<div class="col-xs-12">
					<div class="step-content pos-rel" id="step-container">
						<div class="step-pane active" id="step1">
							@foreach($series as $k => $v)
							<h3 class="lighter block blue">请修改 {{$v->series}} 的信息</h3>
							<table style="position: relative;width: 80%;" class="table table-bordered table-hover table-striped">
								<form method="post" action="/admin/series/{{$v->id}}" enctype="multipart/form-data">
								<tr>
									<td class="text-center col-md-1">id</td>
									<td>{{$v->id}}</td>
								</tr>
								<tr>
									<td class="text-center">系列</td>
									<td>
										<input type="text" value="{{$v->series}}" name="series" id="series" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								<tr>
									<td class="text-center">编号</td>
									<td>
										<input type="text" value="{{$v->num}}" name="num" id="num" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								<tr>
									<td class="text-center">风格</td>
									<td>
										<input type="text" value="{{$v->style}}" name="style" id="style" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								<tr>
									<td class="text-center">简介</td>
									<td>
										<input type="text" value="{{$v->introduce}}" name="introduce" id="introduce" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								<tr>
									<td colspan="2" class="text-center">内容(仅限于错别字修改，无法对样式进行修改，请不要对‘<>’中的内容进行修改)</td>
								</tr>
								<tr>
									<td colspan="2">
										
										<textarea name="content" id="content" cols="30" rows="10" value=''>{!!$v->content!!}</textarea>
									</td>
								</tr>

								
								<hr>
								{{method_field('PUT')}}
								{{csrf_field()}}
									&nbsp;&nbsp;
								<button type="submit" class="btn btn-white btn-info btn-bold">
									<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
									决定就这样了=.=
								</button>
									&nbsp;
								<button type="reset" class="btn btn-white btn-pink btn-round" >
									<i class="ace-icon fa fa-pencil red2"></i>
									重置
								</button>
								
								</form>
							</table>

							@endforeach
						</div>
					</div>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content-area -->
	</div><!-- /.page-content -->
</div><!-- /.main-content -->

@endsection		
@section('js')
	<script>
		var ue = UE.getEditor('editor');	
	</script>

@endsection