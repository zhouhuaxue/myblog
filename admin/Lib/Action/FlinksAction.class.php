<?php
class FlinksAction extends Action
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
    	$type=D('Flinks');
    	$type_rs=$type->select();
    	//dump($type_rs);
    	$this->assign('type_rs',$type_rs);
    	$this->display();
    }
    public function edit($f_id=0)
    {
    	if($f_id)
    	{
    		$type=D('Flinks');
    		$type_rs=$type->find($f_id);
    		$this->assign('type_rs',$type_rs);
    	}
    	$this->display();
    }
    public function save($f_id=0)
    {
    	$data['f_name']=$this->_post('f_name');
    	$data['f_src']=$this->_post('f_src');
    	$data['f_status']=$this->_post('f_status');
    	$data['addtime']=time();
    	$type=D('Flinks');
    	if($f_id)
    	{
    		$rs=$type->where('f_id='.$f_id)->save($data);
    	}
    	else
    	{
    		$rs=$type->add($data);
    	}
    	//dump($rs);
    	if($rs)
    	{
    		//$this->success('保存数据成功！');
    		$this->redirect('Flinks/index', '',2, '保存数据成功！页面跳转中...');
    		exit;
    	}
    	else
    	{
    		$this->error('保存数据失败！');
    		exit;
    	}
    }
    public function delete($f_id)
    {
    	$type=D('Flinks');
    	$rs=$type->where('f_id='.$f_id)->delete();
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