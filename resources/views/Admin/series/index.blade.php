@extends('Admin.index')
@section('topjs')
<style type="text/css">
	.CSSearchTbl{ border:1px #008CD4 solid;}
	.CSSearchTbl thead{}
	.CSSearchTbl thead tr{}
	.CSSearchTbl thead tr th{  text-align:left; padding-left:10px;}
	.CSSearchTbl tbody{}
	.CSSearchTbl tbody tr{}
	.CSSearchTbl tbody tr td{  padding: 10px;}
	.CSSearchTbl tbody tr td.right{ text-align: left;}
	.CSSearchTbl tbody tr td.left{ text-align: right;}
	.table-responsive{ display: none;}
</style>
@endsection
@section('title')
内容列表
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
				<a href="">内容列表</a>
			</li>
		</ul><!-- /.breadcrumb -->

		<!-- #section:basics/content.searchbox -->
		<div class="nav-search" id="nav-search">
			<form class="form-search">
				<span class="input-icon">
					<input type="text" type="{{$keywords or '请输入搜索内容...'}}" name="keywords" class="nav-search-input" id="nav-search-input" autocomplete="off" />
					<i class="ace-icon fa fa-search nav-search-icon"></i>
					{{csrf_field()}}
					<button class="btn-info btn-xs btn" style="margin-top: -5px;">搜索</button>
				</span>
			</form>
		</div><!-- /.nav-search -->

		<!-- /section:basics/content.searchbox -->
	</div>

	<div class="page-content">
		<!-- /section:settings.box -->
		<div class="page-content-area">

			<div class="row">
				<div class="col-xs-12">
					<div class="page-content">
						<!-- /section:settings.box -->
						<div class="page-content-area">
							<div class="row">

								<div class="col-xs-12">
									<!-- PAGE CONTENT BEGINS -->
									<div class="row">

										<div class="col-xs-12">
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
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="col-md-1 col-md-offset-4 text-center">
															ID
														</th>

														<th class="col-md-2 col-md-offset-4 text-center">
															系列
														</th>
														<th class="col-md-2 text-center">风格</th>

														<th class="col-md-5 text-center">简介</th>
													
														<th class="col-md-2 text-center">操作</th>
													</tr>
												</thead>

												<tbody>
													
														@foreach($series as $k => $v)
														<tr>
															<td class="center" style="">
																{{$v->id}}
															</td>
															<td class="center">
																{{$v->series}}
															</td>
															<td class="center">
																{{$v->style}}
															</td>
															<td class="center">
																{!!$v->introduce!!}
															</td>
															
															<td  style=" text-align: center;">
																<div class="hidden-sm hidden-xs btn-group">
																	<form class="pull-left" method="get" action="/admin/series/{{$v->id}}">
																		{{csrf_field()}}	
																		<button class="btn btn-xs btn-success" title="">
																			<i class="ace-icon fa fa-search-plus bigger-120"></i>
																		</button>
																	</form>

																	<form class="pull-left" method="get" action="/admin/series/{{$v->id}}/edit">
																		
																		{{csrf_field()}}
																		<button class="btn btn-xs btn-info">
																			<i class="ace-icon fa fa-pencil bigger-120"></i>
																		</button>
																	</form>

																	<form class="pull-left" method="get" action="/series/{{$v->id}}/img">
																		
																		{{csrf_field()}}
																		<button class="btn btn-xs btn-warning">
																			<i class="ace-icon fa fa-camera bigger-120"></i>
																		</button>
																	</form>
																	<form action="/admin/series/{{$v->id}}" method="post" class="pull-left del">
																		{{method_field('DELETE')}}
																		{{csrf_field()}}
																		<button class="btn btn-xs btn-danger">
																			<i class="ace-icon fa fa-trash-o bigger-120"></i>
																		</button>
																	</form>

																</div>
															</td>
														</tr>
														@endforeach
												</tbody>
												{{ $series->links() }}
											</table>
										</div><!-- /.span -->
									</div><!-- /.row -->
								</div><!-- /.col -->
							</div><!-- /.row -->
						</div><!-- /.page-content-area -->
					</div>
					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content-area -->
	</div><!-- /.page-content -->
</div><!-- /.main-content -->
@endsection
@section('js')
<script>
$('.del').submit(function(e){
    if(!confirm('您确定要删除该用户么?')) return false;
});
</script>
@endsection