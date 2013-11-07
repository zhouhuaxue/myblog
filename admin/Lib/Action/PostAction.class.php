<?php
class PostAction extends Action
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
    	$type=D('Posts');
    	$type_rs=$type->select();
    	//dump($type_rs);
    	$this->assign('type_rs',$type_rs);
    	$this->display();
    }
    public function edit($post_id=0)
    {
    	if($post_id)
    	{
    		$type=D('Posts');
    		$type_rs=$type->find($post_id);
    		$this->assign('type_rs',$type_rs);
            $tag=D('Tags');
            $tag_rs=$tag->where('post_id='.$post_id)->select();
            $tags="";
            foreach ($tag_rs as $tag) 
            {
                $tags.=$tag['tag_name']."|";
            }
            $this->assign('tags',substr($tags, 0,-1));
    	}
        $types=D('Post_type');
        $this->assign('post_type',$types->select());
    	$this->display();
    }
    public function save($post_id=0)
    {
    	$data['title']=$this->_post('title');
    	$data['type_id']=$this->_post('type_id');
        $data['sn_title']=$this->_post('sn_title');
        $data['content']=$this->_post('content');
        $data['addtime']=time();
        $tags=$this->_post('tags');
        $tag=D('Tags');
    	$type=D('Posts');
    	if($post_id)
    	{
    		$rs=$type->where('post_id='.$post_id)->save($data);
            $tag->where('post_id='.$post_id)->delete();
            foreach (explode('|', $tags) as $value) 
            {
                $t_data['post_id']=$post_id;
                $t_data['tag_name']=$value;
                $tag->add($t_data);
            }
    	}
    	else
    	{
    		$rs=$type->add($data);
              foreach (explode('|', $tags) as $value) 
            {
                $t_data['post_id']=$rs;
                $t_data['tag_name']=$value;
                $tag->add($t_data);
            }
    	}
    	//dump($rs);
    	if($rs)
    	{
    		//$this->success('保存数据成功！');
    		$this->redirect('Post/index', '',2, '保存数据成功！页面跳转中...');
    		exit;
    	}
    	else
    	{
    		$this->error('保存数据失败！');
    		exit;
    	}
    }
    public function delete($post_id)
    {
    	$type=D('Posts');
    	$rs=$type->where('post_id='.$post_id)->delete();
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