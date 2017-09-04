<?php /* Smarty version 2.6.25, created on 2017-09-04 16:10:42
         compiled from left.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta id="viewport" name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
<title>公共左</title>
<link rel="stylesheet" href="../../web/admin/static/css/base.css" type="text/css">
<style type="text/css">
body { margin:3px; padding:0px; font-size:12px; font-family:"Courier New", Courier, monospace; background:#86C1FF; margin:3 0 0 0;}
.tdborder {
	border-left: 1px solid #43938B;
	border-right: 1px solid #43938B;
	border-bottom: 1px solid #43938B;
}
.tdrl {
	border-left: 1px solid #788C47;
	border-right: 1px solid #788C47;
}
.topitem {
	cursor: hand;
	background-image:url(../admin/static/images/mtbg1.gif);
	height:24px;
	width:95%;
	border-right: 1px solid #2FA1DB;
	border-left: 1px solid #2FA1DB;
	clear:left
}
.itemsct {
	border-right: 1px solid #2FA1DB;
	border-left: 1px solid #2FA1DB;
	background-color:#EEFAFE;
	margin-bottom:6px;
	width:95%;
}
.itemem {
	text-align:left;
	clear:left;
	border-bottom: 1px solid #2FA1DB;
	height:21px;
}
.tdl {
	float:left;
	margin-top:2px;
	margin-left:6px;
	margin-right:5px
}
.tdr {
	float:left;
	margin-top:2px
}
.topl {
	float:left;

	margin-right:3px;
}
.topr {
	padding-top:4px;
	cursor:pointer;
}
.toprt {
	text-align:center;
	padding-top:3px
}
body {
	scrollbar-base-color:#8CC1FE;
	scrollbar-arrow-color:#FFFFFF;
	scrollbar-shadow-color:#6994C2
}
.green{
	background-color:#CCFFCC;
}


</style>
<script type="text/javascript" src="../..//web/admin/static/js/jquery.min.js"></script>
<script type="text/javascript">
showHide = function(objID) {
	$('#' + objID).toggle();
}
$(document).ready(function(){
	$(".itemem").click(function(){
		$(".itemem").removeClass("green");
		$(this).addClass("green");
	});
});

</script>
</head>

<body>
	<div id="all">
    	<div class='topitem' align='left'>
    		<div class='topl'></div>
    		<div class='topr'>目录</div>
  		</div>

    	<div onClick='showHide("items1")' class='topitem' align='left'>
        	<div class='topl'><img src='./static/images/mtimg1.gif' width='21' height='24' border='0'></div>
        	<div class='topr'>数据总览</div>
      </div>
      <div style='clear:both'></div>
      <div style='display:block' id='items1' class='itemsct'>
		  <?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['user_power']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?>
		    <?php if ($this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['man_type'] == 'GAME_DATA'): ?>
		    <dl class='itemem'>
          <dd class='tdl'><img src='./static/images/newitem.gif' width='7' height='10' alt=''/></dd>
          <dd class='tdr'><a href=<?php echo $this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['url']; ?>
 target='main_frame' ><?php echo $this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['desc']; ?>
</a></dd>
        </dl>
		    <?php endif; ?>
      <?php endfor; endif; ?>
     	</div>

      <div onClick='showHide("items1")' class='topitem' align='left'>
          <div class='topl'><img src='./static/images/mtimg1.gif' width='21' height='24' border='0'></div>
          <div class='topr'>游戏管理</div>
      </div>
      <div style='clear:both'></div>
      <div style='display:block' id='items1' class='itemsct'>
      <?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['user_power']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?>
        <?php if ($this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['man_type'] == 'GAME_MANAGER'): ?>
        <dl class='itemem'>
          <dd class='tdl'><img src='./static/images/newitem.gif' width='7' height='10' alt=''/></dd>
          <dd class='tdr'><a href=<?php echo $this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['url']; ?>
 target='main_frame' ><?php echo $this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['desc']; ?>
</a></dd>
        </dl>
        <?php endif; ?>
      <?php endfor; endif; ?>
      </div>

      <div onClick='showHide("items1")' class='topitem' align='left'>
          <div class='topl'><img src='./static/images/mtimg1.gif' width='21' height='24' border='0'></div>
          <div class='topr'>用户管理</div>
      </div>
      <div style='clear:both'></div>
      <div style='display:block' id='items1' class='itemsct'>
      <?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['user_power']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?>
        <?php if ($this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['man_type'] == 'USER_MANAGER'): ?>
        <dl class='itemem'>
          <dd class='tdl'><img src='./static/images/newitem.gif' width='7' height='10' alt=''/></dd>
          <dd class='tdr'><a href=<?php echo $this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['url']; ?>
 target='main_frame'><?php echo $this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['desc']; ?>
</a></dd>
        </dl>
        <?php endif; ?>
      <?php endfor; endif; ?>
      </div>

      <div onClick='showHide("items1")' class='topitem' align='left'>
          <div class='topl'><img src='./static/images/mtimg1.gif' width='21' height='24' border='0'></div>
          <div class='topr'>充值管理</div>
      </div>
      <div style='clear:both'></div>
      <div style='display:block' id='items1' class='itemsct'>
      <?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['user_power']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?>
        <?php if ($this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['man_type'] == 'RECHARGE_MANAGER'): ?>
        <dl class='itemem'>
          <dd class='tdl'><img src='./static/images/newitem.gif' width='7' height='10' alt=''/></dd>
          <dd class='tdr'><a href=<?php echo $this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['url']; ?>
 target='main_frame'><?php echo $this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['desc']; ?>
</a></dd>
        </dl>
        <?php endif; ?>
      <?php endfor; endif; ?>
      </div>

      <div onClick='showHide("items1")' class='topitem' align='left'>
          <div class='topl'><img src='./static/images/mtimg1.gif' width='21' height='24' border='0'></div>
          <div class='topr'>代理系统</div>
      </div>
      <div style='clear:both'></div>
      <div style='display:block' id='items1' class='itemsct'>
      <?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['user_power']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?>
        <?php if ($this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['man_type'] == 'AGENCY_MANAGER'): ?>
        <dl class='itemem'>
          <dd class='tdl'><img src='./static/images/newitem.gif' width='7' height='10' alt=''/></dd>
          <dd class='tdr'><a href=<?php echo $this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['url']; ?>
 target='main_frame'><?php echo $this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['desc']; ?>
</a></dd>
        </dl>
        <?php endif; ?>
      <?php endfor; endif; ?>
      </div>
      <?php if ($this->_tpl_vars['gid'] <= 3): ?>
      <div onClick='showHide("items1")' class='topitem' align='left'>
          <div class='topl'><img src='./static/images/mtimg1.gif' width='21' height='24' border='0'></div>
          <div class='topr'>管理员系统</div>
      </div>
      <div style='clear:both'></div>
      <div style='display:block' id='items1' class='itemsct'>
      <?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['user_power']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?>
        <?php if ($this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['man_type'] == 'ADMIN_MANAGER'): ?>
        <dl class='itemem'>
          <dd class='tdl'><img src='./static/images/newitem.gif' width='7' height='10' alt=''/></dd>
          <dd class='tdr'><a href=<?php echo $this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['url']; ?>
 target='main_frame'><?php echo $this->_tpl_vars['user_power'][$this->_sections['loop']['index']]['desc']; ?>
</a></dd>
        </dl>
        <?php endif; ?>
      <?php endfor; endif; ?>
      </div>
      <?php endif; ?>
    </div>
</body>
</html>