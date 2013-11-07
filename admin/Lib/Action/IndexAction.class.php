<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	 public function  _initialize()
    {
        if(session('name')=="")
        {
        	$this->redirect('Common/login');
        }
    } 
    public function index()
    {
    	$this->display();
    }
}