function login_toggle() {
	$(".top_login").slideToggle("slow");
}

$(function(){
	$($(".header_unlogin a")[0]).click(function(){
		login_toggle();
	});
	loginInit();
})

function loginInit () {
	$("#login_submit").click(function(){
		$("login_erro").empty();
		var user_name = $("#user_name").val();
		var user_pswd = $("#user_pswd").val();
		if(user_name == ""){
			shake($("#user_name"));
			return;
		}

		if(user_pswd == ""){
			shake($("#user_pswd"));
			return;
		}

		$(this).text("登录中...");	

		$.ajax({
			url:web_url+"/index.php/index/login",
			data:{"user_name":user_name, "user_pswd":user_pswd},
			dataType:"json",
			success:function(data){
				if(data.json.state == 0){
					shake($("#login_error"));
					$("#login_error").html(data.json.msg);
				}else{
					location.reload();
				}
			},
			async:false
		});
		$(this).text("登录");


	});
}