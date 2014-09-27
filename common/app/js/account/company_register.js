
$(function(){

    var email_flag = false;
    $("#form-register").submit(function() {
        var zz_xuanzequxian = $("#form-xian option:selected").text();
        if(!email_flag){
            $(".e-mail").next(".form-register-item-warn").html( "邮箱填写错误!" );
            $(".e-mail").focus();
            return false;
        }
        var flag = true;
        $.each($(".not-empty"),function(i,e){
            if( isEmpty( $(e) ) ){
                flag = false;
                return false;
            }
        });
        if(!flag){
            return false;
        }
        if(zz_xuanzequxian == '选择县区'){
            alert('所在地信息不完整');
            return false;
        }
        var zz_p1 = $("#form-password").val();
        var zz_p2 = $("#form-password-second").val();

        if(zz_p1 != zz_p2){
            alert('两次密码不一致')	;
            $('.zz_mima').html("两次密码不一致！");
            return false;
        }

    });
    function isEmpty(obj){
        var val = obj.val();
        if( val == "" ){
            obj.next(".form-register-item-warn").html( obj.attr("error_info"));
            obj.focus();
            return true;
        }
        obj.next(".form-register-item-warn").html( "<span style='color:green;'>通过<span>" );
        return false;
    }
    // 验证密码
    $(".re-pw").blur(function(){
        var val = $(this).val();
        var eml = $(this).next(".form-register-item-warn")
        eml.html("");
        if( val=="" || val !=$(".pw").val() ){
            eml.html("两次密码不一致！");
        }
    });

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
            email_flag = false;
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
                    email_flag = true;
                    elm.html("<span style='color:green'>"+obj.json.msg+"</span>");
                }else{
                    flag = false;
                    email_flag = false;
                    elm.html(obj.json.msg);
                }
            },
            error:function(o){
                flag = false;
                elm.html("网络连接错误！");
            }
        });
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

function file_upload_change(ele){
    var path = $(ele).val();
    $("#select_file_path").html(path);
}

