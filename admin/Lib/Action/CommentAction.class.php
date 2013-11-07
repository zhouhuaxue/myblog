<?php 
class CommentAction extends Action
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
    	$type=D('Comments');
    	$type_rs=$type->select();
    	//dump($type_rs);
    	$this->assign('comment_rs',$type_rs);
    	$this->display();
    }
     public function delete($comment_id)
    {
        $type=D('Comments');
        $rs=$type->where('comment_id='.$comment_id)->delete();
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
?>