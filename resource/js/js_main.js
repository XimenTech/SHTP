var a=1;
function right(){	
	if (a==1) {
		document.getElementById("page1").style.display= "none";
		document.getElementById("page2").style.display= "block";
		document.getElementById("page3").style.display= "none";
		a=2;}
	else if(a==2){
		document.getElementById("page1").style.display= "none";
		document.getElementById("page2").style.display= "none";
		document.getElementById("page3").style.display= "block";
		a=3;
	}
	else{
		document.getElementById("page1").style.display= "block";
		document.getElementById("page2").style.display= "none";
		document.getElementById("page3").style.display= "none";
		a=1;
	}
}

function left(){	
	if (a==1) {
		document.getElementById("page1").style.display= "none";
		document.getElementById("page2").style.display= "none";
		document.getElementById("page3").style.display= "block";
		a=3;}
	else if(a==3){
		document.getElementById("page1").style.display= "none";
		document.getElementById("page2").style.display= "block";
		document.getElementById("page3").style.display= "none";
		a=2;
	}
	else{
		document.getElementById("page1").style.display= "block";
		document.getElementById("page2").style.display= "none";
		document.getElementById("page3").style.display= "none";
		a=1;
	}
}