<html>
<head><title>LittleKingdom</title>
<style>
#body{
    background-image:url('pexels3.jpg');
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:1300px 845px;
    overflow-x:hidden;
	margin:0px;
	padding:0px;
	overflow:hiddene;
}
#name{
font-size:50px;
font-family:"wide latin";
color:#4d001f;
text-decoration:bold;
margin-top:-88px;
margin-left:140px;
}
table{
border-collapse:collapse;
border:1px solid #600000;
font-family:"arial black";
margin-left:-30px;
}
table td,th{
	background-color:#800033;
	border-collapse:collapse;
	border:1px solid transparent;
	padding:10px;
    color:white;
	position:relative;
	top:50px;
	left:100px;
}
#box{
	height:50px;
	width:90px;
	background-color:green;
	position:relative;
	left:690px;
	top:100px;
	border-radius:18px;
}
#exam{
	color:white;
	font-size:24px;
	font-family:"cooper black";
	position:relative;
	text-decoration:none;
	left:706px;
	top:46px;
}
</style>
</head>
<body id="body">
<p><img src="logo.png" height="100px" width="120px" id="logo"></p>
<div id="name">Little Kingdom</div>
<table>
<tr>
<th>Sr No.</th>
<th>First Name</th>
<th>Last Name</th>
<th>Age</th>
<th>Email</th>
<th>Phone Number</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","Taniyaa","kids");
$query = " SELECT `Sr_no`, `FirstName`, `LastName`, `Age`, `Email`, `Phone Number` FROM `signup` "; 
$result = $conn->query($query);
if($result -> num_rows > 0)
{
	while($row=$result->fetch_assoc()){
		echo "<tr><td>" .$row["Sr_no"]."</td><td>" .$row["FirstName"]."</td><td>" .$row["LastName"]. "</td><td>" .$row["Age"]. 
		"</td><td>" .$row["Email"]. "</td><td>" .$row["Phone Number"]. "</td></tr>";
	}
	echo "</table>";
}
else{
	echo "0 result";
}
?>
</table>
<div id="box"></div>
<p><a href="examdetail.php" id="exam">Next</a></p>
</body>
</html>