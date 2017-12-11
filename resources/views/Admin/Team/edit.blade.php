@extends('Admin.index')@section('title')
	@foreach($team as $k=>$v)
		{{$v->membername}}的修改
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
			<a href="/admin/team">TEAM</a>
			</li>
			<li>
				<a href="">
					@foreach($team as $k=>$v)
					
					{{$v->membername}}的修改
					
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
							@foreach($team as $k => $v)
							<h3 class="lighter block blue">请修改 {{$v->membername}} 的信息</h3>
							<table style="position: relative;width: 80%;" class="table table-bordered table-hover table-striped">
								<form method="post" action="/admin/team/{{$v->id}}" enctype="multipart/form-data">
								<tr>
									<td class="text-center col-md-1">id</td>
									<td>{{$v->id}}</td>
								</tr>
								<tr>
									<td class="text-center">名称</td>
									<td>
										<input type="text" value="{{$v->membername}}" name="membername" id="membername" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								<tr>
									<td class="text-center">理念</td>
									<td>
										<input type="text" value="{{$v->concept}}" name="concept" id="concept" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								<tr>
									<td class="text-center">简介</td>
									<td>
										<input type="text" value="{{$v->profile}}" name="profile" id="profile" style="border: none; width: 100%; height: 100%; background-color: transparent;">
									</td>
								</tr>
								
								<tr>
									<td class="text-center">优先级</td>
									<td>
										@for($i=0;$i<13;$i++)
										@if($i != 0)
										<input type="radio" style="padding-top: 15px;" <?php if ($v->status==$i): ?> checked='true' <?php endif ?> value="{{$i}}" name="status">
										
										<span class="label label-success arrowed">{{$i}}</span>
										@else
										<input type="radio" style="padding-top: 15px;" <?php if ($v->status==$i): ?> checked='true' <?php endif ?> value="{{$i}}" name="status">
										<span class="label label-sm label-warning">禁用</span>
										@endif
										@endfor
								
										
										
										
										
									</td>
								</tr>
								<tr>
									<td class="text-center">原版图片</td>
									<td>
										<label for="photo">
											<img src="{{$v->photo}}" alt="图片丢失" style="width: 100%; height: auto">
										</label>
										<input type="file" id="photo" name="photo">
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

@endsection