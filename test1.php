<html>
<head>
<script>
function checkemail()
{
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
    }
    }
xmlhttp.open("POST","index.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");


	xmlhttp.send("controler=c_item&action=viewitem&item_id=15");

}
</script>
</head>
<body>
<div id="myDiv">waiting<div>
<button type="button" onclick="checkemail()">Change Content</button>
</body>
</html>
