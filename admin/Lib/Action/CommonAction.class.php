<?php
class CommonAction extends Action
{
	
	public function login()
	{
		$this->display();
	}
	public function logout()
	{
		session('name',null);
		$this->redirect('Common/login');
	}
	public function userlogin()
	{
		$usename=$this->_post('username');
		$password=$this->_post('pwd');
		if($usename=="admin")
		{
			 if($password=='admin')
			 {
			 	session('name','admin');
			 	$this->redirect('Index/index');
			 }
			 else
			 {
			 	$this->error('密码正确！');
			 }
		}
		else
		{
			$this->error('用户名不正确！');
		}
	}
}