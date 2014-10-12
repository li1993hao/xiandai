$(function(){
    $("#form1").submit( function () {
        var zz_xuanzequxian = $("#form-xian option:selected").text();
        //设置图片
        if($("#picstate").val()==1){
        alert("文件上传中，请稍后！");
        return false;
        }
    var val = "";
//    $(".form-register-item-imgitem").each(function(index, domEle){
//        if(val==""){
//        val = $(domEle).attr("data");
//        }else{
//        val += ","+$(domEle).attr("data");
//        }
//
//    });
    //alert("ccc")
    $("#hidFileID").val(val);
    //alert("ddd");
    $("#result").val("");

        //alert("eee");
    //$('#gsjj').val(editor.getSource());//加上这句防止提交数据为空

    //alert("fff");
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

    });
    function isEmpty(obj){

        var val = obj.val();
//        alert(val)
        if( val == "" ){
            obj.next(".form-register-item-warn").html( obj.attr("error_info"));
            obj.focus();
            return true;
        }
        obj.next(".form-register-item-warn").html( "<span style='color:green;'>通过<span>" );
        return false;
    }
//    $('#file_upload').uploadify({
//        'formData'     : {
//        },
//    'swf'      : web_url+'/common/libs/upload/uploadify.swf',
//    'uploader' : web_url+'/common/fileupload/filetype/img',
//    'queueSizeLimit': 1 ,
//    'multi':false,
//    'auto':true,
//    'fileTypeDesc':"请选择图片文件",
//    'fileTypeExts':'*.jpg;*.jpeg;*.png;*.gif;*.bmp',
//    'fileSizeLimit': '4096KB',
//    'buttonText':"选择图片",
//    'width' : 100,
//    'height':20,
//    'cancelImg' : web_url+'/common/libs/upload/uploadify-cancel.png',
//    'onUploadError' : function(file, errorCode, errorMsg, errorString) {
//        alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
//        },
//    'onUploadStart' : function(file) {
//        $("#picstate").val("1");
//        },
//    'onCancel' : function(file) {
//        $("#picstate").val("0");
//        },
//    'onUploadSuccess' : function(file, data, response) {
//        //alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
//        // alert(data);
//        var myObject = eval('(' + data + ')');
//        //alert(myObject.result);
//        //alert(myObject.msg);
//        if(myObject.result == '0'){
//        $("#img").html(myObject.msg);
//        $("#picstate").val("0");//0表示没有图片上传 1表示图片上传中 2表示图片上传成功
//        }else{
//        var info = "<div data=\""+myObject.result+"\" class=\"form-register-item-imgitem\"><img alt=\"资质证明\" src=\""+myObject.msg+"\"><div title=\"删除\" class=\"form-register-item-imgitem-close\">X</div></div>";
//        $(".form-register-item-imglist").append(info);
//        $("#picstate").val("2");
//        }
//
//    }
//    });

    $(".form-register-item-imgitem-close").live('click', function() {
        var id = $(this).parent().attr("data");
        //alert(id);
        $(this).parent().remove();
        $.ajax({
        type:"POST",
        url:web_php_url+"/common/Delfile",
        data: "id="+id,
        async:false,
        success:function(msg){
        },
    error:function(o){
        }
    });




    function isEmpty(obj){
        var val = obj.val();
        if( val == "" ){
        //alert(obj.html());
        alert(obj.attr("error_info"));
        obj.next(".form-register-item-warn").html( obj.attr("error_info") );
        obj.focus();
        return true;
        }
    obj.next(".form-register-item-warn").html( "<span style='color:green;'>通过<span>" );
        return false;
    }
                                //$("#gsjj").text('<{$companydetail.com_intro}>');
                                    });
    function getArea(htmlId,pId){
    $.ajax({
        url:"<{$web_url}>/index.php/common/area/parentid/"+pId,
type:"POST",
async:false,
dataType:"json",
success:function(data){
    var str = "";
    if(htmlId == "prov"){
    if(provid == ""){
    str += "<option value=\"0\" selected=\"selected\" disabled=\"disabled\">选择省份</option>";
    }else{
    str += "<option value=\"0\" disabled=\"disabled\" >选择省份</option>";
    }
}else if(htmlId == "city"){
    if(cityid == ""){
    str += "<option value=\"0\" selected=\"selected\" >选择城市</option>";
    }else{
    str += "<option value=\"0\"  >选择城市</option>";
    }

}else{
    if(countryid == ""){
    str += "<option value=\"0\" selected=\"selected\">选择县区</option>";
    }else{
    str += "<option value=\"0\"  >选择县区</option>";
    }

}
//alert(pId);
if(data.json.state == 1){
    $.each(data.json.data.list,function(index,item){
        if(item.area_id == provid || item.area_id == cityid || item.area_id == countryid){
            str +="<option value=\""+item.area_id+"\" selected=\"selected\">"+item.area_name+"</option>";
        }else{
    str +="<option value=\""+item.area_id+"\">"+item.area_name+"</option>";
    }
});
$("#"+htmlId).html(str);
}else{
    $("#"+htmlId).html(str);
    }
},
error:function(msg){
    alert("网络出现问题！");
    }
});
}

    $("#form-sheng").change(function() {

//        alert();
        var areaId = $(this).val();
            resetSelect("#form-shi","选择城市");
            resetSelect("#form-xian","选择县区");

            if(areaId == "0" || areaId == "" || areaId==null){
                //alert("muyou");
                return false;
            }
        var parentid = areaId;
//        alert(areaId);
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