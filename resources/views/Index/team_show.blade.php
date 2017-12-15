@extends('layouts.header')
@section('title')
服务团队
@stop
@section('csjs')
<link rel="stylesheet" type="text/css" href="/home/css/team_show.css">
<style>
	a:hover{
		text-decoration: none;
	}
</style>
@show
@section('content')
<div class="wz" style=" font-size: 13px; width: 230px; float: right; margin-right: 59px; margin-top: 10px;">
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您当前的位置：首页 > 服务团队</p>
</div>
<div style="border: 0.5px solid #d4d4d4; margin-top: 40px;"></div>
<!-- 位置 end -->

<!-- 经典 start -->
<div class="jd">
	<h1 style="font-weight: 300;">服务团队</h1>
	<p style="font-size: 16px; color: #333;">为您提供舒适居家环境，倡导高品质生活，提升行业服务标准！</p>
	<p>To provide a comfortable home environment for you,Promote high quality of life, improve the industry standard!</p>
</div>
<!-- 经典 end -->

<!-- content -->

<div class="content">
	<div class="row">
		<div class="col-md-4 col-md-offset-4" style="height: 255px; margin-top: 50px; margin-bottom: 80px;">
			<center><img src="{{$teamShow->photo}}" style="width: 250px;height: 100%;" class="photo" alt=""></center>
		</div>	
	</div>
	
	<div class="clearfix">
		{!!$teamShow->achievement!!}
	</div>

	<div class="herf">
		<div class="pull-left col-md-6 left">
		@if($idup < $idMin)
		<a href="">上一页:
		无
		@else
		<a href="/team/{{$idup}}">上一页:
		{{$teamUp}}
		@endif
		</a></div>
		<div class="pull-left col-md-6 right">

			
		
		@if($iddown > $idMax)
		<a href="">下一页:
		无
		@else
		<a href="/team/{{$iddown}}">下一页:
		{{$teamDown}}	
		@endif
		</a></div>
	</div>
	<div style="margin: 50px 0px 30px 0px; font-size: 24px;">
		相关人员
	</div>
	<div class="team-all">
		@foreach($team as $k=>$v)
		<div class="team pull-left">
			<a href="/team/{{$v->id}}">
				<div class="img">
					<img src="{{$v->photo}}"  alt="">
				</div>
				<p style="margin-top: 15px;">{{$v->region}}</p>
				<p style="margin-top: -11px;">{{$v->membername}}</p>
			</a>
		</div>
		@endforeach
	</div>

</div>

<!-- content end -->


@endsection
	