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
轮播图片列表
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
				<a href="/admin/focus">轮播图</a>
			</li>
		</ul><!-- /.breadcrumb -->
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

														<th class="col-md-1 col-md-offset-4 text-center">
															名称
														</th>
														<th class="col-md-2 text-center">图片</th>
														
														<th class="col-md-1 text-center">
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															状态</th>
														<th class="col-md-3 text-center">操作</th>
													</tr>
												</thead>

												<tbody>
													
														@foreach($focus as $k => $v)
														<tr>
															<td class="center" style="line-height: 300px;">
																{{$v->id}}
															</td>
															<td class="center col-md-2" style="line-height: 300px;">
																{{$v->fname}}
															</td>
															<td>
																<img style="max-width: 690px; max-height: 300px;" src="{{$v->focus}}" alt="图片丢失" style="width: 100px; height: 100px;">
															</td>
															
															<td  style="line-height: 300px; text-align: center;" class="hidden-480">
																@if($v->status != 1) 
																	<span class="label label-sm label-warning">未使用</span>
																@else
																	<span class="label label-success arrowed">已使用</span>
																@endif
															</td>
															<td  style="line-height: 300px; text-align: center;">
																<div class="hidden-sm hidden-xs btn-group">
																	<form class="pull-left" method="get" action="/admin/focus/{{$v->id}}">
																		{{csrf_field()}}	
																		<button class="btn btn-xs btn-success" title="">
																			<i class="ace-icon fa fa-search-plus bigger-120"></i>
																		</button>
																	</form>

																	<form class="pull-left" method="get" action="/admin/focus/{{$v->id}}/edit">
																		
																		{{csrf_field()}}
																		<button class="btn btn-xs btn-info">
																			<i class="ace-icon fa fa-pencil bigger-120"></i>
																		</button>
																	</form>

																	<form action="/admin/focus/{{$v->id}}" method="post" class="pull-left del">
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
												{{ $focus->links() }}
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