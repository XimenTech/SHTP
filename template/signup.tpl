<!DOCTYPE html>
<html>
	<head>
		<title>主页</title>
		<link href="resource/css/style.css" type="text/css" rel="stylesheet">
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
		
		<!-- 页面主要内容板块 -->
		<div id = "content">
<div id="User_email">
	    
	    E-mail：<input type="text" name="email" size="16" style="width:120px;"><br>
	</div>

	<div id="User_password">
	    密  码：<input type="password" name="password" size="16" style="width:120px;"><br>
	    <input type="submit">
	    
	</div>

		</div>
		<!-- 页面底部板块 -->
		<div id = "bottom">
			<div id = "bottom_item_aboutus"><a class = "menu_list">关于我们</a></div>
			<div id = "bottom_item_help"><a class = "menu_list">帮助中心</a></div>
			<div id = "bottom_item_contact"><a class = "menu_list">联系管理员</a></div>
			<div id = "bottom_item_claim"><a class = "menu_list">免责声明</a></div>
			<div id = "bottom_item_advice"><a class = "menu_list">我要提意见</a></div>
		</div>
		<!-- 页面尾部板块 -->
		<div id = "footer">
			<p><font size="2">版权所有     西门工作室&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp制作团队     西门工作室</font></p>
		</div>
	</body>
</html>


