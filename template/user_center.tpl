<!DOCTYPE html>
<html>
	<head>
		<title>主页</title>
		<link href="resource/css/style.css" type="text/css" rel="stylesheet">
		<link href="resource/css/style_user_center.css" type="text/css" rel="stylesheet">
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
			<!-- 主要内容板块菜单 -->
			<div id = "content_menu">	
				<div id = "content_menu_list"><a class="menu_list" onmousedown="content_detail_list1.style.display='block';content_detail_list2.style.display='none';content_detail_list3.style.display='none';content_detail_list4.style.display='none';content_detail_list5.style.display='none';content_detail_list6.style.display='none';
				content_detail_list7.style.display='none';">我的二手</a></div>
				<div id = "content_menu_list"><a class="menu_list" onmousedown="content_detail_list1.style.display='none';content_detail_list2.style.display='block';content_detail_list3.style.display='none';content_detail_list4.style.display='none';content_detail_list5.style.display='none';content_detail_list6.style.display='none';
				content_detail_list7.style.display='none';">查看并修改个人信息</a></div>
				<div id = "content_menu_list"><a class="menu_list" onmousedown="content_detail_list1.style.display='none';content_detail_list2.style.display='none';content_detail_list3.style.display='block';content_detail_list4.style.display='none';content_detail_list5.style.display='none';content_detail_list6.style.display='none';
				content_detail_list7.style.display='none';">我的收藏</a></div>
				<div id = "content_menu_list"><a class="menu_list" onmousedown="content_detail_list1.style.display='none';content_detail_list2.style.display='none';content_detail_list3.style.display='none';content_detail_list4.style.display='block';content_detail_list5.style.display='none';content_detail_list6.style.display='none';
				content_detail_list7.style.display='none';">商品管理</a></div>
				<div id = "content_menu_list"><a class="menu_list" onmousedown="content_detail_list1.style.display='none';content_detail_list2.style.display='none';content_detail_list3.style.display='none';content_detail_list4.style.display='none';content_detail_list5.style.display='block';content_detail_list6.style.display='none';
				content_detail_list7.style.display='none';">我的求购</a></div>
				<div id = "content_menu_list"><a class="menu_list" onmousedown="content_detail_list1.style.display='none';content_detail_list2.style.display='none';content_detail_list3.style.display='none';content_detail_list4.style.display='none';content_detail_list5.style.display='none';content_detail_list6.style.display='block';
				content_detail_list7.style.display='none';">我的消息</a></div>
				<div id = "content_menu_list"><a class="menu_list" onmousedown="content_detail_list1.style.display='none';content_detail_list2.style.display='none';content_detail_list3.style.display='none';content_detail_list4.style.display='none';content_detail_list5.style.display='none';content_detail_list6.style.display='none';
				content_detail_list7.style.display='block';">管理员</a></div>
				<div id = "content_menu_list"><a class="menu_list">返回主页</a></div>
			</div>
			<!-- 主要内容板块详细信息 -->
			<div id = "content_detail">
				<div id = "content_detail_list1" >
					<div id="content_detail_list1_item_top">
						<div id = "content_detail_list1_item_title">物品名称</div>
						<div id = "content_detail_list1_item_img">物品图片</div>
						<div id = "content_detail_list1_item_detail">物品介绍</div>
						<div id = "content_detail_list1_item_viewtime">浏览次数</div>
					</div>
					<div id="content_detail_list1_item">
						<div id = "content_detail_list1_item_title">{$item_title}</div>
						<div id = "content_detail_list1_item_img"><img src="resource/image/huabanxie.jpg" width=70" height="50"></div>
						<div id = "content_detail_list1_item_detail">{$item_detail}</div>
						<div id = "content_detail_list1_item_viewtime">{$item_viewtime}</div>
					</div>
					
				</div>
				<div id = "content_detail_list2">
					<form enctype="multipart/form-data" action="test_user_center_rslt.php" method="post" name="user_center_myinfo_form">
						<p>当前头像：<img src="resource/image/defalut_icon.jpg" width="100" height="100"></p>
						<p id="content_detail_list2_item">修改头像：<input type="hidden" name="MAX_FILE_SIZE" value="3276800"/>
	<input type="file" id="headportrait" name="avater" onchange="previewImage(this)"/></p>
						<p>昵称：<input type="text" name="name" value="{$name}" /></p>
						<p>QQ号：<input type="text" name="qq" value="{$qq}"/></p>
						<p>手机：<input type="text" name="phone" value="{$phone}"/></p>
						<p>地址：<input type="text" name="address" value="{$address}"/></p>
						<input type="submit" value="修改并保存" />
					</form>
				</div>
				<div id = "content_detail_list3">
					我的收藏板块
				</div>
				<div id = "content_detail_list4">
					商品管理板块
				</div>
				<div id = "content_detail_list5">
					<div id="content_detail_list1_item_top">
						<div id = "content_detail_list1_item_title">物品名称</div>
						<div id = "content_detail_list1_item_img">物品图片</div>
						<div id = "content_detail_list1_item_detail">物品介绍</div>
						<div id = "content_detail_list1_item_viewtime">浏览次数</div>
					</div>
					<div id="content_detail_list1_item">
						<div id = "content_detail_list1_item_title">{$witem_title}</div>
						<div id = "content_detail_list1_item_img"><img src="resource/image/bike.jpg" width=70" height="50"></div>
						<div id = "content_detail_list1_item_detail">{$witem_detail}</div>
						<div id = "content_detail_list1_item_viewtime">{$witem_viewtime}</div>
					</div>
				</div>
				<div id = "content_detail_list6">
					我的消息板块
				</div>
				<div id = "content_detail_list7">
					管理员板块
				</div>
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


