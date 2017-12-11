<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>婚纱主题</title>
	<link rel="stylesheet" href="home/css/bootstrap.css">
	<script src="home/js/jquery.js"></script>
	<script src="home/js/bootstrap.js"></script>
	<script src="home/js/holder.min.js"></script>
	<link rel="stylesheet" type="text/css" href="home/css/zy.css">
	<script src="home/js/zy.js"></script>
</head>
<body>
	<header>
		<div class="logo">
	   		<a href="hunsha.html"><img src="images/logo.png" alt=""></a>
	   </div>
	   <div class="nav">
   			<ul>     
   				<li style="border: none;"><a href="hunsha.html" class="nav_a">首页</a></li>
   				<li><a href="case.html"  class="nav_a">经典系列</a>
   					<div class="list">
   						<a href="case.html"  class="nav_a"><p>人气</p></a>
   						<a href="case.html"  class="nav_a"><p>色系</p></a>
   						<a href="case.html"  class="nav_a"><p>价格</p></a>
   					</div>
   				</li>
   				<li><a href="kehu.html" class="nav_a">客照专区</a>
   					<div class="list">
   						<a href="kehu.html"  class="nav_a"><p>北京</p></a>
   						<a href="kehu.html"  class="nav_a"><p>上海</p> </a>
   						<a href="kehu.html"  class="nav_a"><p>天津</p></a>
   					</div>
   				</li>
   				<li><a href="about.html" class="nav_a">关于我们</a>
   					<div  class="list">
   						<a href="about.html"  class="nav_a"><p>公司简介</p></a>
   						<a href="about_fuwu.html"  class="nav_a"><p>我们的服务</p></a>
   						<a href="about_wh.html"  class="nav_a"><p>企业文化</p></a>
   					</div>
   				</li>
   				<li><a href="team.html" class="nav_a">服务团队</a>
   					<div  class="list">
   						<a href="team.html"  class="nav_a"><p>北京</p></a>
   						<a href="team.html"  class="nav_a"><p>上海</p></a>
   						<a href="team.html"  class="nav_a"><p>天津</p></a>
   					</div>
   				</li>
   				<li><a href="fuwu_price.html" class="nav_a">服务报价</a></li>
   				<li><a href="news.html" class="nav_a">新闻资讯</a>
   					<div  class="list">
   						<a href="news.html"  class="nav_a"><p>最新优惠</p></a>
   						<a href="news.html"  class="nav_a"><p>公司新闻</p></a>
   						<a href="news.html"  class="nav_a"><p>行业新闻</p></a>
   					</div>
   				</li>
   				<li><a href="contact.html" class="nav_a">联系我们</a>
   					<div  class="list">
   						<a href="contact.html"  class="nav_a"><p>联系我们</p></a>
   						<a href="feedback.html"  class="nav_a"><p>在线留言</p></a>
   					</div>
   				</li>
   			</ul>
	   		<div class="cen">
	   			<a href="">CN</a>
	   			<a href="">EN</a>
	   		</div>
	   </div>
	</header>

	<!-- 轮播图 start -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="z-index: 1; margin-top: 20px;">
				  
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
						<img src="" alt="">
						<div class="box_b">
							<a href="#">
								<h3>{{$v->series}}</h3>
								<h4 style="color: #c29b73;">{{$v->style}}</h4>
								<h5>{{$v->introduce}}</h5>
								<p>{{$v->num}}</p>
								<img src="images/pro_quan.png" alt="">
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
			<img src="images/about_1.png" alt="">
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
	<footer>
		<div class="end">
			<div class="container">
				<div class="col-md-12 jw">
					<div class="jw_l col-md-8">
						<ul style="margin-left: 0px;">
							<p class="jw_a"><a href="#">经典案例</a></p>
							<li class="jw_a"><a href="#">人气</a></li>
							<li class="jw_a"><a href="#">色系</a></li>
							<li class="jw_a"><a href="#">价格</a></li>
						</ul>

						<ul>
							<p class="jw_a"><a href="#">客照专区</a></p>
							<li class="jw_a"><a href="#">北京</a></li>
							<li class="jw_a"><a href="#">上海</a></li>
							<li class="jw_a"><a href="#">天津</a></li>
						</ul>

						<ul>
							<p class="jw_a"><a href="#">关于我们</a></p>
							<li class="jw_a"><a href="#">公司简介</a></li>
							<li class="jw_a"><a href="#">我们的服务</a></li>
							<li class="jw_a"><a href="#">企业文化</a></li>
						</ul>

						<ul>
							<p class="jw_a"><a href="#">服务团队</a></p>
							<li class="jw_a"><a href="#">服务团队</a></li>
							<li class="jw_a"><a href="#">服务团队</a></li>
							<li class="jw_a"><a href="#">服务团队</a></li>
						</ul>

						<p class="jw_a" style="width: 60px; margin-top: 70px;margin-left: 50px ; float: left;"><a href="#" style="color: #fff; font-size: 13px;">服务报价</a></p>

						<ul>
							<p class="jw_a"><a href="#">新闻资讯</a></p>
							<li class="jw_a"><a href="#">最新优惠</a></li>
							<li class="jw_a"><a href="#">公司新闻</a></li>
							<li class="jw_a"><a href="#">行业新闻</a></li>
						</ul>
					</div>
					<div class="jw_r col-md-4">
						<div class="jw_r1">
							<p class="jw_a r1"><a href="#">CONTACT</a></p>

							<p class="jw_a r2"><a href="#">联系我们</a></p>

							<p style="color: #fff; font-size: 13px;">联系地址：</p>
							<p class="jw_a r3"><a href="#">上海市虹口区水电路33号楼3单元3层</a></p>

							<p style="color: #fff; font-size: 13px;">手机：</p>
							<p class="jw_a r4"><a href="#">177 1610 1908</a></p>

							<p style="color: #fff; font-size: 13px;">邮箱：</p>
							<p class="jw_a r5"><a href="#">1776101908@163.com</a></p>
						</div>
						<div class="jw_r2">
							<a href="#"><img src="images/qq.png" alt=""></a>
							<a href="#"><img src="images/qq.png" alt=""></a>
							<a href="#"><img src="images/qq.png" alt=""></a>
							<a href="#"><img src="images/qq_01.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom col-md-12">
				<div class="container">
					<p>COPYRIGHT(C)2015-2024 上海唯星婚纱摄影有限公司&nbsp;&nbsp;&nbsp;<a href="" class="bottom_z">站点地图</a></p>
					<a href="#" class="t1"><img src="images/yu.png" alt=""></a>
					<a href="#" class="t2"><img src="images/er.png" alt=""></a>
				</div>	
			</div>
		</div>
	</footer>
	<!-- 结尾 end -->
</body>
</html>