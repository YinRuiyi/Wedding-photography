@extends('Admin.index')@section('title')
成员添加
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
				<a href="">成员添加</a>
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
							<h3 class="lighter block blue">以下信息均为必填</h3>

							<form class="form-horizontal " method="post" rolm="form" action="/admin/team" enctype="multipart/form-data">
								<div class="hr hr-dotted"></div>	
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="membername">成员名称:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="membername" id="membername" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>
								<div class="space-2"></div>

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="position">所&nbsp;&nbsp;在&nbsp;&nbsp;地:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="position" id="position" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>
								<div class="space-2"></div>

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="region">职&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;位:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="region" id="region" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>
								<div class="space-2"></div>

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="concept">成员理念:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="concept" id="concept" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>

								<div class="space-2"></div>
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="profile">成员简介:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="profile" id="profile" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>

								<div class="hr hr-dotted"></div>	
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="photo">图片:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="file" name="photo" id="photo" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>
								<!-- <div style="border: 1px solid #333; width: 690px; height: 300px;" class="col-md-offset-1">
									<img src="" alt="该功能还未实现,敬请期待..">
								</div> -->
								<div class="space-2"></div>
								{{csrf_field()}}
								<div class="col-md-3 col-md-offset-3">
									
									<button type="submit" class="btn btn-white btn-info btn-bold">
										<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
										保存
									</button>
									
									<button type="reset" class="btn btn-white btn-pink btn-round">
										<i class="ace-icon fa fa-pencil red2"></i>
										重置
									</button>
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