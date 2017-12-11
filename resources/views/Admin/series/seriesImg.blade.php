@extends('Admin.index')
@section('title')
	@foreach($series as $k=>$v)
		{{$v->series}}的图片信息
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
				<a href="">@foreach($series as $k=>$v) {{$v->series}}的图片信息 @endforeach</a>
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
							
							@foreach($series as $k=>$v)

							<h3 class="lighter block blue">以下为已保存的 {{$v->series}} 的图片(点击图片替换/删除)</h3>
							
							<div style="width: 700px; height: 350px;">
								<form action="/admin/series/{{$v->id}}" method="post" enctype="multipart/form-data" class="pull-left" style="height: inherit; width: inherit;">
									<img src="{{$v->status}}" alt="图片丢失" class="img" style="width: 100%;height: 100%;">
									<input type="file" name="status" id="img{{$v->id}}" style="display: none;">
									{{method_field('PUT')}}
									{{csrf_field()}}
									<button>确定更换</button>
								</form>
							</div>
							<hr>
							@endforeach
						
							<ul style="width: 1000px; height: auto;" class="list-unstyled">
								@foreach($series_img as $k => $v)
								
								
								<li class="pull-left" style="width: 250px; height: 250px; margin-bottom: 50px;">
									<form action="/series/{{$v->id}}/deimg" method="post" class="pull-left del{{$v->id}}" style="height: inherit;">
								
										{{method_field('DELETE')}}
										{{csrf_field()}}
									
										<input type="image" src="{{$v->img}}" style="width: 100%;height: 100%;">
									</form>
								</li>
								@endforeach
								
								
								
							</ul>
							<hr>
							@foreach($series as $k=>$v)
								<form method="post" action="/series/{{$v->id}}/upimg" enctype="multipart/form-data">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file">换新图(按住Ctrl点选图片可同时上传多张):</label>
									<div class="col-xs-12 col-sm-3">	
										
										<input type="file" name="series_img[]" id="file" class=" bg-primary col-xs-12 col-sm-12" multiple/>
										
									</div>
									{{method_field('PUT')}}
									{{csrf_field()}}
									<div class="col-md-3">
										<button type="submit" class="btn btn-sm text-center btn-primary">添加</button>
									</div>
								</form>
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
@foreach($series_img as $k => $v)
<script>

$('.del{{$v->id}}').submit(function(e){
    if(!confirm('您确定要删除{{$v->id}}么?')) return false;
});


</script>
@endforeach
@foreach($series as $k => $v)
<script>
$('.img').click(function(){
	$('#img{{$v->id}}').click();
	// alert("img{{$v->id}}");
})
</script>	
@endforeach
@endsection