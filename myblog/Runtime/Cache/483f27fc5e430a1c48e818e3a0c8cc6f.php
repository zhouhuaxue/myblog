<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>myblog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="__PUBLIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <style type="text/css">
      body{
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
    <script src="__PUBLIC__/bootstrap/js/jquery-1.10.2.min.js"></script>
    <script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="masthead">
        <h3 class="muted">myblog</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="/">主页</a></li>
                <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/Index/index/type_id/<?php echo ($vo["type_id"]); ?>"><?php echo ($vo["type_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="span8">

         <h3 class="text-center"> <?php echo ($post_rs["title"]); ?></h3>
         <div class="content">
            <?php echo ($post_rs["content"]); ?>
         </div>

         <div class="text-left">
          <hr/>
          <h4> 评论信息：</h4>
          <ul class="unstyled comments">
            <?php if(is_array($mycomment_rs)): $i = 0; $__LIST__ = $mycomment_rs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($i % 2 );++$i;?><li>
              <p><?php echo ($comment["m_content"]); ?><p>
              <p class="text-right"><?php echo ($comment["username"]); ?> <?php echo (date('Y-m-d',$comment["addtime"])); ?> 评</p>
               <hr/>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        
          <h4>添加评论</h4>
          <form action="__URL__/addcoment/post_id/<?php echo ($post_rs["post_id"]); ?>" id="comments" method="post">
            <label for="username">昵称：</label>
            <input type="text" class="" name="username" id="username"/>
            <label for=""username>评论内容：</label>
            <textarea name="m_content" class="span7" rows="6"></textarea>
            <p ><input value="添加评论" class="btn btn-primary" id="submit" type="submit"/></p>
          </form>
          <script type="text/javascript">
          $(function(){
            $("#submit").click(function(){

              if($("#username").val()==""){alert("用户昵称不能为空！");return false;}
              if($('textarea').val()==""){alert("留言信息不能为空!");return false;}
              var href=$('form').attr('action');
              $.post(href,{username:$("#username").val(),m_content:$('textarea').val(),time:new Date().getTime()},function(data){
                if(data.status==1)
                {
                  alert(data.msg);
                  $(".comments").append("<li><p>"+$('textarea').val()+"</p><p class='text-right'>"+$('#username').val()+"</p></li>");
                  $('textarea').val('');
                  $('#username').val('');
                }
                else
                {
                  alert(data.msg);
                }
              },'json');
              return false;
            });
          });
          </script>
         </div>
        </div>
       
<div class="span4">
          <div>
            <h3>热门标签</h3>
            <ul class="unstyled inline">
              <?php if(is_array($tags)): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><li><a class="label label-info" href="__APP__/Tags/index/tag/<?php echo ($tag["tag_name"]); ?>"><?php echo ($tag["tag_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
          <div>
            <h3>最新评论</h3>
             <ul class="unstyled text-center">
              <?php if(is_array($comment_rs)): $i = 0; $__LIST__ = $comment_rs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comments): $mod = ($i % 2 );++$i;?><li><a href="__APP__/Index/show/post_id/<?php echo ($comments["post_id"]); ?>">{<?php echo ($comments["title"]); ?>}: <?php echo ($comments["m_content"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
</div></div>
 <div class="row">
        <h3>友情链接</h3>
         <hr/>
        <ul class="unstyled inline">
          <?php if(is_array($flinks)): $i = 0; $__LIST__ = $flinks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><li> <a href="<?php echo ($f["f_src"]); ?>" target="_blank"><?php echo ($f["f_name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
        <div class="footer">
        <p>&copy; z_huaxue@sina.com</p>
      </div>
    </div>
  </body>
</html>