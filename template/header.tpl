<!DOCTYPE html>
<html>
	<head>
		<title>{$page_title}</title>
		<!-- 引入css样式表 -->
		<link href="resource/css/style.css" type="text/css" rel="stylesheet">
		<link href="resource/css/style_main.css" type="text/css" rel="stylesheet">
		<link href="resource/css/style_user_center.css" type="text/css" rel="stylesheet">
		<link href="resource/css/signup.css" type="text/css" rel="stylesheet">
		<link href="resource/css/login.css" type="text/css" rel="stylesheet">
		<link href="resource/css/add_item.css" type="text/css" rel="stylesheet">
		<link href="resource/css/add_witem.css" type="text/css" rel="stylesheet">
		<link href="resource/css/edit_item.css" type="text/css" rel="stylesheet">
		<link href="resource/css/edit_witem.css" type="text/css" rel="stylesheet">
		<link href="resource/css/view_item.css" type="text/css" rel="stylesheet">
		<!-- 引入js -->
		<script src="resource/script/signup.js"></script>
		<script src="resource/script/js_main.js"></script>
		<script src="resource/script/login.js"></script>
	</head>
	<body>

		<!-- 页面顶部板块 -->
		<div id = "top">
			{if {$sign} == 0}
				<div id = "top_item_login"><a class = "menu_list" href="index.php?static=login">亲，请登录！</a></div>
				<div id = "top_item_signup"><a class = "menu_list" href="index.php?static=signup">立即免费注册</a></div>
			{else}
				<div id="top_item_uesrname">尊敬的<a class = "menu_list" href="index.php?controller=c_user&action=user_center">{$user_name}</a>
				</div>
				<div id = "top_item_logout"><a class = "menu_list" href="index.php?controller=c_user&action=logout">注销</a></div>
			{/if}
			<div id = "top_item_my"><a class = "menu_list" href="index.php?controller=c_user&action=user_center">我的二手</a></div>
			<div id = "top_item_favor"><a class = "menu_list">收藏夹</a></div>
			<div id = "top_item_quick"><a class = "menu_list">快速发布</a></div>
		</div>
		<!-- 主板块 -->
		<div id = "main">
			<!-- 页面logo板块 -->
			<div id = "main_logo"><a href="index.php?static=main"><img src="resource/image/logo.png"></a></div>
			<!-- 页面搜索板块 -->
			<div id = "main_search" style="background-image:url(resource/image/search.png)">
				<div id = "main_search_item1"><b>寻宝:</b></div>
				<div id = "main_search_item2">
					<form class="search" action= "index.php" method="get">
					<input type="text" name="search" value="商品名称或商品种类">
					<input type="submit" value="搜索">
					<br>
					<input type="radio" name="method" >商品名称
   					<input type="radio" name="method" >商品种类
				</div>		
			</form>
		</div>
		</div>