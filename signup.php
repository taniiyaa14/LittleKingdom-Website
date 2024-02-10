<html>
<head>
<title>LittleKingdom</title>
<style>
body{
overflow:hidden;
}
#bg{
    background : url('bg8.jpg');
    background-size: 1280px 600px;
    background-repeat: no-repeat;
    overflow-x:hidden;
}
#box{
    height:380px;
    width:290px;
padding:20px;
    border:1px solid black;
    background-color:#ff80d5;
    position:relative;
    top:-580px;
    left:170px;
border-radius:10px;
}
#submit{
    position:relative;
    left:844px;
    top:-622px;
	height:33px;
    width:80px;
    border:1px solid grey;
    background-color:#4d0033;
	color:white;
	font-size:20px;
	font-family:"times of roman";
}
#box1{
    height:30px;
    width:100px;
    border:1px solid grey;
    background-color:#4d0033;
    position:relative;
    top:-670px;
    left:630px;

}
a{
    text-decoration:none;
    position:relative;
    top:5px;
    color:white;
    left:2px;
}
#logo{
position: relative;
left:1090px;
top:-98px;
border-radius:2px;
}
#name{
    position:relative;
    left:1050px;
    font-size:20px;
    top:-30px;
}
#title{
position:relative;
left:670px;
top:-10px;
font-size:60px;
color:#990066;
font-family:"jokerman";
}
#d1{
position:relative;
font-size:20px;
left:-30px;
font-family:"cooper black";
color:#4d0033;
}
.styling1{
position:relative;
padding:2px;
left:-50px;
width:70%;
}
#d2{
position:relative;
font-size:20px;
top:10px;
padding:2px;
left:-32px;
font-family:"cooper black";
color:#4d0033;
}
.styling2{
position:relative;
top:10px;
padding:2px;
left:-45px;
width:70%;
}
#d3{
position:relative;
font-size:20px;
top:20px;
left:-64px;
font-family:"cooper black";
color:#4d0033;
}
.styling3{
position:relative;
top:20px;
padding:2px;
left:-45px;
width:70%;
}
#d4{
position:relative;
font-size:20px;
top:30px;
left:-68px;
font-family:"cooper black";
color:#4d0033;
}
.styling4{
position:relative;
top:30px;
padding:2px;
left:-45px;
width:70%;
}
#d5{
position:relative;
font-size:20px;
top:40px;
left:-60px;
font-family:"cooper black";
color:#4d0033;
}
.styling5{
position:relative;
top:40px;
padding:2px;
left:-45px;
width:70%;
}
#d6{
position:relative;
font-size:20px;
top:55px;
left:-35px;
font-family:"cooper black";
color:#4d0033;
}
.styling6{
position:relative;
top:55px;
padding:2px;
left:-45px;width:70%;

}
#a4{
position:relative;
top:-90px;
left:940px;
}
#invalid{
    position:relative;
    top:1px;
    left:42px;
    font-family: Arial;
    font-size:13px;
}
#invalidbox{
    border:1px solid black;
    background-color: white;
    position:relative;
    top:-935px;
    left:320px;
    height:40px;
    width:285px;
}
#icon{
    position: relative;
    top:-971.5px;
    left:330px;
}
#invalid1{
    position:relative;
    top:0.5px;
    left:42px;
    font-family: Arial;
    font-size:13px;
}
#invalidbox1{
    border:1px solid black;
    background-color: white;
    position:relative;
    top:-760px;
    left:320px;
    height:40px;
    width:285px;
}
#icon1{
    position: relative;
    top:-796.5px;
    left:330px;
}
</style>
</head>
<body id="bg">
<div id="title"><b>Sign Up</b></div>
<div><img src="logo.png" height="100px" width="120px" id="logo"></img></div>
<div><img src="a4.png" height="480px" width="300px" id="a4"></img></div>    
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<center><div id="box">
<div id="d1">Enter Kid's First Name:</div>
<div><input type="text"  name="firstname" class="styling1" required value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'] ?>"></div>
<div id="d2">Enter Kid's Last Name:</div>
<div><input type="text"  name="lastname" class="styling2" required value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname'] ?>"></div>
<div id="d3">Enter Kid's Age:</div>
<div><input type="number" name="age" class="styling3" required value="<?php if(isset($_POST['age'])) echo $_POST['age'] ?>"></div>
<div id="d4">Enter Email Id:</div>
<div><input type="email"  name="email" class="styling4" required value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>"></div>
<div id="d5">Enter Password:</div>
<div><input type="password"  name="password" class="styling5" required value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>"></div>
<div id="d6">Enter Mobile Number:</div>
<div><input type="tel"  name="phone" class="styling6" required value="<?php if(isset($_POST['phone'])) echo $_POST['phone'] ?>"></div>
</div></center>
<div><input type="submit" name="submit" value="Next" id="submit"></div>

