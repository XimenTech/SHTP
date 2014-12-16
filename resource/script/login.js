function check_login() {
    var email = document.login_form.email.value;
    var password = document.login_form.password.value;
    if (email == "") {
        alert("邮箱不能为空，请重新填写！");
        return false;
    }
    if (email.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) == -1) {
        alert("邮箱格式不正确，请重新填写！");
        return false;
    }
    if (password == "") {
        alert("密码不能为空，请重新填写！");
        return false;
    }
    if (password.length < 6) {
        alert("密码不能少于6个字符，请重新填写！");
        return false;
    }
    if (password.length > 20) {
        alert("密码不能多于20个字符，请重新填写！");
        return false;
    }
    return true;

}

function ajax_login() {
    var xmlhttp;
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
             var obj = eval("(" + xmlhttp.responseText + ")");
             alert(obj.msg);
            // if(obj.flag==1){
            //   window.location.href = 'http://localhost/SHTP/index.php?static=login';
            // }
        }
    }

    if (check_login()) {
        var email = document.login_form.email.value;
        var password = document.login_form.password.value;

        xmlhttp.open("POST", "index.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("controller=c_user&action=login&email="+email+"&password="+password);
    }

}