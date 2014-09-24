function login_toggle() {
	$(".top_login").slideToggle("slow");
}

$(function(){
	$($(".header_unlogin a")[0]).click(function(){
		login_toggle();
	});

})