</form>
<div id="box1"><a href="welcome.html">Back to Home</a></div>
<?php
$conn=mysqli_connect("localhost","root","Taniyaa","kids");
if(isset($_POST['submit']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
if($age<3 || $age>5){
    echo "<div id='invalidbox'>";
    echo "<div><pre id='invalid'>Please enter age between 3-5 years only!</pre></div>";
    echo "</div>";
    echo "<img src='alerticon.jpg' height='30px' width='30px' id='icon'></img>";
}
else if(!preg_match("/^\d{10}+$/", $phone)){
    echo "<div id='invalidbox1'>";
    echo "<div><pre id='invalid1'>Please enter a valid phone number!</pre></div>";
    echo "</div>";
    echo "<img src='alerticon.jpg' height='30px' width='30px' id='icon1'></img>";
}
else{
$query=" INSERT INTO `signup` (`Sr_no`, `FirstName`, `LastName`, `Age`, 
`Email`, `Password`, `Phone Number`, `Date`, `ExamStatus`, `Progress`, 
`Que1`, `Que2`, `Que3`, `Que4`, `Que5`, `Que6`, `Que7`, `Que8`, `Que9`, 
`Que10`, `Que11`, `Que12`, `Que13`, `Que14`, `Que15`, `Que16`, `Que17`, `Que18`,
`Que19`, `Que20`, `Que21`, `Que22`, `Que23`, `Que24`, `Que25`, `Que26`, `Que27`
, `Que28`, `Que29`, `Que30`, `EngMark`, `Que31`, `Que32`, `Que33`, `Que34`,
`Que35`, `Que36`, `Que37`, `Que38`, `Que39`, `Que40`, `Que41`, `Que42`, `Que43`, 
`Que44`, `Que45`, `Que46`, `Que47`, `Que48`, `Que49`, `Que50`, `Que51`, `Que52`,
`Que53`, `Que54`, `Que55`, `Que56`, `Que57`, `Que58`, `Que59`, `Que60`, `Que61`, 
`Que62`, `Que63`, `Que64`, `Que65`, `Que66`, `Que67`, `Que68`, `Que69`, `Que70`,
`Que71`, `GkMark`, `Que72`, `Que73`, `Que74`, `Que75`, `Que76`, `Que77`, `Que78`, 
`Que79`, `Que80`, `Que81`, `Que82`, `Que83`, `Que84`, `Que85`, `Que86`, `Que87`,
`Que88`, `Que89`, `Que90`, `Que91`, `Que92`, `Que93`, `Que94`, `Que95`, `Que96`, 
`Que97`, `Que98`, `Que99`, `Que100`, `Que101`, `Que102`, `Que103`, `Que104`, 
`Que105`, `Que106`, `Que107`, `Que108`, `Que109`, `Que110`, `Que111`, `Que112`, 
`Que113`, `Que114`, `Que115`, `Que116`, `Que117`, `Que118`, `MathMark`) VALUES 
(Null, '$firstname', '$lastname', '$age', '$email', '$password', '$phone', 
'-', 'Not Given', '-', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 
'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 
'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 
'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 
'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 
'', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 
'', '', '', '', '', '', '') ";
$res=mysqli_query($conn,$query);
echo "<script> window.location.href = 'syllabus3-4sign.html'; </script>";
}
}
?>
</body>
</html>



