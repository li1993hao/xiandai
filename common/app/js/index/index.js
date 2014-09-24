var scrollTimer;
var scrollWidth;
var scrollCount;
var scrollTime = 3000;


$(function(){
	/***下拉菜单**/
	$(".drop").hover(function(){
		$($(this).children(".drop_down")).fadeIn("fast");
	},function(){
 		$($(this).children(".drop_down")).fadeOut("fast");
	});

	$(".category_nav a").hover(function(){
		if(!$(this).hasClass("category_nav_active")){
			$(".category_nav .category_nav_active").removeClass("category_nav_active").addClass("category_nav_normal");
			$(this).addClass("category_nav_active");

			var index = $(this).data("index");

			$(".category_info .category_list ul").each(function(i){

				if(i==index){
					$(this).show();
				}else{
					$(this).hide();
				}
			});
		}
	}).each(function(i){
		$(this).data("index", i);
	});


	$(".category_nav2 a").hover(function(){
		if(!$(this).hasClass("category_nav2_active")){
			$(".category_nav2 .category_nav2_active").removeClass("category_nav2_active")
			$(this).addClass("category_nav2_active");

			var index = $(this).data("index");

			$(".category_info2 .category_list ul").each(function(i){
				if(i==index){
					$(this).show();
				}else{
					$(this).hide();
				}
			});
		}
	}).each(function(i){
		$(this).data("index", i);
	});

	$(".right_top_nav div").hover(function(){
		if(!$(this).hasClass("category_nav2_active")){
			$(".right_top_nav .category_nav2_active").removeClass("category_nav2_active")
			$(this).addClass("category_nav2_active");

			var index = $(this).data("index");

			$(".right_top ul").each(function(i){
				if(i==index){
					$(this).show();
				}else{
					$(this).hide();
				}
			});
		}
	}).each(function(i){
		$(this).data("index", i);
	});

	/***评分星星**/
	$(".star").hover(function(){
		var stars = $(this).parent().children(".star");
		var spflag = 0;
		var star_onNum = 0;
		for(var i=0; i<stars.length; i++){
			if(spflag == 0){
				star_onNum++;
				$(stars[i]).removeClass("star_off").addClass("star_on");
			}else{
				$(stars[i]).removeClass("star_on").addClass("star_off");
			}

			if(stars[i] === this){
				spflag = 1;
			}
		}
		var tip = star_onNum==1?"不喜欢":star_onNum==2?"没感觉":
			star_onNum==3?"还行":star_onNum==4?"满意":"很满意";
		$(this).parent().children("span").html(tip);
	});

	/**轮播控件***/
	var car_div = $(".carousel_content div");
	scrollCount = car_div.length+1;
	scrollWidth = $(car_div[0]).css("width").replace(/px/,"");

	var last = $(".carousel_content div:first-child").clone();
	$(".carousel_content").append(last);

	$(".carousel_content").css("width",scrollWidth*scrollCount+"px").data("index",1);
	scrollTimer = setInterval(scrollCarousel,scrollTime);

	$(".carousel_info").hover(function(){
		clearInterval(scrollTimer);
	},function(){
		scrollTimer = setInterval(scrollCarousel,scrollTime);
	});

	$(".carousel_left").click(function(){
		scrollBack();
	});
	$(".carousel_right").click(function(){
		scrollCarousel();
	})

});

/**向右滚动*/
function scrollCarousel(){
	var index = $(".carousel_content").data("index");
	if(index == scrollCount){
		$(".carousel_scroll_wrap").css("left","0px");
		index = 1;
	}
	$(".carousel_scroll_wrap").animate({left:-scrollWidth*index+'px'},"slow");
	$(".carousel_content").data("index",index+1);

}

/**向左滚动**/
function scrollBack(){
	var index = $(".carousel_content").data("index");
	if(index == scrollCount){
		$(".carousel_scroll_wrap").css("left","0px");
		index = 1;
	}
	if(index !=1){
		$(".carousel_scroll_wrap").animate({left:-scrollWidth*index+'px'},"slow");
		$(".carousel_content").data("index",index-1);
	}

}










