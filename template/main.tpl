<html>
	<head>
		<title>主页</title>
		<link href="resource/css/style.css" type="text/css" rel="stylesheet">
		<link href="resource/css/style_main.css" type="text/css" rel="stylesheet">
		<script type="text/javascript" src="resource/script/js_main.js"></script>
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

		<div id = "content">
			<div id="item_menu">
				<b>
				<div class="button1">手机、数码</div>
				<div class="button1">电器</div>
				<div class="button1">交通工具</div>
				<div class="button1">书籍</div>
				<div class="button1">服饰箱包</div>
				<div class="button1">游戏账号</div>
				<div class="button1">其他</div>
				</b>
			</div>
			
			<div id="hot">
				<div id="hot_title">
					<button onclick="left()"><</button>
					<b style="color:#333;font-size:1em">热门推荐</b>
					<button onclick="right()">></button>
				</div>	
				<div id="page1" style="display:block">
					<b id="page">1/3</b>
					<div class="hot_item">
							<img class="hot_img" src="resource/image/recently.png">
							<p>商品名称</p>
							<p>价格</p>
					</div>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>
					</div>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>
					</div>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p> 
					</div>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>
					</div>
				</div>
				<div id="page2" style="display:none">
					<b id="page">2/3</b>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>

					</div>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>
				</div>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>
				</div>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>
				</div>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>
				</div>
				</div>
				<div id="page3" style="display:none">
					<b id="page">3/3</b>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>
				</div>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>
				</div>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>
				</div>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>
				</div>
					<div class="hot_item">
						<img class="hot_img" src="resource/image/recently.png">
						<p>商品名称</p>
						<p>价格</p>
				</div>
			</div>
			</div>
					
			<div id="recently">
				<div>
				<b style="color:#333;font-size:1em">最近浏览</b>
				</div>
			</div>
			<div id="new">
				<div style="height:1em;"><b id="new_title">最新上架</b></div>
				<br>
				<div class="new_item">
					<div style="width:20%; height:100%;">
					<img class="new_img" src="resource/image/recently.png">
					</div>
					<div style="padding-left:1em;">
						商品名称<br>
						detail
					</div>
					<div style="padding-left:5em;">
						价格
					</div>
				</div>
				<div class="new_item">
					<div style="width:20%; height:100%;">
					<img class="new_img" src="resource/image/recently.png">
					</div>
					<div style="padding-left:1em;">
						商品名称<br>
						detail
					</div>
					<div style="padding-left:5em;">
						价格
					</div>
				</div>
				<div class="new_item">
					<div style="width:20%; height:100%;">
					<img class="new_img" src="resource/image/recently.png">
					</div>
					<div style="padding-left:1em;">
						商品名称<br>
						detail
					</div>
					<div style="padding-left:5em;">
						价格
					</div>	
				</div>
				<div class="new_item">
					<div style="width:20%; height:100%;">
					<img class="new_img" src="resource/image/recently.png">
					</div>
					<div style="padding-left:1em;">
						商品名称<br>
						detail
					</div>
					<div style="padding-left:5em;">
						价格
					</div>
				</div>
			</div>
			
		</div>

		<div id = "bottom">
			<div id = "bottom_item_aboutus"><a class = "menu_list">关于我们</a></div>
			<div id = "bottom_item_help"><a class = "menu_list">帮助中心</a></div>
			<div id = "bottom_item_contact"><a class = "menu_list">联系管理员</a></div>
			<div id = "bottom_item_claim"><a class = "menu_list">免责声明</a></div>
			<div id = "bottom_item_advice"><a class = "menu_list">我要提意见</a></div>
		</div>
		
		<div id = "footer">
			<p><font size="2">版权所有     西门工作室&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp制作团队     西门工作室</font></p>
		</div>
	</body>
</html>
