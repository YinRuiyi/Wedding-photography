@extends('Admin.index')
@section('title')
添加图片
@endsection
@section('content')
<div class="main-content">
	<!-- #section:basics/content.breadcrumbs -->
	<div class="breadcrumbs" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="/admin/">唯星库首页</a>
			</li>
			<li>
				<a href="/admin/focus">轮播图</a>
			</li>
			<li>
				<a href="">图片添加</a>
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
							<h3 class="lighter block blue">请输入以下信息</h3>

							<form class="form-horizontal " method="post" rolm="form" action="/admin/focus" enctype="multipart/form-data">
								<div class="hr hr-dotted"></div>	
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">名称:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="fname" id="fname" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>
								<div class="hr hr-dotted"></div>	
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">图片:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="file" name="focus" id="file" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>
								<!-- <div style="border: 1px solid #333; width: 690px; height: 300px;" class="col-md-offset-1">
									<img src="" alt="该功能还未实现,敬请期待..">
								</div> -->
								<div class="space-2"></div>
								{{csrf_field()}}
								<div class="col-md-3 col-md-offset-3">
									<button type="submit" class="btn btn-sm text-center btn-info">添加</button>
									<button type="reset" class="btn btn-sm text-center btn-info" >重置</button>
								</div>
							</form>
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