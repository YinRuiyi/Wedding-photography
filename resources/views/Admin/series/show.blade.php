@extends('Admin.index')
@section('title')
	@foreach($series as $k=>$v)
		{{$v->series}}的详情信息
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
				<a href="">@foreach($series as $k=>$v) {{$v->series}}的详情信息 @endforeach</a>
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
							<h3 class="lighter block blue">{{$v->series}} 的详情信息</h3>
							<ul class="list-unstyled spaced2 list">
								<li>
									<i class="ace-icon fa fa-circle green"></i>
									名称&nbsp;:&nbsp;&nbsp;{{$v->series}}
								</li>
								<li>
									<i class="ace-icon fa fa-circle green"></i>
									风格&nbsp;:&nbsp;&nbsp;{{$v->style}}
								</li>
								<li>
									<i class="ace-icon fa fa-circle green"></i>
									介绍&nbsp;:&nbsp;&nbsp;{{$v->introduce}}
								</li>
								<li>
									<i class="ace-icon fa fa-circle green"></i>
									内容&nbsp;:&nbsp;&nbsp;{!!$v->content!!}
								</li>
								
							</ul>


							

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