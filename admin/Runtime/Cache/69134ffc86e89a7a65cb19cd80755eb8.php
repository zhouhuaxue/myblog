<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <title>myblog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="__PUBLIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="__PUBLIC__/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
	<script src="__PUBLIC__/bootstrap/js/jquery-1.10.2.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
    <!-- bootstrap end -->
  </head>
  <body>
    <div class="span8 offset1">
      <h3> 评论管理</h3>
      <hr/>
      <table class="table table-hover">
        <tr><th>#</th><th>用户</th><th>内容</th><th>时间</th><th>操作</th></tr>
        <?php if(is_array($comment_rs)): $i = 0; $__LIST__ = $comment_rs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($type["comment_id"]); ?></td><td><?php echo (mb_substr($type["username"],0,12,'utf8')); ?></td><td><?php echo (mb_substr($type["m_content"],0,12,'utf8')); ?></td><td><?php echo (date("Y-m-d",$type["addtime"])); ?></td><td><a href="__URL__/delete/comment_id/<?php echo ($type["comment_id"]); ?>">删除</a></td></tr/><?php endforeach; endif; else: echo "" ;endif; ?>
      </table>
      
    </div>
  </body>
  </html>