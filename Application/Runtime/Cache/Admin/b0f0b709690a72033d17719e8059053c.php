<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//Dtd HTML 4.0 transitional//EN">
<html><head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<LINK href="/mini/Public/admin/css/admin.css" type="text/css" rel="stylesheet">
</head>
<style>
    .gonggao{
      width: 80%;
      position: fixed;
      top: 15px;
      left: 6%;
      height:530px;
      padding-top: 65px;
      background-position: 0px -10px;
      background-size: 100% 95%;
      background-repeat: no-repeat;
      background-image: url("/mini/Public/images/gonggao_toutiao.png");
    }
    .close_gonggao{
      position: fixed;
      right:230px;
      top:55px;
      width:20px;
      height:20px;
      background-size: 100% 95%;
      background-repeat: no-repeat;
      background-image: url("/mini/Public/images/close_gonggao.png");
    }
</style>
<body>
<table cellSpacing=0 cellPadding=0 width="90%" align=center border=0 style="margin:15% 10% 10% 20%">
  <tr height=100>
    <td align=middle width=100><IMG height=100 src="/mini/Public/admin/images/admin_p.gif" 
      width=90></td>
    <td width=60>&nbsp;</td>
    <td>
      <table height=100 cellSpacing=0 cellPadding=0 width="100%" border=0>
        
        <tr>
            <td><?php echo date("Y-m-d H:i");?></td></tr>
        <tr>
            <td style="FONT-WEIGHT: bold; FONT-SIZE: 16px"><?php echo ($_SESSION['user_info']['user_nicename']); ?></td></tr>
        <tr>
            <td>欢迎进入Mini娱乐后台中心！</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td colSpan=3 height=10></td>
  </tr>
</table>
</body>
</html>