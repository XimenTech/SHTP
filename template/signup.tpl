
		
		<!-- 页面主要内容板块 -->
		<div id = "content_signup">
			<form action="test_signup_rslt.php" method="post" name="signup_form" onsubmit="return check_signup()">
				<input type = "hidden" name="controller" value = "c_user"/>
				<input type = "hidden" name="action" value = "signup"/>
  				<p id="User_email">请输入E-mail：<input type="text" name="email" /></p>
  				<p id="User_password">请输入密码&nbsp： <input type="password" name="password" onKeyUp=pwStrength(this.value) onBlur=pwStrength(this.value)/></p>

  				<p id="User_password_again">再次输入密码：<input type="password" name="password2" /></p>
   				密码强度:  
				<table id = "User_password_check">  
					<tr align="center" bgcolor="#f5f5f5">  
					<td width="33%" id="strength_L">弱</td>  
					<td width="33%" id="strength_M">中</td>  
					<td width="33%" id="strength_H">强</td>  
				</tr>  
				</table>
				<br>
  				<input type="submit" value="马上注册" />
			</form>
		</div>

	

		</div>
		