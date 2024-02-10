<html>
<head><title>LittleKingdom</title>
<style>
#background{
background-image:url('p3.jpeg');
background-attachment:fixed;
background-repeat:no-repeat;
background-size: 1250px 700px;
overflow:hidden;
}
#box{
height:330px;
width:300px;
border-radius:30px;
border:1px solid black;
background-color:white;
position:relative;
top:-670px;
left:470px;
}
#title{
font-size:60px;
position:relative;
margin-top:-110px;
margin-left:70px;
color:red;
top:15px;
font-family:"jokerman";
}
.styling1{
text-align:center;
position:relative;
margin-top:60px;
padding:10px;
margin-left:10px;
border:4px solid red;
border-radius:50px;
width:80%;
}
.styling2{
text-align:center;
position:relative;
margin-top:40px;
padding:10px;
margin-left:10px;
border:4px solid red;
border-radius:50px;
width:80%;
}
#submit{
margin-top:40px;
border:1px solid black;
background-color:red;
color:white;
width:70px;
padding:5px;
border-radius:20px;
}
#d1{
margin-left:80px;
margin-top:20px;
font-family:"latha";
color:black;
}
#d2{
margin-left:120px;
margin-top:-10px;
font-family:"latha";
color:blue;
}
a{
    text-decoration: none;
    color: green;
}
#invalid{
    position:relative;
    top:-8px;
    left:50px;
    font-family: Arial;
    font-size:13px;
}
#invalidbox{
    border:1px solid black;
    background-color: white;
    position:relative;
    top:-935px;
    left:780px;
    height:40px;
    width:273px;
}
#logo{
    position: relative;
    left:1100px;
border-radius:20%;
}
#s1{
margin-left:10px;
margin-top:05px;
border-radius:70px;
}

#loginbg{
    margin-top:-40px;
}
#s3{
position:relative;
 left:450px;
 top:-575px;
 border-radius:2px;
}
#s4{
position:relative;
 left:600px;
 top:-675px;
 border-radius:2px;
}
#s5{
position:relative;
 left:750px;
 top:-770px;
 border-radius:2px;
}
#icon{
    position: relative;
    top:-971.5px;
    left:790px;
}
</style>
</head>
<body id="background">
<div><img src="logo1.png" height="85px" width="95px" id="logo"></img></div>
<div><img src="lm2.png" height="480px" width="310px" id="s1"></div>
<div><img src="01.png" height="100px" width="100px" id="s3"></div>
<div><img src="04.png" height="100px" width="100px" id="s4"></div>
<div><img src="05.png" height="100px" width="100px" id="s5"></div>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<div id="box">
<div id="title"><b>Login</b></div>
<div><center><input type="text" name="username" placeholder="email id" class="styling1" required value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>"></center></div>
<div><center><input type="password" name="password" placeholder="password" class="styling2" required value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>"></center></div>
<div><center><input type="submit" name="submit" value="Login" id="submit"></center></div>
<pre id="d1"><b>Don't have an account?</b></a></pre>
<pre id="d2"><a href="signup.php"><b>Sign Up</b></a></pre>
</div>

</form>
<?php
$conn=mysqli_connect("localhost","root","Taniyaa","kids");
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * FROM `signup` WHERE Email = '$username' and Password = '$password'";
$res=mysqli_query($conn,$query);
$count=mysqli_num_rows($res);
if($username == 'sst2021@gmail.com' && $password == '081418'){
    header("Location: dashboard.php");
}
else if($count>0){
    header("Location: choosesub.php");
}
else{
    echo "<div id='invalidbox'>";
    echo "<div><pre id='invalid'>Your entered username or password 
is incorrect. Please try again!</pre></div>";
    echo "</div>";
    echo "<img src='alerticon.jpg' height='30px' width='30px' id='icon'></img>";
}
}
?>
</body>
</html>
