@extends('Admin.index')@section('title')
	@foreach($team as $k=>$v)
		{{$v->membername}}的详情信息
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
				<a href="">@foreach($team as $k=>$v) {{$v->membername}}的详情信息 @endforeach</a>
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
							<h3 class="lighter block blue">{{$v->membername}} 的详情信息</h3>
							<ul class="list-unstyled spaced2">
								<li>
									<i class="ace-icon fa fa-circle green"></i>
									名称&nbsp;:&nbsp;&nbsp;{{$v->membername}}
								</li>
								<li>
									<i class="ace-icon fa fa-circle green"></i>
									理念&nbsp;:&nbsp;&nbsp;{{$v->concept}}
								</li>
								<li>
									<i class="ace-icon fa fa-circle green"></i>
									简介&nbsp;:&nbsp;&nbsp;{{$v->profile}}
								</li>
								
							</ul>


							<div style="max-width: 1251px ; max-height: 624px; border:1px solid #ededed; margin-top: 50px;">
								<img style="max-width: inherit; max-height: inherit;" src="{{$v->photo}}" alt="图片丢失">
							</div>

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