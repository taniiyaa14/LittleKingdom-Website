<html>
<head><title>LittleKingdom</title>
<style>
#body{
    background-image:url('dashbg.jpg');
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:1820px 845px;
    overflow-x:hidden;
	margin:0px;
	padding:0px;
	overflow:hidden;
}
#dash{
	font-size:35px;
	font-family:"Goudy Stout";
	color:003366;
}
#box{
	background-color:003366;
	width:250px;
	height:400px;
	position:relative;
	top:40px;
}
#title{
	color:white;
	font-size:55px;
	position:relative;
	top:105px;
	left:-10px;
	font-family:"Edwardian Script ITC";
}
#studd{
	color:white;
	font-size:20px;
	position:relative;
	top:151px;
	left:-12px;
	font-family:"Engravers MT";
}
#examd{
	color:white;
	font-size:20px;
	position:relative;
	top:170px;
	font-family:"Engravers MT";
}
#notify{
	position:relative;
	left:1160px;
    top:-460px;
}
#box1{
	width:280px;
	height:130px;
	border:1px solid black;
	background-color:9999FF;
	position:relative;
	left:280px;
	top:-430px;
	color:003399;
	font-size:40px;
	font-family:"Stencil";
}
#box2{
	width:280px;
	height:130px;
	border:1px solid black;
	background-color:9999FF;
	position:relative;
	left:795px;
	top:-562px;
	color:003399;
	font-size:40px;
	font-family:"Stencil";
}
#box3{
	width:280px;
	height:130px;
	border:1px solid black;
	background-color:9999FF;
	position:relative;
	left:280px;
	top:-475px;
	color:003399;
	font-size:40px;
	font-family:"Stencil";
}
#box4{
	width:280px;
	height:130px;
	border:1px solid black;
	background-color:9999FF;
	position:relative;
	left:795px;
	top:-647px;
	color:003399;
	font-size:40px;
	font-family:"Stencil";
}
#box5{
	width:150px;
	height:130px;
	border:1px solid black;
	background-color:003399;
	position:relative;
	left:565px;
	top:-1236px;
	color:white;
	font-size:110px;
	font-family:"Stencil";
}
#box6{
	width:150px;
	height:130px;
	border:1px solid black;
	background-color:003399;
	position:relative;
	left:1080px;
	top:-1368px;
	color:white;
	font-size:110px;
	font-family:"Stencil";
}
#box7{
	width:150px;
	height:130px;
	border:1px solid black;
	background-color:003399;
	position:relative;
	left:565px;
	top:-1240px;
	color:white;
	font-size:110px;
	font-family:"Stencil";
}
#box8{
	width:150px;
	height:130px;
	border:1px solid black;
	background-color:003399;
	position:relative;
	left:1080px;
	top:-1373px;
	color:white;
	font-size:110px;
	font-family:"Stencil";
}

#footer{
	background-color:003366;
	color:white;
	font-size:30px;
	position:relative;
	top:-640px;
	padding:10px;
}
a{
	text-decoration:none;
	color:white;
}
#right{
    position:relative;
    left:5px;
    top:5px;
}
#logo{
	position:relative;
	top:-1130px;
	left:70px;
}
</style>
</head>
<body id="body">
<div id="dash"><center>~DASHBOARD~</center></div>
<div id="box">
<div id="title"><center>Little Kingdom</center></div>
<div id="studd"><a href="studdetail.php"><center>* Student <br>Details</center></a></div>
<div id="examd"><a href="examdetail.php"><center>* Exam Data</center></a></div>
</div>
<p><img src="notification.png" height="40px" width="35px" id="notify"></p>
<div id="box1">Total<br>Students</div>
<div id="box2">Total<br>Exams Given</div>
<div><pre id="box3">Total Passed 
Students</pre></div>
<div><pre id="box4">Total Failed 
Students</pre></div>
<div id="footer"><center>2022<img src="copyright.png" height="30px" width="30px" id="right">  Little Kingdom</center></div>
<div><img src="logo1.png" height="100px" width="100px" id="logo"></img></div>
<?php
$conn = mysqli_connect("localhost","root","Taniyaa","kids");
$sql=" SELECT * FROM `signup` WHERE 1 ";
$ans=mysqli_query($conn,$sql);
$totalrow=mysqli_num_rows($ans);
echo "<div id='box5'>".$totalrow."</div>";
$que=" SELECT `ExamStatus` FROM `signup` WHERE ExamStatus='Given' ";
$res=mysqli_query($conn,$que);
$numrow=mysqli_num_rows($res);
echo "<div id='box6'>0".$numrow."</div>"; 
$sql=" SELECT `Progress` FROM `signup` WHERE Progress='Pass' ";
$ans=mysqli_query($conn,$sql);
$totalrow=mysqli_num_rows($ans);
echo "<div id='box7'>0".$totalrow."</div>";
$que=" SELECT `Progress` FROM `signup` WHERE Progress='Fail' ";
$res=mysqli_query($conn,$que);
$numrow=mysqli_num_rows($res);
echo "<div id='box8'>0".$numrow."</div>"; 
?>
</body>
</html>