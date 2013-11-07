<?php
class TypeAction extends Action
{
	 public function  _initialize()
    {
        if(session('name')=="")
        {
        	$this->redirect('Common/login');
        }
    } 
    public function index()
    {
    	$type=D('Post_type');
    	$type_rs=$type->select();
    	//dump($type_rs);
    	$this->assign('type_rs',$type_rs);
    	$this->display();
    }
    public function edit($type_id=0)
    {
    	if($type_id)
    	{
    		$type=D('Post_type');
    		$type_rs=$type->find($type_id);
    		$this->assign('type_rs',$type_rs);
    	}
    	$this->display();
    }
    public function save($type_id=0)
    {
    	$data['type_name']=$this->_post('type_name');
    	$data['myorder']=$this->_post('myorder');
    	$type=D('Post_type');
    	if($type_id)
    	{
    		$rs=$type->where('type_id='.$type_id)->save($data);
    	}
    	else
    	{
    		$rs=$type->add($data);
    	}
    	//dump($rs);
    	if($rs)
    	{
    		//$this->success('保存数据成功！');
    		$this->redirect('Type/index', '',2, '保存数据成功！页面跳转中...');
    		exit;
    	}
    	else
    	{
    		$this->error('保存数据失败！');
    		exit;
    	}
    }
    public function delete($type_id)
    {
    	$type=D('Post_type');
    	$rs=$type->where('type_id='.$type_id)->delete();
    	if($rs)
    	{
    		$this->success('删除数据成功！');
    	}
    	else
    	{
    		$this->error('数据删除失败！');
    	}
    }
}