<?php
	namespace Admin\Model;
	use Think\Model;
	class UsersModel extends  Model{
		public function checklogin(){
			$where['status']='1';
			$where['user_login']=I("post.user_login");
			$where['password']=MD5(I("post.user_pass"));
			$status=M('users')->where($where)->find();
			if($status){
				$data['login_time']=date("Y-m-d H:i:s");
				M('users')->where('id='.$status['id'])->save($data);
				$_SESSION['user_info']['id']=$status['id'];
				$_SESSION['user_info']['user_login']=$status['user_login'];
				$_SESSION['user_info']['nick_name']=$status['nick_name'];
				$_SESSION['user_info']['update_time']=$status['update_time'];
				$_SESSION['user_info']['login_time']=$status['login_time'];
				return '1';
			}else{
				return '0';
			}
		}

	}