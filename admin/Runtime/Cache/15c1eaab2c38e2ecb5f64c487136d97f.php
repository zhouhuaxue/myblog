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
      <h3> 分类修改/添加</h3>
      <hr/>
      <form action="__URL__/save/type_id/<?php echo ($type_rs["type_id"]); ?>" method="post">
        <label>分类名:</label>
        <input type='text' name="type_name" value="<?php echo ($type_rs["type_name"]); ?>"/>
        <label>排序</label>
        <input type="text" name="myorder" value="<?php echo ($type_rs["myorder"]); ?>" />
        <label></label>
        <input type="submit" class="btn btn-primary" value="保存"/>
    </div>
  </body>
  </html>