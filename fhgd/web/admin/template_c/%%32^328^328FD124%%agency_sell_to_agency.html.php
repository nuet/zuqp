<?php /* Smarty version 2.6.25, created on 2017-07-25 19:32:55
         compiled from module/agency/agency_sell_to_agency.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>出售(代理)</title>
<link rel="stylesheet" href="../../static/css/base.css" type="text/css">
<link rel="stylesheet" href="../../static/css/style.css" type="text/css">
<style type="text/css">

#all {text-align:left;margin-left:4px; line-height:1;}
#nodes {width:100%; float:left;border:1px #ccc solid;}
#result {width: 100%; height:100%; clear:both; border:1px #ccc solid;}

</style>
<script type="text/javascript" src="../../static/js/jquery.min.js"></script>
<script type="text/javascript" src="../../static/js/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript">

function search_agency() {
	var name = $('#uid').val();
	if(name==''){
		alert('代理id不能为空！');
		return false;
	}
	$.ajax({
		type:'GET',
		url:'agency_charge_to_agency.php?action=search_agency',
		data:{username:name},
		dataType:'json',
		success:function(res){
			if(res){
				$('#username').val(res.uid);
				$('#show_name').html('此代理存在，可以充值！');
				$('#second_step').show();
			}else{
				$('#show_name').html('非法操作，自己给自己充值/代理不存在！');
			}			
		} 
	})
}

function handle_agency_charge() {
	var username = $('#username').val();
	if(username==''){
		alert('请先确认代理uid');
		return false;
	}
	var dimond_number = $('#dimond_number').val();
	if(dimond_number==''){
		alert('钻石数不能未空！');
		return false;
	}
	if(dimond_number<=0){
		alert('钻石数不能未0一下的数！');
		return false;
	}
	$.ajax({
		type:'GET',
		url:'agency_charge_to_agency.php?action=handle',
		data:{dimond_number:dimond_number,username:username},
		dataType:'json',
		success:function(res){
			if(res){
				alert('出售完成！');
				location.href='agency_sell_to_agency.php';			
			}else{
				alert('出售失败！');
				location.href='agency_sell.php';		
			}
		} 
	})
}

</script>


</head>

 <body>
 <div id="position">您当前位置：出售界面</div>
	<div>
		第一步：输入代理用户ID <br>
	 	<input type="text" name="uid" id="uid" value="" > <br>
	 	第二步：搜索代理 <br>
	 	<input name="search" value="搜索" onclick="search_agency()" type="button"><br><br>
	</div>
 		
	<div style="display:none" id='second_step'>
		第三步：确定添加 <br>
		<input type="text" name="dimond_number" id="dimond_number" value="0"> <br>
		<input name="search" value="确定添加" onclick="handle_agency_charge()" type="button"><br><br>
		<input type="hidden" name="username" value="" id="username" />
	</div>
	<div>
		<p><span id='show_name' style='color:red;'></span></p>
	</div>
 </body>
</html>