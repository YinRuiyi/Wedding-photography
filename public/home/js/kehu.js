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
	// 经典 Top
	$(".fl_t a").hover(function(){
		$(this).css("text-decoration","none");
	}),
	$(".t_t a").hover(function(){
		$(this).css("text-decoration","none");
	}),
	// 经典 Bottom
	$(".fl_b a").hover(function(){
		$(this).css("text-decoration","none");
		$(this).css("color","#c29b73");
	},
	function(){
		$(this).css("color","#fff");
	}),
	$(".t_b a").hover(function(){
		$(this).css("text-decoration","none");
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