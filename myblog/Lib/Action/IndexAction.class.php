<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends PublicAction {
    public function  _initialize()
    {
        $this->showinfo();
    } 
    public function index($type_id=0)
    {
         $type_id=intval($type_id);
         $post=D('Posts');
        if($type_id)
        {
            $condition['type_id']=$type_id;
            $post_rs=$post->where($condition)->order('addtime desc')->limit('10')->select();
        }
        else
        {
             $post_rs=$post->order('addtime desc')->limit('10')->select();
        }
        $this->assign('post_rs',$post_rs);
    	$this->display();
    }
    /**
    *显示一片文章的详细信息
    */
    public function show($post_id=0)
    {
        $post_id=intval($post_id);
        if($post_id)
        {
            $post=D('Posts');
            //增加一次点击量
            $post->where('post_id='.$post_id)->setInc('view'); 
            $comments=D('Comments');
            $post_rs=$post->find($post_id);
            $comments_rs=$comments->where('post_id='.$post_id)->order('addtime desc')->select();
            $this->assign('post_rs',$post_rs);
            $this->assign('mycomment_rs',$comments_rs);
            $this->display();
        }
        else
        {
            echo "没有您查看的文章";
            $this->error();
        }
    	
    }
    public function addcoment($post_id)
    {
        $post_id=intval($post_id);
        if($post_id)
        {
            $data['post_id']=$post_id;
            $data['username']=$this->_post('username');
            $data['m_content']=$this->_post('m_content');
            $data['addtime']=time();
            $comments=D('Comments');
             if($comments->add($data))
             {
                $msg=array('status'=>1,'msg'=>'保存留言成功！');
             }
             else
             {
                $msg=array('status'=>0,'msg'=>'保存留言失败！');
             }
        }
        else
        {
             $msg=array('status'=>0,'msg'=>'保存留言失败！');
        }
        echo json_encode($msg,TRUE);
    }
}