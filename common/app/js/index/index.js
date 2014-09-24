$(function(){
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



});