<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//Dtd HTML 4.0 frameset//EN">
<html>
<head>
<title>网站管理后台</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta http-equiv=Pragma content=no-cache>
<meta http-equiv=Cache-Control content=no-cache>
<meta http-equiv=Expires content=-1000>
</head>

<frameset rows="70,*"  frameborder="NO" border="0" framespacing="0">
	<frame name='head' src="<?php echo U('admin/Index/head');?>" frameBorder=0 noResize scrolling=no>
		<frameset cols="220, *" rows="100%,*" id="frame">
			<frame name='left' src="<?php echo U('admin/Index/left');?>" noResize marginwidth="0" marginheight="0" frameborder="0" scrolling="yes" target="main">
			<frame name='main' src="<?php echo U('admin/Index/main');?>" noResize scrolling=yes marginheight="0" frameborder="0" scrolling="auto" target="_self">
		</frameset>
	</frameset>
<noframes>
</noframes>
</html>