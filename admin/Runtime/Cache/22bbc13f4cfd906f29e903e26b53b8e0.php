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
      <h3> 文章修改/添加</h3>
      <hr/>
      <form action="__URL__/save/post_id/<?php echo ($type_rs["post_id"]); ?>" method="post">
        <label>文章分类：</label>
        <select  name="type_id">
          <?php if(is_array($post_type)): $i = 0; $__LIST__ = $post_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type["type_id"]); ?>" <?php if($type['type_id'] == $type_rs['type_id']): ?>selected<?php endif; ?> ><?php echo ($type["type_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <label>文章标题:</label>
        <input type='text' name="title" class="span5" value="<?php echo ($type_rs["title"]); ?>"/>
        <label> 副标题</label>
        <input type="text" name="sn_title" class="span8" value="<?php echo ($type_rs["sn_title"]); ?>" />
        <label>内容：</label>
         <textarea name="content" rows="15" class="span8"><?php echo ($type_rs["content"]); ?> </textarea>
         <label>标签:( 多个用|分割)</label>
         <input name="tags" type="text" class="span6" value="<?php echo ($tags); ?>"/>
         <label></label>
        <input type="submit" class="btn btn-primary" value="保存"/>
    </div>
  </body>
  </html>