<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends CommontController {
	
    public function index(){
        $this->assign("a","8888");
		$this->display();
    }
}