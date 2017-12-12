@extends('layouts.header')
@section('title')
首页
@stop
@section('csjs')
<link rel="stylesheet" type="text/css" href="home/css/zy.css">
<script src="home/js/zy.js"></script>
@show
@section('content')
	<!-- 轮播图 start -->
	<div id="" class="carousel slide" data-ride="carousel" style="z-index: 1; margin-top: 20px;">
				  
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  
		  <div class="carousel-inner" role="listbox">
		   
		    <div class="item active">
		      <img src="holder.js/100px570" alt="...">
		     
		    </div>
		    
		    <div class="item">
		      <img src="holder.js/100px570?theme=sky" alt="...">
		      
		    </div>
		    <div class="item">
		      <img src="holder.js/100px570?bg=#eaf" alt="...">
		      
		    </div>

		  </div>
		  
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
	</div>
	<!-- 轮播图 end -->

	<!-- CLASSIC SERIES  start -->
	<div class="pz" style="margin-top: 35px;">
		<span>CLASSIC SERIES</span>
		<h1>品质境界即刻体验</h1>
		<p>秉承"整合数字资源,技术驱动营销"的理念，专注于数字营销技术、产品、资源、服务的创新与整合，为传统企业互联网商业转型各个阶段提供全方位应用支撑。
		Villa decoration attention to indoor and outdoor environment of the overall planning and design, the people's pursuit of villa decoration from the simple design of luxury
		decoration began to move closer to the human nature and high quality of construction technology.</p>
	</div>
	<div class="focus">
		<div class="box">
			<ul>
				@foreach($series as $k=>$v)
				<li>
					<div class="box_1">
						<img src="{{$v->status}}" alt="图片丢失">
						<div class="box_b">
							<a href="#">
								<h3>{{$v->series}}</h3>
								<h4 style="color: #c29b73;">{{$v->style}}</h4>
								<h5>{{$v->introduce}}</h5>
								<p>{{$v->num}}</p>
								<img src="layouts/images/pro_quan.png" alt="">
							</a>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
	</div>

	<div style="border: 0.5px solid #d4d4d4; margin-top: 20px;"></div>

	<div class="sy">
		<div class="wx col-md-3" style="margin-top: 80px;">
			<img src="layouts/images/about_1.png" alt="">
		</div>
		<div class="col-md-4" style="margin-top: 75px; margin-left: 60px;">
			<h5 style="">唯星婚纱摄影</h5>
			<p>Jindo wedding photography</p>
			<p style="height: 63px;">经过10余年的快速发展，唯星深刻理解未来数字营销内容与技术的融合之势， 积极引进优秀的互联网技术、营销策略及内容创意专家。</p>
			<p class="quan"><a href="#"><b> › </b></a></p>
		</div>
		<div class="col-md-4" style="margin-top: 75px;">
			<h5>金牌管家服务</h5>
			<p>the whole process of design services</p>
			<p style="height: 63px;">我们坚持SPRING全程服务，拥有绿色家园只是你生活下一华章的开始 24小时售后服务电话：021-31265245</p>
			<p class="quan"><a href="#"><b> › </b></a></p>
		</div>
	</div>

	<div style="border: 0.5px solid #d4d4d4;"></div>
	<!-- CLASSIC SERIES  end -->

	<!-- 服务团队 start -->
	<div class="fw">
		<p class="fw_a">服务团队</p>
		<p>秉承"整合数字资源,技术驱动营销"的理念，专注于数字营销技术、产品、资源、服务的创新与整合</p>
	</div>
	<div class="col-md-12" style="margin-top: 60px;">
		<ul class="list-unstyled" id="st">
			@foreach($team as $k=>$v)
			<li class="col-md-2">
				<div class="item">
					<img src="{{$v->photo}}" style="width: 100%; height: 200px;" class="img-responsive" alt="">
				</div>
			</li>
			@endforeach
		</ul>
	</div>
	<!-- 服务团队 end -->

	<!-- 最新资讯 start -->
	<div class="zx">
		<h3 style="margin-top: 580px;">最新资讯</h3>
		<p>For Customers to provide professional information</p>
		<div class="zx_a" style="margin-top: 20px;">
			<ul>
				@foreach($news as $k=>$v)
				<li class="zx_b zx_c"><a href="#"> ✿{{$v->newsname}}</a></li>
				@endforeach				
			</ul>
		</div>
	</div>
	<!-- 最新资讯 end -->

	<!-- 国际合作 start -->
	<div class="gj">
		<h3 style="margin-top: 60px;">国际品牌合作伙伴</h3>
		<p>International brand partners</p>
	</div>
	<div class="bk" style="width: 100%;height: 190px; background-color: #e6e6e6;">
		<div class="hb">
			@foreach($partners as $k=>$v)
				<img src="{{$v->logo}}" alt="">
			@endforeach		
		</div>
	</div>
	
	<!-- 国际合作 end -->

	<!-- 结尾 start -->
@endsection
	