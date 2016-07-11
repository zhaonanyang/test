<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommontController {
	public function _initialize(){
		echo "ddfe";
	}
    public function index(){
        $this->assign("a","3333");
		//$this->display();
    }
}