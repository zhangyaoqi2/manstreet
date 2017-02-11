<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
    <div class="logo margin-big-left fadein-top">
        <h1><img src="images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
    </div>
    <div class="head-l"><a class="button button-little bg-green" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a href="##" class="button button-little bg-blue"><span class="icon-wrench"></span> 清除缓存</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="?r=login/loginout"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2><span class="icon-pencil-square-o"></span>商品模块</h2>
    <ul style="display:block">

        <li><a href="<?php echo Url::toRoute(['bowen/index']);?>"><span class="icon-caret-right"></span>添加商品</a></li>
        <li><a href="<?php echo Url::toRoute(['classification/add']);?>"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="<?php echo Url::toRoute(['recycle/index']);?>"><span class="icon-caret-right"></span>回收站</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>个人中心</h2>
    <ul style="display:block">

        <li><a href="<?php echo Url::toRoute(['bowen/index']);?>"><span class="icon-caret-right"></span>添加商品</a></li>
        <li><a href="<?php echo Url::toRoute(['classification/add']);?>"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="<?php echo Url::toRoute(['recycle/index']);?>"><span class="icon-caret-right"></span>回收站</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>商品购买</h2>
    <ul style="display:block">

        <li><a href="<?php echo Url::toRoute(['bowen/index']);?>"><span class="icon-caret-right"></span>添加商品</a></li>
        <li><a href="<?php echo Url::toRoute(['classification/add']);?>"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="<?php echo Url::toRoute(['recycle/index']);?>"><span class="icon-caret-right"></span>回收站</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>会员管理</h2>
    <ul style="display:block">

        <li><a href="<?php echo Url::toRoute(['bowen/index']);?>"><span class="icon-caret-right"></span>添加商品</a></li>
        <li><a href="<?php echo Url::toRoute(['classification/add']);?>"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="<?php echo Url::toRoute(['recycle/index']);?>"><span class="icon-caret-right"></span>回收站</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>订单管理</h2>
    <ul style="display:block">

        <li><a href="<?php echo Url::toRoute(['bowen/index']);?>"><span class="icon-caret-right"></span>添加商品</a></li>
        <li><a href="<?php echo Url::toRoute(['classification/add']);?>"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="<?php echo Url::toRoute(['recycle/index']);?>"><span class="icon-caret-right"></span>回收站</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>售后管理</h2>
    <ul style="display:block">

        <li><a href="<?php echo Url::toRoute(['bowen/index']);?>"><span class="icon-caret-right"></span>添加商品</a></li>
        <li><a href="<?php echo Url::toRoute(['classification/add']);?>"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="<?php echo Url::toRoute(['recycle/index']);?>"><span class="icon-caret-right"></span>回收站</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>文章管理</h2>
    <ul style="display:block">

        <li><a href="<?php echo Url::toRoute(['bowen/index']);?>"><span class="icon-caret-right"></span>添加商品</a></li>
        <li><a href="<?php echo Url::toRoute(['classification/add']);?>"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="<?php echo Url::toRoute(['recycle/index']);?>"><span class="icon-caret-right"></span>回收站</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>相册管理</h2>
    <ul style="display:block">

        <li><a href="<?php echo Url::toRoute(['bowen/index']);?>"><span class="icon-caret-right"></span>添加商品</a></li>
        <li><a href="<?php echo Url::toRoute(['classification/add']);?>"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="<?php echo Url::toRoute(['recycle/index']);?>"><span class="icon-caret-right"></span>回收站</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>形象设计管理</h2>
    <ul style="display:block">

        <li><a href="<?php echo Url::toRoute(['bowen/index']);?>"><span class="icon-caret-right"></span>添加商品</a></li>
        <li><a href="<?php echo Url::toRoute(['classification/add']);?>"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="<?php echo Url::toRoute(['recycle/index']);?>"><span class="icon-caret-right"></span>回收站</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>活动管理</h2>
    <ul style="display:block">

        <li><a href="<?php echo Url::toRoute(['bowen/index']);?>"><span class="icon-caret-right"></span>添加商品</a></li>
        <li><a href="<?php echo Url::toRoute(['classification/add']);?>"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="<?php echo Url::toRoute(['recycle/index']);?>"><span class="icon-caret-right"></span>回收站</a></li>
    </ul>
    <h2><span class="icon-pencil-square-o"></span>评论管理</h2>
    <ul style="display:block">

        <li><a href="<?php echo Url::toRoute(['bowen/index']);?>"><span class="icon-caret-right"></span>添加商品</a></li>
        <li><a href="<?php echo Url::toRoute(['classification/add']);?>"><span class="icon-caret-right"></span>分类管理</a></li>
        <li><a href="<?php echo Url::toRoute(['recycle/index']);?>"><span class="icon-caret-right"></span>回收站</a></li>
    </ul>
    <h2><span class="icon-user"></span>商品权限模块</h2>
    <ul style="display:block">
        <li><a href="<?php echo URL::toRoute(['rbac/list'])?>"><span class="icon-caret-right"></span>权限</a></li>
        <li><a href="<?php echo URL::toRoute(['rbac/role'])?>"><span class="icon-caret-right"></span>添加角色</a></li>
        <li><a href="<?php echo URL::toRoute(['rbac/rb'])?>"><span class="icon-caret-right"></span>角色分配</a></li>
        <li><a href="<?php echo URL::toRoute(['rbac/fenpei'])?>"><span class="icon-caret-right"></span>用户分配角色</a></li>
        <!--    <li><a href="add.html" target="right"><span class="icon-caret-right"></span>添加内容</a></li>-->
        <!--    <li><a href="cate.html" target="right"><span class="icon-caret-right"></span>分类管理</a></li>        -->
    </ul>

</div>
<script type="text/javascript">
    $(function(){
        $(".leftnav h2").click(function(){
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        })
        $(".leftnav ul li a").click(function(){
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });
</script>
<ul class="bread">
    <li><a href="{:U('Index/info')}" target="right" class="icon-home"> 首页</a></li>
    <li><a href="##" id="a_leader_txt">网站信息</a></li>
    <li><b>当前语言：</b><span style="color:red;">中文</php></span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切换语言：<a href="##">中文</a> &nbsp;&nbsp;<a href="##">英文</a> </li>
</ul>
<div class="admin">
    <?= $content ?>
    <!-- <iframe scrolling="auto" rameborder="0" src="info.html" name="right" width="100%" height="100%"></iframe> -->
</div>
<div style="text-align:center;">
    <p>来源:<a href="http://www.aspku.com/" target="_blank">源码之家</a></p>
</div>
</body>
</html>