	
		<!-- 页面主要内容板块 -->

		<div id = "content_login">
			<form action="index.php" method="post" name="login_form" onsubmit="return check_login()">
				<input type = "hidden" name="controller" value = "c_user"/>
				<input type = "hidden" name="action" value = "login"/>
  				<p id="User_email">请输入E-mail：<input type="text" name="email" /></p>
  				<p id="User_password">请输入密码&nbsp： <input type="password" name="password" /></p>
				<br>
  				<input type="submit" value="马上登录" />
			</form>
		</div>
