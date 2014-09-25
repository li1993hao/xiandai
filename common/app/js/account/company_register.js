function file_upload_change(ele){
	var path = $(ele).val();
	$("#select_file_path").html(path);
}
	
$(function(){

// upload picture
$("#imgFile").click(function(){
	$("#file_upload").trigger("click");
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

		// $("#file_upload").click();
		

//register 
	// $("#form-register").submit(function () {
	// 	// alert("sdf");
	// 	var value = $("#form-register").serialize();
	// 	 alert(value);
	// 	$.post(web_url+"/index.php/account/registerSubmit",value,function(data){
	// 		alert(data);
	// 	});
	// 	 return false;		
	// });
});