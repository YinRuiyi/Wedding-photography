@extends('layouts.header')
@section('title')
服务团队
@stop
@section('csjs')
<link rel="stylesheet" type="text/css" href="home/css/team.css">
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
	<h1>服务团队</h1>
	<p style="font-size: 18px; color: #c29b73;">为您提供舒适居家环境，倡导高品质生活，提升行业服务标准！</p>
	<p>To provide a comfortable home environment for you,Promote high quality of life, improve the industry standard!</p>
</div>
<!-- 经典 end -->

<!-- 案例介绍 start -->
<div class="fl">
	<div class="fl_t">
		<a href="/teamA"><p>北京</p></a>
		<a href="/teamB"><p style="width: 190px; height: 40px; background-color: #2d2d2d; color: #fff; margin-top: -7px; line-height: 40px;">上海</p></a>
		<a href="/teamC"><p>天津</p></a>
	</div>
</div>
<div class="ct">
	<p>春亭装饰设计，倡导绿色环保理念，拥有最具实力的设计团队，推崇以人为本，深入了解客户的心理需 求。其设计团队拥有10年以上的设计年龄，设计师追求新颖独到，贴近生活的设计主题，擅长将设计理 念与客户的生活习惯完美融合，致力于为客户打造温馨舒适的家。公司分为浦东 和浦西设计分部，多名资深设计人才期待您的光临！</p>
</div>
<div class="tu">
	<ul>
		@foreach($teamB as $k=>$v)
		<li style="margin: 0px;"><a href="/team/{{$v->id}}" class="zhx">
			<div class="img">
				<img src="{{$v->photo}}">
			</div>
			<p style="margin-top: 15px;">{{$v->region}}</p>
			<p style="margin-top: -11px;">{{$v->membername}}</p>
		</a></li>
		@endforeach
		
	</ul>
</div>
<!-- 案例介绍 end -->

<!-- 分页 start -->
<div class="fy" style="height: 90px; margin-bottom: 30px;">
 <center>{{ $teamB->links() }}</center>
</div>
@endsection
	