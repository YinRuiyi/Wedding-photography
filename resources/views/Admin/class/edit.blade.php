@extends('Admin.index')
@section('title')
	@foreach($class as $k=>$v)
		{{$v->classname}}的修改
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
				<a href="/admin/class">分类管理</a>
			</li>
			<li>
				<a href="/admin/class/create">
					@foreach($class as $k=>$v)
					
					{{$v->classname}}的修改
					
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
							@foreach($class as $k => $v)
							<h3 class="lighter block blue">请修改 {{$v->classname}} 的信息</h3>
							<table id="table" style="position: relative;width: 60%;" class="table ">
								<form method="post" action="/admin/class/{{$v->id}}" enctype="multipart/form-data">
								<tr>
									<td style="border:none;">id</td>
									<td style="border:none;">
										<input type="text" value="{{$v->id}}" disabled="">
									</td>
								</tr>
								<tr>
									<td style="border:none;">名称</td>
									<td style="border:none;">
										<input type="text" value="{{$v->classname}}" name="classname" id="classname">
									</td>
								</tr>
								<tr>
									<td style="border:none;">序号</td>
									<td style="border:none;">
										<input type="text" value="{{$v->num}}" name="num" id="num">
									</td>
								</tr>
								<tr>
									<td style="border:none;">站内链接</td>
									<td style="border:none;">
										<input type="text" value="{{$v->link}}" name="link" id="link">
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

@endsection