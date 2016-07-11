<?php
namespace Index\Controller;
use Think\Controller;
class UserController extends Controller {
	public function _initialize(){
		echo "ddfe";
	}
    public function index(){
        $this->assign("a","3333");
		//$this->display();
    }
}