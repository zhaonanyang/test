<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends CommontController {
	//登录验证
    public function checklogin(){
		if($_POST){
			$status=D("users")->checklogin();
			if($status=='1'){
				echo "<script>window.location.href='".U('Admin/Index/index')."'</script>";
			}
		}else{
			echo "<script>window.location.href='".U('Admin/Login/index')."'</script>";
		}
	}
	//退出登录
    public function quit(){
		unset($_SESSION['user_info']);
		$this->display("Login/index");
		echo "<script>window.location.href='".U('Admin/Login/index')."'</script>";
	}
}