<?php /* Smarty version 2.6.25, created on 2017-09-03 08:09:48
         compiled from module/user_manager/master_point_manage.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>出售(玩家)</title>
<link rel="stylesheet" href="../../../admin/static/css/base.css" type="text/css">
<link rel="stylesheet" href="../../../admin/static/css/style.css" type="text/css">
<style type="text/css">

#all {text-align:left;margin-left:4px; line-height:1;}
#nodes {width:100%; float:left;border:1px #ccc solid;}
#result {width: 100%; height:100%; clear:both; border:1px #ccc solid;}

</style>
<script type="text/javascript" src="../../../admin/static/js/jquery.min.js"></script>
<script type="text/javascript" src="../../../admin/static/js/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">

function search_user() {
	var uid = $('#uid').val();
	if(uid==''){
		alert('用户UID不能为空！');
		return false;
	}
	$.ajax({
		type:'GET',
		url:'master_point.php?action=search_user',
		data:{uid:uid},
		dataType:'json',
		success:function(res){
			if(res!=0){
				$('#show_name').html('');
				$('#username').val(res.username);
				$('#userid').val(uid);
				$('#show_name').html('此用户存在(用户名：'+res.username+')，可以调整大师分！');
				$('#second_step').show();
			}else{
				$('#show_name').html('你输入的UID不存在');
			}			
		},
		error:function(res){
			$('#show_name').html('出现错误');
		} 
	})
}

function handle_user_charge() {
	var userid = $('#userid').val();
	var username = $('#username').val();
	if(userid==''){
		alert('请先确认用户id');
		return false;
	}
	var master_point = $('#master_point').val();
	if(master_point==''){
		alert('大师分数不能未空！');
		return false;
	}
	$('.handle_user_charge').attr('disabled',"disabled");
	$.ajax({
		type:'GET',
		url:'master_point.php?action=handle',
		data:{master_point:master_point,username:username,userid:userid},
		dataType:'json',
		success:function(res){
			if(res.errorcode==0){
				alert('调整完成！');
				location.href='master_point_manage.php';			
			}else{
				alert('调整失败！');
				location.href='master_point_manage.php';		
			}
		} 
	})
}

</script>


</head>

 <body>
 <div id="position">您当前位置：出售界面</div>
	<div>
		第一步：输入玩家用户UID <br>
	 	<input type="text" name="uid" id="uid" value="" > <br>
	 	第二步：搜索玩家 <br>
	 	<input name="search" value="搜索" onclick="search_user()" type="button"><br><br>
	</div>
 		
	<div style="display:none" id='second_step'>
		第三步：确定添加 <br>
		<input type="text" name="master_point" id="master_point" value="0"> <br>
		<input name="search" value="确定添加" onclick="handle_user_charge()" type="button" class="handle_user_charge"><br><br>
		<input type="hidden" name="username" value="" id="username" />
		<input type="hidden" name="userid" value="" id="userid" />
	</div>
	<div>
		<p><span id='show_name' style='color:red;'></span></p>
	</div>
 </body>
</html>