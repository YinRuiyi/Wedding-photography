@extends('Admin.index')
@section('title')
	@foreach($partners as $k=>$v)
		{{$v->company}}的修改
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
				<a href="/admin/partners">合作伙伴</a>
			</li>
			<li>
				<a href="">
					@foreach($partners as $k=>$v)
					
					{{$v->company}}的修改
					
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
							@foreach($partners as $k => $v)
							<h3 class="lighter block blue">请修改 {{$v->company}} 的信息</h3>
							<table style="position: relative;width: 50%;" class="table table-bordered table-hover table-striped">
								<form method="post" action="/admin/partners/{{$v->id}}" enctype="multipart/form-data">
								<tr>
									<td class="col-md-4 text-center">id</td>
									<td>{{$v->id}}</td>
								</tr>
								<tr>
									<td class="col-md-4 text-center">名称</td>
									<td>
										<input type="text" value="{{$v->company}}" name="company" id="company" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								
								<tr>
									<td class="text-center">原版图片</td>
									<td>
										<label for="logo">
											<img src="{{$v->logo}}" alt="图片丢失" style="width: 100%; height: auto">
										</label>
										
										<input type="file" id="logo" name="logo">
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