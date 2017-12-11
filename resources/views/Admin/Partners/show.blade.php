@extends('Admin.index')
@section('title')
	@foreach($partners as $k=>$v)
		{{$v->company}} 的资料
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
				<a href="">@foreach($partners as $k=>$v) {{$v->company}} 的资料 @endforeach</a>
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
							<h3 class="lighter block blue">{{$v->company}} 的资料</h3>
							<div style="width: 1251px ; height: 624px; margin-top: 50px;">
								<img src="{{$v->logo}}" alt="图片丢失">
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