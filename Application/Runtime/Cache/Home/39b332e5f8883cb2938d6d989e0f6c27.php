<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆</title>
</head>
<body>
<div style="margin: 100px;">
    <label for="">用户：</label>
    <a href="<?php echo U('Index/weibo_login');?>"><img src="<?php echo ($data["img"]); ?>" alt="" style="width: 50px;height: 50px; border: #9B410E dotted 1px"></a>

</div>
<a style="margin-left: 100px;" href="<?php echo U('Index/logout');?>">退出登陆</a>
</body>
</html>
<script>

</script>