<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//Dtd HTML 4.0 transitional//EN">
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="/mini/Public/admin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="/mini/Public/admin/bootstrap/css/bootstrap-theme.min.css" />
<style type="text/css">
*{
  margin: 0;
  padding: 0;
}
.header{
  width: 100%;
  height: 70px;
  background: #df2213;
}
.left{
  width: 16%;
  height: 70px;
  float: left;
  text-align: center;
  line-height:70px;
  float: left;
}
.left .logo{
  color:#fff;
  text-decoration: none;
}
.left .logo img{
  margin-top:10px;
}
.center{
  width: 66%;
  height:70px;
  float: left;
  color: #fff;
  line-height:70px;
  text-align: center;
  font-family: "Microsoft YaHei" ! important; 
  font-weight: bold;
  font-size: 27px;
}
.right{
  float: left;
  width: 18%;
  height: 70px;
}
.right a{
  color:#fff;
  margin-left: 20px;
  line-height: 70px;
  text-decoration:none;
}
</style>
</head>

<body>
  <div class="header">
    <div class="left">
      <a  href="<?php echo U('Index/Index/index');?>" target="_blank" class="logo">
        <img src="" alt="" title="">
      </a>
    </div>
    <div class="center">
		Mini娱乐后台
    </div>
    <div class="right">
        <span style="color:#fff;">当前用户：
          <i class="glyphicon glyphicon-user"></i> <?php echo ($_SESSION['user_info']['user_nicename']); ?></span>
        <a onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo U('Admin/Login/quit');?>" target='_top'>退出系统</a> 
    </div>
  </div>
</body>
</html>