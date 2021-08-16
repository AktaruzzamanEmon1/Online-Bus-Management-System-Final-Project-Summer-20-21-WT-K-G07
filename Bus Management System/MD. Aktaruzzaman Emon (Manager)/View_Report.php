
<!DOCTYPE html>
<html>
<head>
	<body style="background-color:#CCCCFF;">
	<meta charset="utf-8">
	
	 <title>Bus Management System</title>
	
</head>
<body>

<div style="text-align: center; background: grey"><h1>Bus Management System</h1></div>
	<script>
		
		function get(id)
{
return document.getElementById(id);
}
function loadDoc1(){
var xhr=new XMLHttpRequest();
xhr.open("GET","AllReport.php",true);
xhr.onreadystatechange=function(){
if(this.readyState==4 && this.status==200){
get("demo1").innerHTML=this.responseText;
}
};
xhr.send();
}
	</script> 
	<br>
	
		<button style="background-color:  #ffb3ff"><a href="Manager.php">Back</a></button>
		<button style="background-color:  #ffb3ff"><a href="Home_page.php">Home</a></button>
	<br><br><br>
	
		<table align="center">
		<tr>	
	<td><button style= "background-color:  #ffb3ff" id="demo1" onclick="loadDoc1()">All Reports</button></td>
</tr>
	

<br>

</body>
</html>