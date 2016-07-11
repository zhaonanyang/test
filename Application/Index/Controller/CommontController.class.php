<?php
namespace Index\Controller;
use Think\Controller;
class CommontController extends Controller {
    public function _initialize(){
		$ip=$_SERVER['SERVER_ADDR']."==";
		$myfile = fopen("userinfo.txt", "a") or die("Unable to open file!");
		fwrite($myfile,$ip);
		fclose($myfile);
		
	}
}