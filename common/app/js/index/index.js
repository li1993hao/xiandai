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
	baiduMap();
	feedBackInit();
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

function feedBackInit(){
	$("#feed_submit").click(function(){
		var text = $("#feedback_text").val();
		if(text == ""){
			shake($("#feedback_text"));
			$("#feedback_text").attr("placeholder","写点什么吧!");
		}else{
			var ui = $("#friendly .star_on").length;
			var info = $("#effective .star_on").length;
			var fun  = $("#helpful .star_on").length;
			var content = text;
			$.post(web_url+"/index.php/index/feedback",{"ui":ui,"info":info,"fun":fun,"content":content},function(data){
				if(data.json.state == 0){
					alert(data.json.msg);
				}else{
					alert("反馈成功!");
				}
			}, "json");
		}
	});
}



function baiduMap(){
	var lon =117.37533;
    var lat =39.025352;
	var map = new BMap.Map("baidu_map");            // 创建Map实例
	var point = new BMap.Point(lon, lat);    // 创建点坐标
	map.centerAndZoom(point,15);   	// 初始化地图,设置中心点坐标和地图级别。
	map.enableScrollWheelZoom();
	function ComplexCustomOverlay(point, text, mouseoverText){
	      this._point = point;
	      this._text = text;
	      this._overText = mouseoverText;
	    }
	    ComplexCustomOverlay.prototype = new BMap.Overlay();
	    ComplexCustomOverlay.prototype.initialize = function(map){
	      this._map = map;
	      var div = this._div = document.createElement("div");
	      div.style.position = "absolute";
	      div.style.zIndex = BMap.Overlay.getZIndex(this._point.lat);
	      div.style.backgroundColor = "#EE5D5B";
	      div.style.border = "1px solid #BC3B3A";
	      div.style.color = "white";
	      div.style.height = "18px";
	      div.style.padding = "2px";
	      div.style.lineHeight = "18px";
	      div.style.whiteSpace = "nowrap";
	      div.style.MozUserSelect = "none";
	      div.style.fontSize = "12px"
	      var span = this._span = document.createElement("span");
	      div.appendChild(span);
	      span.appendChild(document.createTextNode(this._text));
	      var that = this;

	      var arrow = this._arrow = document.createElement("div");
	     // arrow.style.background = "url("+web_url+"/common/app/images/label.png) no-repeat";
	      arrow.style.position = "absolute";
	      arrow.style.width = "11px";
	      arrow.style.height = "10px";
	      arrow.style.top = "22px";
	      arrow.style.left = "10px";
	      arrow.style.overflow = "hidden";
	      div.appendChild(arrow);

	      div.onmouseover = function(){
	        this.style.backgroundColor = "#6BADCA";
	        this.style.borderColor = "#0000ff";
	        this.getElementsByTagName("span")[0].innerHTML = that._overText;
	        arrow.style.backgroundPosition = "0px -20px";
	      }

	      div.onmouseout = function(){
	        this.style.backgroundColor = "#EE5D5B";
	        this.style.borderColor = "#BC3B3A";
	        this.getElementsByTagName("span")[0].innerHTML = that._text;
	        arrow.style.backgroundPosition = "0px 0px";
	      }

	      map.getPanes().labelPane.appendChild(div);
	      return div;
	    }
	    ComplexCustomOverlay.prototype.draw = function(){
	      var map = this._map;
	      var pixel = map.pointToOverlayPixel(this._point);
	      this._div.style.left = pixel.x - parseInt(this._arrow.style.left) + "px";
	      this._div.style.top  = pixel.y - 30 + "px";
	    }
	    var mouseoverTxt = "天津现代职业技术学院";
	    var myCompOverlay = new ComplexCustomOverlay(new BMap.Point(lon,lat), "天津现代职业技术学院",mouseoverTxt);
		map.addOverlay(myCompOverlay);

		var marker1 = new BMap.Marker(new BMap.Point(lon, lat));
		var infoWindow1 = new BMap.InfoWindow("天津现代职业技术学院");
		marker1.addEventListener("click", function(){this.openInfoWindow(infoWindow1);});
		map.addOverlay(marker1);
}
/**
 * 让元素抖动起来
 * @param  {[type]} ele
 * @return {[type]}
 */
function shake(ele) {
    $(ele).addClass("shake");
    setTimeout(function() {
        $(ele).removeClass("shake");
    }, 1000);
}





