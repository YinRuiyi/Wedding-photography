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
	// 摄影 >
	$(".quan").hover(function(){
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
	// 结尾 left
	$(".jw_a a").hover(function(){
		$(this).css("text-decoration","none");
		$(this).css("color","#c29b73");
	},
	function(){
		$(this).css("color","#fff");
	}),
	// 结尾 right
	$(".bottom_z").hover(function(){
		$(this).css("text-decoration","none");
		$(this).css("color","#c29b73");
	},
	function(){
		$(this).css("color","#000");
	}),
	// 品质
	$(".box_1 a").hover(function(){
		$(this).css("text-decoration","none");
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

// 无缝滚动
$(function(){     
	setInterval(function(){
		$(".hb").animate({
			left:"-165px"
			  //这个function函数是在animate动画结束后所调用函数，
		},1000,function(){
			$(".hb > img").eq(0).appendTo(".hb");
			$(".hb").css("left","0");
		});
	},1000)
})

function AutoScroll(obj) {
    $(obj).find("ul:first").animate({
        marginleft: "-288px"
    }, 500, function () {
        $(this).css({ marginleft: "0px" }).find("li:first").appendTo(this);
    });
}
$(document).ready(function () {
    var myar = setInterval('AutoScroll(".box")', 1000);
    //当鼠标放上去的时候，滚动停止，鼠标离开的时候滚动开始
    $(".box").hover(function () { clearInterval(myar); }, function () { myar = setInterval('AutoScroll(".box")', 1000) });
});

// 图片变大
$(function(){
	$(".wx").hover(function(){
		$(".wx > img").stop().animate({
			width:"333px",
			height:"190px",
			top:"-10px",
			left:"-10px"
		},1000)
	},function(){
		$(".wx > img").stop().animate({
			width:"303px",
			height:"160px",
			top:"0px",
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