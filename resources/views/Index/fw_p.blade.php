@include('layouts.header')

<link rel="stylesheet" type="text/css" href="/layouts/bootstrap/css/fuwu_price.css">
<script src="/layouts/bootstrap/js/fuwu_price.js"></script>

<div>
	<!-- 位置 start -->
	<div class="wz" style=" font-size: 13px; width: 230px; float: right; margin-right: 59px; margin-top: 10px;">
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您当前的位置：首页 > 服务报价</p>
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
	
	<!-- 案例 start -->
	<div class="al_a">
		<div class="al_al">
			@foreach($article1 as $k=>$v)
				<img src="{!!$v->pic!!}">
			@endforeach
		</div>
		<div class="al_ar">
			@foreach($article1 as $k=>$v)
				<p style="font-size: 22px;">{!!$v->title!!}</p>
			@endforeach
			@foreach($article1 as $k=>$v)
				<p style="font-size: 27px; color: #c29b73;">{!!$v->author!!}</p>
			@endforeach
			@foreach($article1 as $k=>$v)
				<p>{!!$v->content!!}</p>
			@endforeach
		</div>
	</div>
	<div class="al_b">
		<div class="al_bl">
			@foreach($image1 as $k=>$v)
				<img src="{!!$v->img!!}">
			@endforeach
		</div>
		<div class="al_br">
			@foreach($article1 as $k=>$v)
				<p style="font-size: 22px; margin-left: 380px;">{!!$v->title!!}</p>
			@endforeach
			@foreach($article1 as $k=>$v)
				<p style="font-size: 30px; color: #c29b73; margin-left: 440px;">{!!$v->author!!}</p>
			@endforeach
			@foreach($article1 as $k=>$v)
				<p>{!!$v->content!!}</p>
			@endforeach
		</div>
	</div>
	<div class="al_c">
		<div class="al_cl">
			@foreach($article1 as $k=>$v)
				<img src="{!!$v->pic!!}">
			@endforeach
		</div>
		<div class="al_cr">
			@foreach($article1 as $k=>$v)
			<p style="font-size: 22px; margin-left: 0px;">{!!$v->title!!}</p>
			@endforeach
			@foreach($article1 as $k=>$v)
			<p style="font-size: 30px; color: #c29b73; margin-left: 0px;">{!!$v->author!!}</p>
			@endforeach
			@foreach($article1 as $k=>$v)
			<p>{!!$v->content!!}</p>
			@endforeach
		</div>
	</div>
	<div class="al_d">
		<div class="al_dl">
			@foreach($image1 as $k=>$v)
				<img src="{!!$v->img!!}">
			@endforeach
		</div>
		<div class="al_dr">
			@foreach($article1 as $k=>$v)
			<p style="font-size: 22px; margin-left: 380px;">{!!$v->title!!}</p>
			@endforeach
			@foreach($article1 as $k=>$v)
			<p style="font-size: 30px; color: #c29b73; margin-left: 440px;">{!!$v->author!!}</p>
			@endforeach
			@foreach($article1 as $k=>$v)
			<p>{!!$v->content!!}</p>
			@endforeach
		</div>
	</div>
	<!-- 案例 end -->
</div>



@include('layouts.footer')



