	<!-- 最新资讯 start -->
<!-- 	<div class="zx">
		<h3 style="margin-top: 70px;">最新新闻</h3>
	</div>
	<div class="zx_a" style="margin-top: 20px;">
		<ul>
			<li class="zx_b zx_c"><a href="#"> ✿《中国广告》杂志专访唯星总裁赵旭隆：技术驱动营销 致力品效合一</a></li>
			<li class="zx_c"><a href="#">✿ 唯星集团运营总裁张蓬先生受邀出席，并发表“数字创新，商业之</a></li>
			<li class="zx_c"><a href="#">✿ 作为国内领先的数字营销企业，唯星集团荣获此次IAI国际广告奖变革</a></li>
			<li class="zx_b zx_c"><a href="#">✿ 唯星荣誉榜——2016上半年盘点唯星荣誉榜上半年盘点</a></li>
			<li class="zx_c"><a href="#">✿ 中国传媒大学广告学院联合主办的IAI国际创享节暨第16届IAI国际</a></li>
			<li class="zx_c"><a href="#">✿ 年度最佳营销公司”，是对唯星产品、技术、服务及团队等</a></li>
			<li class="zx_b zx_c"><a href="#">✿ 唯星集团运营总裁张蓬受邀出席IAI国际创享节并发表演讲商业之智</a></li>
			<li class="zx_c"><a href="#">✿ 任鲁豫等在内的央视著名主持人，如此豪华阵容</a></li>
			<li class="zx_c"><a href="#">✿ 整体实力的充分肯定，同时也预示着技术型营销企业已经引领行业</a></li>
		</ul>
	</div> -->
	<!-- 最新资讯 end -->
	<div class="zx">
		<h3 style="">最新资讯</h3>
		<p>For Customers to provide professional information</p>
		<div class="zx_a" style="margin-top: 20px;">
			<ul>
				@foreach($news as $k=>$v)
				<li class="zx_b zx_c"><a href="#">&nbsp;&nbsp;✿&nbsp;&nbsp;{{$v->newsname}}</a></li>
				@endforeach				
			</ul>
		</div>
	</div>
