$(function(){
	var times=null;
	 var speed=0
	times=setInterval(function(){
		if(speed>=$(".focus .focus_img").length-1){
			speed=0;
		}else{speed++;}

		$(".focus .focus_img").eq(speed).fadeIn().siblings(".focus_img").fadeOut();

		$(".focus > ul > li").eq(speed).addClass("active").siblings("li").removeClass("active");

	},3000);


    
	$(".focus").hover(function(){
          clearInterval(times);
         
	},function(){
		
		times=setInterval(function(){
		if(speed>=$(".focus .focus_img").length-1){
			speed=0;
		}else{speed++;}

		$(".focus .focus_img").eq(speed).fadeIn().siblings(".focus_img").fadeOut();

		$(".focus > ul > li").eq(speed).addClass("active").siblings("li").removeClass("active");

	},3000);
	})


	$(".focus > ul >li").click(function(){
		speed=$(this).index();
		$(".focus > ul > li").removeClass("active");
		$(this).addClass("active");
		$(".focus .focus_img").fadeOut();
		$(".focus .focus_img").eq(speed).fadeIn();


	})

	$(".focus > .rights").click(function(){
		if(speed>=$(".focus .focus_img").length-1){
			speed=0;
		}else{
			speed++;
		}

		$(".focus .focus_img").eq(speed).fadeIn().siblings(".focus_img").fadeOut();

		$(".focus > ul > li").eq(speed).addClass("active").siblings("li").removeClass("active");


	})

	$(".focus > .lefts").click(function(){
		if(speed<=0){
			speed=$(".focus .focus_img").length-1;
		}else{
			speed--;
		}

		$(".focus .focus_img").eq(speed).fadeIn().siblings(".focus_img").fadeOut();

		$(".focus > ul > li").eq(speed).addClass("active").siblings("li").removeClass("active");


	})


})