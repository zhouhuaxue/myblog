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
      <h3> 分类管理</h3>
      <hr/>
      <table class="table table-bordered">
        <tr><th>#</th><th>类型</th><th>排序</th><th>操作</th></tr>
        <?php if(is_array($type_rs)): $i = 0; $__LIST__ = $type_rs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($type["type_id"]); ?></td><td><?php echo ($type["type_name"]); ?></td><td><?php echo ($type["myorder"]); ?></td><td><a href="__URL__/edit/type_id/<?php echo ($type["type_id"]); ?>"> 编辑</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="__URL__/delete/type_id/<?php echo ($type["type_id"]); ?>">删除</a></td></tr/><?php endforeach; endif; else: echo "" ;endif; ?>
      </table>
      <a href="__URL__/edit" class="btn btn-primary"> 添加</a>
    </div>
  </body>
  </html>