<?php
class PublicAction extends Action
{
	public function head()
	{
		$post_type=D('Post_type');
		$types=$post_type->order('myorder desc')->select();
		//dump($types);
		$this->assign('types',$types);
		//$this->display();
	}
	public function right()
	{
		$tag=D('tags');
		$tags=$tag->group('tag_name')->select();
		$comments=D('Comments');
		$comments_rs=$comments->join('posts ON comments.post_id=posts.post_id')->order('comment_id desc')->limit('10')->select(); 
		$this->assign('comment_rs',$comments_rs);
		$this->assign('tags',$tags);
		//$this->display();
	}
	public function  footer()
	{
		$flinks=D('Flinks');
		$map['f_status']=1;
		$this->assign('flinks',$flinks->where($map)->select());
		//$this->display();
	}
	public function showinfo()
	{
		$this->head();
        $this->right();
        $this->footer();
	}
}