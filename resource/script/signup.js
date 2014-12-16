function check_signup() {
    var email = document.signup_form.email.value;
    var password = document.signup_form.password.value;
    var password2 = document.signup_form.password2.value;
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
    if (password != password2) {
        alert("两次密码不一致，请重新填写！");
        return false;
    }

    return true;
}

//判断输入密码的类型  
function CharMode(iN) {
    if (iN >= 48 && iN <= 57) //数字  
    return 1;
    if (iN >= 65 && iN <= 90) //大写  
    return 2;
    if (iN >= 97 && iN <= 122) //小写  
    return 4;
    else return 8;
}
//bitTotal函数  
//计算密码模式  
function bitTotal(num) {
    modes = 0;
    for (i = 0; i < 4; i++) {
        if (num & 1) modes++;
        num >>>= 1;
    }
    return modes;
}
//返回强度级别  
function checkStrong(sPW) {
    if (sPW.length <= 4) return 0; //密码太短  
    Modes = 0;
    for (i = 0; i < sPW.length; i++) {
        //密码模式  
        Modes |= CharMode(sPW.charCodeAt(i));
    }
    return bitTotal(Modes);
}
//显示颜色  
function pwStrength(pwd) {
    O_color = "#eeeeee";
    L_color = "#FF0000";
    M_color = "#FF9900";
    H_color = "#33CC00";
    if (pwd == null || pwd == '') {
        Lcolor = Mcolor = Hcolor = O_color;
    } else {
        S_level = checkStrong(pwd);
        switch (S_level) {
        case 0:
            Lcolor = Mcolor = Hcolor = O_color;
        case 1:
            Lcolor = L_color;
            Mcolor = Hcolor = O_color;
            break;
        case 2:
            Lcolor = Mcolor = M_color;
            Hcolor = O_color;
            break;
        default:
            Lcolor = Mcolor = Hcolor = H_color;
        }
    }
    if (pwd.length >= 6 && pwd.length <= 20) {
        document.getElementById("strength_L").style.background = Lcolor;
        document.getElementById("strength_M").style.background = Mcolor;
        document.getElementById("strength_H").style.background = Hcolor;
    }
    if (pwd.length < 6) {
        document.getElementById("strength_L").style.background = O_color;
        document.getElementById("strength_M").style.background = O_color;
        document.getElementById("strength_H").style.background = O_color;
    }
    if (pwd.length > 20) {
        document.getElementById("strength_L").style.background = O_color;
        document.getElementById("strength_M").style.background = O_color;
        document.getElementById("strength_H").style.background = O_color;
    }
    return;
}

function ajax_signup() {
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
            if(obj.flag==1){
              window.location.href = 'http://localhost/SHTP/index.php?static=login';
            }
        }
    }

    if (check_signup()) {
        var email = document.signup_form.email.value;
        var password = document.signup_form.password.value;

        xmlhttp.open("POST", "index.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("controller=c_user&action=signup&email="+email+"&password="+password);
    }

}