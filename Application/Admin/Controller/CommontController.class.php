<?php
namespace Admin\Controller;
use Think\Controller;
class CommontController extends Controller {
    public function _initialize(){
		$ip=$_SERVER['SERVER_ADDR']."==";
		$myfile = fopen("userinfo.txt", "a") or die("Unable to open file!");
		fwrite($myfile,$ip);
		fclose($myfile);
		$session_user_info=$_SESSION['user_info'];
		//var_dump($_SESSION['user_info']);
		if(!$session_user_info){
			$this->display("Login/index");
		}
	}
}