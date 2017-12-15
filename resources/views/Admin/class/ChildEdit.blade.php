@extends('Admin.index')
@section('title')
	@foreach($child as $k=>$v)
		{{$v->childname}}的修改
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
					@foreach($child as $k=>$v)
					
					{{$v->childname}}的修改
					
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
							@foreach($child as $k => $v)
							<h3 class="lighter block blue">请修改 {{$v->childname}} 的信息</h3>
							<table id="table" style="position: relative;width: 60%;" class="table ">
								<form method="post" action="/admin/childclass/{{$v->id}}" enctype="multipart/form-data">
								<tr>
									<td style="border:none;">id</td>
									<td style="border:none;">
										<input type="text" value="{{$v->id}}" name="id" disabled="">
									</td>
								</tr>
								<tr>
									<td style="border:none;">父级</td>
									<td style="border:none;">
										<select id="classid" name="classid">
											@foreach($class as $key=>$value)
											<option value="{{$value->id}}">{{$value->classname}}</option>
											@endforeach
										</select>
										<span style="color: #999; display: inline-block; text-indent: 16px;">(不可修改)</span>
									</td>
								</tr>
								<tr>
									<td style="border:none;">名称</td>
									<td style="border:none;">
										<input type="text" value="{{$v->childname}}" name="childname" id="childname">
									</td>
								</tr>
								<tr>
									<td style="border:none;">序号</td>
									<td style="border:none;">
										<input type="text" value="{{$v->childnum}}" name="childnum" id="childnum">
									</td>
								</tr>
								<tr>
									<td style="border:none;">站内链接</td>
									<td style="border:none;">
										<input type="text" value="{{$v->childlink}}" name="childlink" id="childlink">
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