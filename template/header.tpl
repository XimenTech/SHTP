<!DOCTYPE html>
<html>
	<head>
		<title>主页</title>
		<!-- 引入css样式表 -->
		<link href="resource/css/style.css" type="text/css" rel="stylesheet">
		<link href="resource/css/style_main.css" type="text/css" rel="stylesheet">
		<link href="resource/css/style_user_center.css" type="text/css" rel="stylesheet">
		<link href="resource/css/signup.css" type="text/css" rel="stylesheet">
		<link href="resource/css/login.css" type="text/css" rel="stylesheet">
		<link href="resource/css/add_item.css" type="text/css" rel="stylesheet">
		<link href="resource/css/edit_item.css" type="text/css" rel="stylesheet">
		<link href="resource/css/view_item.css" type="text/css" rel="stylesheet">
		<!-- 引入js -->
		<script src="resource/script/signup.js"></script>
		<script src="resource/script/js_main.js"></script>
		<script src="resource/script/login.js"></script>
	</head>
	<body>
		<!-- 页面顶部板块 -->
		<div id = "top">
			<div id = "top_item_login"><a class = "menu_list">亲，请登录！</a></div>
			<div id = "top_item_signup"><a class = "menu_list">立即免费注册</a></div>
			<div id = "top_item_my"><a class = "menu_list">我的二手</a></div>
			<div id = "top_item_favor"><a class = "menu_list">收藏夹</a></div>
			<div id = "top_item_quick"><a class = "menu_list">快速发布</a></div>
		</div>
		<!-- 主板块 -->
		<div id = "main">
			<!-- 页面logo板块 -->
			<div id = "main_logo"><img src="resource/image/logo.png"></div>
			<!-- 页面搜索板块 -->
			<div id = "main_search" style="background-image:url(resource/image/search.png)">
				<div id = "main_search_item1"><b>寻宝:</b></div>
				<div id = "main_search_item2">
					<form class="search" action action= "index.php" method="get">
					<input type="text" name="search" value="商品名称或商品种类">
					<input type="submit" value="搜索">
					<br>
					<input type="radio" name="method" >商品名称
   					<input type="radio" name="method" >商品种类
				</div>		
			</form>
		</div>
		</div>