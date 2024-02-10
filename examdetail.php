<html>
<head><title>LittleKingdom</title>
<style>
#body{
    background-image:url('examdetailbg1.jpg');
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:1450px 800px;
    overflow-x:hidden;
	margin:0px;
	padding:0px;
	overflow:hiddene;
}
#name{
font-size:70px;
font-family:"wide latin";
color:black;
text-decoration:bold;
margin-top:-110px;
margin-left:140px;
}
table{
border-collapse:collapse;
border:1px solid black;
width:750px;
}
table td,th{
	background-color:#ffff66;
	border-collapse:collapse;
	border:1px solid transparent;
	padding:5px;
	position:relative;
	top:50px;
	left:10px;
	font-family:"Berlin Sans FB";
}
table th{
	font-size:25px;
}
table tr{
	font-size:20px;
}
#box{
	height:50px;
	width:160px;
	background-color:green;
	position:relative;
	left:580px;
	top:110px;
	border-radius:10px;
}
#back{
	color:white;
	font-size:18px;
	position:relative;
	text-decoration:none;
	left:592px;
	top:55px;
	font-family:"arial black";
}
#logo{
	position:relative;
	left:5px;
	top:8px;
}
</style>
</head>
<body id="body">
<p><img src="logo1.png" height="100px" width="115px" id="logo"></p>
<div id="name">Little Kingdom</div>
<table>
<tr>
<th>Sr No.</th>
<th>First Name</th>
<th>Last Name</th>
<th>Date</th>
<th>Exam Status</th>
<th>Progress</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","Taniyaa","kids");
$query = " SELECT `Sr_no`, `FirstName`, `LastName`, `Date`, `ExamStatus`, `Progress` FROM `signup` "; 
$result = $conn->query($query);
if($result -> num_rows > 0)
{
	while($row=$result->fetch_assoc()){
		echo "<tr><td>" .$row["Sr_no"]."</td><td>" .$row["FirstName"]."</td><td>" .$row["LastName"]. 
		"</td><td>" .$row["Date"]. "</td><td>" .$row["ExamStatus"]. "</td><td>" .$row["Progress"]. "</td></tr>";
	}
	echo "</table>";
}
else{
	echo "0 result";
}
?>
</table>
<div id="box"></div>
<p><a href="welcome.html" id="back">Back to Home</a></p>
</body>
</html>