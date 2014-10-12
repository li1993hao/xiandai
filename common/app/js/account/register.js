$(function() {
    var email_flag = false;

    function isEmail(val){
        return val.match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/);
    }
    function isPhone(val){
        return val.match(/^1[3|4|5|8][0-9]\d{4,8}$/);
    }
    $(".e-mail").blur(function(){
        var val = $(this).val();
        var elm = $(this).next(".form-register-item-warn");
        elm.html("正在验证...");
        if( !isEmail(val) ){
            elm.html("email格式不正确！");
            email_flag = false;
            return false;
        }

        $.ajax({
            url:web_url+"/index.php/common/checkemail",
            data: "email="+val,
            type:"POST",
            async:false,
            success:function(msg){
                //alert(msg);
                var obj = eval('(' + msg + ')');
                if (obj.json.state == 1) {
                    email_flag = true;
                    elm.html("<span style='color:green'>"+obj.json.msg+"</span>");
                }else{
                    email_flag = false;
                    elm.html(obj.json.msg);
                }
            },
            error:function(o){
                email_flag = false;
                elm.html("网络连接错误！");
            }
        });
    });

    $(".re-pw").blur(function(){
        var val = $(this).val();
        if( val=="" || val !=$(".pw").val() ){
            $(this).next(".form-register-item-warn").html("两次密码不一致！");
        }
    });


    function resetSelect(domId,val){
        //alert(domId);
        $(domId).html("<option value=\"0\" selected=\"selected\" >"+val+"</option>");
    }


    $("#form-sheng").change(function(){
        var areaId = $(this).val();
        //alert(areaId);
        resetSelect("#form-shi","选择城市");
        resetSelect("#form-xian","选择县区");
        if(areaId == "0" || areaId == "" || areaId==null){
            //alert("muyou");
            return false;
        }

        $.ajax({
            type:"POST",
            url:web_url+"/index.php/common/area/parentid/"+areaId,
            dataType:"json",
            async:false,
            success:function(msg){
                //alert(msg);
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
            error:function(o){
                $("#form-shi").next(".form-register-item-warn").html("网络连接出错！");
            }
        });
    });

    $("#form-shi").change(function(){
        var areaId = $(this).val();
        //alert(areaId);
        resetSelect("#form-xian","选择县区");
        if(areaId == "0" || areaId == "" || areaId==null){
            //alert("muyou");
            return false;
        }

        $.ajax({
            type:"POST",
            url: web_url+"/index.php/common/area/parentid/"+areaId,
            dataType:"json",
            async:false,
            success:function(msg){
                //alert(msg);
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





    $('#file_upload').uploadify({
        'formData'     : {
        },
        'swf'      : web_url+'/common/libs/upload/uploadify.swf',
        'uploader' : web_url+'/index.php/common/fileupload/filetype/img',
        'queueSizeLimit': 1 ,
        'multi':false,
        'auto':true,
        'fileTypeDesc':"请选择图片文件",
        'fileTypeExts':'*.jpg;*.jpeg;*.png;*.gif;*.bmp',
        'fileSizeLimit': '4096KB',
        'buttonText':"选择图片",
        'width' : 100,
        'height':20,
        'cancelImg' : web_url+'/common/libs/upload/uploadify-cancel.png',
        'onUploadError' : function(file, errorCode, errorMsg, errorString) {
            alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
        },
        'onUploadStart' : function(file) {
            $("#picstate").val("1");
        },
        'onCancel' : function(file) {
            $("#picstate").val("0");
        },
        'onUploadSuccess' : function(file, data, response) {
            //alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
            // alert(data);
            var myObject = eval('(' + data + ')');
            //alert(myObject.result);
            //alert(myObject.msg);
            if(myObject.result == '0'){
                $("#img").html(myObject.msg);
                $("#picstate").val("0");//0表示没有图片上传 1表示图片上传中 2表示图片上传成功
            }else{
                var info = "<div data=\""+myObject.result+"\" class=\"form-register-item-imgitem\"><img alt=\"资质证明\" src=\""+myObject.msg+"\"><div title=\"删除\" class=\"form-register-item-imgitem-close\">X</div></div>";
                $(".form-register-item-imglist").append(info);
                $("#picstate").val("2");
            }

        }
    });


    $(".form-register-item-imgitem-close").live('click', function() {
        var id = $(this).parent().attr("data");
        //alert(id);
        $(this).parent().remove();
        $.ajax({
            type:"POST",
            url:web_url+"/index.php/common/Delfile",
            data: "id="+id,
            async:false,
            success:function(msg){
            },
            error:function(o){
            }
        });

    });



    var editor = $('#gsjj').xheditor({
        upLinkUrl:web_url+"/common/upload.php",
        upLinkExt:"zip,rar,txt",
        upImgUrl:web_url+"/common/upload.php",
        upImgExt:"jpg,jpeg,gif,png",
        upFlashUrl:web_url+"/common/upload.php",
        upFlashExt:"swf",
        upMediaUrl:web_url+"/common/upload.php",
        upMediaExt:"avi",
        remoteImgSaveUrl:web_url+"/common/upload.php",
        cleanPaste:2,
        internalScript:false,
        inlineScript:false,
        internalStyle:false,
        inlineStyle:false
    });

    $("#form-register").submit( function () {
        var  zz_xuanzequxian =	$("#form-xian option:selected").text();




        //设置图片
        if($("#picstate").val()==1){
            alert("文件上传中，请稍后！");
            return false;
        }
        var val = "";
        $(".form-register-item-imgitem").each(function(index, domEle){
            if(val==""){
                val = $(domEle).attr("data");
            }else{
                val += ","+$(domEle).attr("data");
            }

        });
        $("#hidFileID").val(val);

        $("#result").val("");
        $('#gsjj').val(editor.getSource());//加上这句防止提交数据为空

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
        //对地区进行判断
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

        return true;
    });

    function isEmpty(obj){
        var val = obj.val();
        if( val == "" ){
            obj.next(".form-register-item-warn").html( obj.attr("error_info") );
            obj.focus();
            return true;
        }
        obj.next(".form-register-item-warn").html( "<span style='color:green;'>通过<span>" );
        return false;
    }


});