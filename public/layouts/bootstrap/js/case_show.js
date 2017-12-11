// 鼠标移上
$(function(){
	// 导航
	$(".nav_a").hover(function(){
		$(this).css("text-decoration","none");
		$(this).css("color","#c29b73");
	},
	function(){
		$(this).css("color","#000");
	}),
	// CN EN
	$(".cen a").hover(function(){
		$(this).css("text-decoration","none");
		$(this).css("color","#c29b73");
	},
	function(){
		$(this).css("color","#000");
	}),
	// 预约
	$(".lj a").hover(function(){
		$(this).css("text-decoration","none");
		$(this).css("color","#fff");
	},
	function(){
		$(this).css("color","#000");
	}),
	// 资讯
	$(".zx_c a").hover(function(){
		$(this).css("text-decoration","none");
		$(this).css("color","#c29b73");
	},
	function(){
		$(this).css("color","#000");
	}),
	// 结尾 top
	$(".jw_a a").hover(function(){
		$(this).css("text-decoration","none");
		$(this).css("color","#c29b73");
	},
	function(){
		$(this).css("color","#fff");
	}),
	// 结尾 bottom
	$(".bottom_z").hover(function(){
		$(this).css("text-decoration","none");
		$(this).css("color","#c29b73");
	},
	function(){
		$(this).css("color","#000");
	})
})

// 表单下拉事件
$(function(){
	$(".nav > ul > li ").hover(function(){
		$(this).find(".list").stop().slideDown();
		$(this).addClass("active").siblings("li").removeClass("active");
	},function(){
		$(".nav > ul > li ").find(".list").stop().slideUp();
	})
})

// 图片变大
$(function(){
	$(".al_1").hover(function(){
		$(".al_1 > img").stop().animate({
			width:"630px",
			height:"547px",
			top:"-10px",
			left:"-10px"
		},1000)
	},function(){
		$(".al_1 > img").stop().animate({
			width:"610px",
			height:"527px",
			top:"0px",
			left:"0px"
		},1000)
	})

	$(".al_2").hover(function(){
		$(".al_2 > img").stop().animate({
			width:"630px",
			height:"547px",
			top:"-10px",
			left:"-10px"
		},1000)
	},function(){
		$(".al_2 > img").stop().animate({
			width:"610px",
			height:"527px",
			top:"0px",
			left:"0px"
		},1000)
	})

	$(".al_3").hover(function(){
		$(".al_3 > img").stop().animate({
			width:"630px",
			height:"547px",
			top:"-10px",
			left:"-10px"
		},1000)
	},function(){
		$(".al_3 > img").stop().animate({
			width:"610px",
			height:"527px",
			top:"0px",
			left:"0px"
		},1000)
	})

	$(".al_4").hover(function(){
		$(".al_4 > img").stop().animate({
			width:"630px",
			height:"547px",
			top:"-10px",
			left:"-10px"
		},1000)
	},function(){
		$(".al_4 > img").stop().animate({
			width:"610px",
			height:"527px",
			top:"0px",
			left:"0px"
		},1000)
	})

	$(".xl a").hover(function(){
		$(".xl a > img").stop().animate({
			width:"330px",
			height:"280px",
			top:"80px",
			left:"-10px"
		},1000)
	},function(){
		$(".xl a > img").stop().animate({
			width:"310px",
			height:"260px",
			top:"80px",
			left:"0px"
		},1000)
	})

	$(".t2").hover(function(){
		$(".t2 > img").stop().animate({
			width:"113px",
			height:"113px",
			bottom:"0px",
			right:"-15px"
		},1000)
	},function(){
		$(".t2 > img").stop().animate({
			width:"25px",
			height:"25px",
			bottom:"0px",
			right:"65px"
		},1000)
	})
})