function check_login() {
	var email = document.login_form.email.value;
	var password = document.login_form.password.value;
	if (email=="")
 {
  alert("邮箱不能为空，请重新填写！");
  return false;
 }
 if (email.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1)   
    {   
        alert("邮箱格式不正确，请重新填写！");
  		return false;  
    }
 	if (password=="")
 {
  alert("密码不能为空，请重新填写！");
  return false;
 }
 if (password.length<6)
 {
  alert("密码不能少于6个字符，请重新填写！");
  return false;
 }
  if (password.length>20)
 {
  alert("密码不能多于20个字符，请重新填写！");
  return false;
 }

}
