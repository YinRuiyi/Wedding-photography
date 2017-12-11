@extends('Admin.index')
@section('topjs')
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>

@endsection
@section('title')
内容添加
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
				<a href="">添加系列</a>
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

							<form class="form-horizontal " method="post" rolm="form" action="/admin/series" enctype="multipart/form-data">
								<div class="hr hr-dotted"></div>	
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="series">系列名称:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="series" id="series" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>

								<div class="space-2"></div>

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="num">序号:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="num" id="num" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>

								<div class="space-2"></div>
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="style">风格</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="style" id="style" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>

								<div class="space-2"></div>
								<!-- 
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="proh3">副标题:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="proh3" id="proh3" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div> -->

								<div class="space-2"></div>
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="introduce">简介:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<!-- <input type="text" name="fname" id="fname" class=" bg-primary col-xs-12 col-sm-4" /> -->
											<textarea name="introduce" id="introduce" cols="30" rows="5" class=" bg-primary col-xs-12 col-sm-4"></textarea>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="status">默认图:</label>
									<div class="col-xs-12 col-sm-3">	
										<input type="file" name="status" id="status" class=" bg-primary col-xs-12 col-sm-12"/>
									</div>
								</div>
									
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file">效果图(按住Ctrl点选图片可同时上传多张):</label>
									<div class="col-xs-12 col-sm-3">	
										
										<input type="file" name="series_img[]" id="file" class=" bg-primary col-xs-12 col-sm-12" multiple/>
										
									</div>
								</div>	
									
			
								<div class="hr hr-dotted"></div>
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="profile">内容（输入请谨慎，一旦确定，无法修改）:</label>
								</div>	
								<div class="">
									<script id="editor" type="text/plain" name='content' style="width:1024px;height:500px;"></script>
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
	<script>
		var ue = UE.getEditor('editor');	
	</script>

@endsection