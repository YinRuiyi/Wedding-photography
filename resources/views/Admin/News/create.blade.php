@extends('Admin.index')
@section('topjs')
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>

@endsection
@section('title')
新闻添加
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
				<a href="/admin/news">新闻</a>
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

							<form class="form-horizontal " method="post" rolm="form" action="/admin/news" enctype="multipart/form-data">
								<div class="hr hr-dotted"></div>	
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">标题:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="newsname" id="newsname" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>
								<div class="hr hr-dotted"></div>	
								<!-- <div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">图片:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="file" name="news" id="file" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div> -->
								<script id="editor" type="text/plain" name='news' style="width:1024px;height:500px;"></script>

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
	<script>
		var ue = UE.getEditor('editor');	
	</script>

@endsection