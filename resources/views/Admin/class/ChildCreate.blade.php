@extends('Admin.index')
@section('title')
分类添加
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
			<a href="/admin/team">分类管理</a>
			</li>
			<li>
				<a href="/admin/class/childclass">子类</a>
			</li>
			<li>
				<a href="/admin/class/childclass/create">子类添加</a>
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
							@if(session('msg'))
							<div class="alert alert-block alert-info">
								<button type="button" class="close" data-dismiss="alert">
									<i class="ace-icon fa fa-times"></i>
								</button>

								<i class="ace-icon fa fa-check green"></i>

								<strong class="green">最新通知：</strong>
								{{session('msg')}}
							</div>
							@endif
							<h3 class="lighter block blue">以下信息均为必填</h3>

							<form class="form-horizontal " method="post" rolm="form" action="/admin/childclass" enctype="multipart/form-data">
								<div class="hr hr-dotted"></div>	
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="classid">父类:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<select id="classid" name="classid">
												@foreach($class as $k=>$v)
												<option value="{{$v->id}}">{{$v->classname}}</option>
												@endforeach
											</select>
										</div>
									</div>
									
								</div>
								<div class="space-2"></div>
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="childname">子类名称:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="childname" id="childname" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>
								<div class="space-2"></div>

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="childnum">序号(数值越小,优先级越高,不支持负数):</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="childnum" id="childnum" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>
								<div class="space-2"></div>
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="childlink">站内链接:</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="childlink" id="childlink" value="class/childclass" class=" bg-primary col-xs-12 col-sm-4" />
										</div>
									</div>
								</div>

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
