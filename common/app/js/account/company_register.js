
var flag = false;
var chkFlag = true;
function checkForm() {
	var chk = document.getElementById("form-box");
	if(chkFlag && flag){
		flag = true;
	}else{
		flag = false;
	}
	return flag;
}
function file_upload_change(ele){
	var path = $(ele).val();
	$("#select_file_path").html(path);
}

$(function(){
	
//邮箱验证
function isEmail(val){
		return val.match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/);
	}
$("#form-email").blur(function(){
	// alert("ok");
            var val = $(this).val();
            var elm = $(this).next(".form-register-item-warn");
            elm.html("正在验证...");
            if( !isEmail(val) || val==""){
                elm.html("email格式不正确！");
                flag = false;
                return;
            }
            $.ajax({
			url:web_url+"/index.php/account/checkemail",
			data: "email="+val,
			type:"POST",
			async:false,
			success:function(msg){
				// alert(msg);
				var obj = eval('(' + msg + ')');
				// alert(obj);
				if (obj.json.state == 1) {
					flag = true;
					elm.html("<span style='color:green'>"+obj.json.msg+"</span>");
				}else{
					flag = false;
					elm.html(obj.json.msg);
				}
			},
			error:function(o){
				flag = false;
				elm.html("网络连接错误！");
			}
		});
    });
// 必填的项
$("#form-name").blur(function() {
	flag = true;
	var val = $(this).val();
	var elm = $(this).next(".form-register-item-warn");
	elm.html("");
	if(val == "") {
		elm.html("公司名不能为空！");
		flag = false;
	}
});
$("#form-password").blur(function() {
	flag = true;
	var val = $(this).val();
	var elm = $(this).next(".form-register-item-warn");
	elm.html("");
	if(val == "") {
		elm.html("密码为空！");
		flag = false;
	}
});
$("#form-password-second").blur(function() {
	flag = true;
	var val = $(this).val();
	var password = $("#form-password").val();
	var elm = $(this).next(".form-register-item-warn");
	elm.html("");
	if(val == "") {
		elm.html("请再次输入密码！");
		flag = false;
	}
	if(val != password){
		elm.html("两次密码不一致！");
		flag = false;
	}
});
$("#form-zczb").blur(function() {
	flag = true;
	var val = $(this).val();
	var elm = $(this).next(".form-register-item-warn");
	elm.html("");
	if(val == "") {
		elm.html("此项不能为空！");
		flag = false;
	}
});
$("#form-yzbm").blur(function() {
	flag = true;
	var val = $(this).val();
	var elm = $(this).next(".form-register-item-warn");
	elm.html("");
	if(val == "") {
		elm.html("此项不能为空！");
		flag = false;
	}
});
$("#form-xxdz").blur(function() {
	flag = true;
	var val = $(this).val();
	var elm = $(this).next(".form-register-item-warn");
	elm.html("");
	if(val == "") {
		elm.html("此项不能为空！");
		flag = false;
	}
});
$("#form-lxr").blur(function() {
	flag = true;
	var val = $(this).val();
	var elm = $(this).next(".form-register-item-warn");
	elm.html("");
	if(val == "") {
		elm.html("此项不能为空！");
		flag = false;
	}
});
$("#form-gddh").blur(function() {
	flag = true;
	var val = $(this).val();
	var elm = $(this).next(".form-register-item-warn");
	elm.html("");
	if(val == "") {
		elm.html("此项不能为空！");
		flag = false;
	}
});
$("#chkImg").click(function(){
	if(chkFlag){
		$("#chkImg").attr("src", web_url+"/common/app/images/account/register/check.png");
		chkFlag = false;
	}else {
		$("#chkImg").attr("src", web_url+"/common/app/images/account/register/checked.png");
		chkFlag = true;
	}
	// alert(chkFlag);
});
// upload picture
$("#imgFile").click(function(){
	$("#file_upload").trigger("click");
});
var b = true;
$("#imgFile").mouseover(function(){
	$("#imgFile").attr("src", web_url+"/common/app/images/account/register/upload-over.png"); 
});
$("#imgFile").mouseout(function(){
	$("#imgFile").attr("src", web_url+"/common/app/images/account/register/upload.png");
});
$("#form-submit").mouseover(function(){
	$("#form-submit").css("background", "url("+web_url+"/common/app/images/account/register/submit-over.png)"); 
});
$("#form-submit").mouseout(function(){
	$("#form-submit").css("background", "url("+web_url+"/common/app/images/account/register/submit.png)");
});




// 多级联动下拉单
	$("#form-sheng").change(function() {

		var areaId = $(this).val();

		resetSelect("#form-shi","选择城市");
    	resetSelect("#form-xian","选择县区");
		if(areaId == "0" || areaId == "" || areaId==null){
    		//alert("muyou");
    		return false;
    	}
    	var parentid = areaId;
	$.ajax({
			type:"POST",
			url:web_url+"/index.php/common/Area?parentid="+parentid,		
			dataType:"json",
			async:false,
			success:function(msg){
				// console.log(msg);
				//var obj = eval('(' + msg + ')');
				if (msg.json.state == 1) {
					var str = "";
					$(msg.json.data.list).each(function (index, ele) { 
						//alert(ele.area_id);
						str += "<option value=\""+ele.area_id+"\" >"+ele.area_name+"</option>";
					});
					$("#form-shi").append(str);
				}else{
					$("#form-shi").next(".form-register-item-warn").html(msg.json.msg);
				}
				
			},
			error:function(msg){
				// alert("111");
				$("#form-shi").next(".form-register-item-warn").html("网络连接出错！");
			}
		});

	});
$("#form-shi").change(function(){
    	var areaId = $(this).val();
    	// alert(areaId);
    	resetSelect("#form-xian","选择县区");
    	if(areaId == "0" || areaId == "" || areaId==null){
    		//alert("muyou");
    		return false;
    	}
    	//var url = web_php_url+"/common/area/parentid/"+areaId;
    	//var testurl = web_php_url+"/common/area/parentid/"+areaId;
    	//alert(testurl);
    	$.ajax({
			type:"POST",
			url: web_url+"/index.php/common/area?parentid="+areaId,
			dataType:"json",
			async:false,
			success:function(msg){
				// alert(msg);
				//var obj = eval('(' + msg + ')');
				if (msg.json.state == 1) {
					var str = "";
					$(msg.json.data.list).each(function (index, Ele) { 
						str += "<option value=\""+Ele.area_id+"\" >"+Ele.area_name+"</option>";
					});
					$("#form-xian").append(str);
				}else{
					$("#form-shi").next(".form-register-item-warn").html(msg.json.msg);
				}
				
			},
			error:function(o){
				$("#form-shi").next(".form-register-item-warn").html("网络连接出错！");
			}
		});
    });
	function resetSelect(domId,val){
    	//alert(domId);
    	$(domId).html("<option value=\"0\" selected=\"selected\" >"+val+"</option>");
    }

});
