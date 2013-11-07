<?php
class TagsAction extends PublicAction
{
	 public function  _initialize()
    {
        $this->showinfo();
    } 
    public function index($tag)
    {
    	$tags=new Model();
    	$sql="select * from tags,posts where tag_name='$tag' and posts.post_id=tags.post_id group by tags.post_id";
    	$rs=$tags->query($sql);
    	$this->assign('post_rs',$rs);
    	$this->display();
    }
}