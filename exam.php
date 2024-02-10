<html>
    <head>
        <title>LittleKingdom</title>
        <style>
#bg{
background: url('exambg2.jpeg');
background-repeat: no-repeat;
background-size: 1280px 610px;
background-attachment: fixed;
overflow-x:hidden;
}              
#logo{
position: relative;
left:1070px;
}
#content{
position:relative;
top:-750px;
font-size:23px;
font-family:"high tower text";
}
#go{
position: relative;
top:-670px;
font-family:"kristen itc";
}
a{
text-decoration: none;
color: white;
position: relative;
left:30px;
top:10px;
}
#box1{
height: 70px;
width:170px;
border:1px solid black;
background-color:#000033;
position: relative;
top:-445px;
left:60px;
font-size:25px;
font-family:"juice itc";
}
#box2{
height: 70px;
width:170px;
border:1px solid black;
background-color:#000033;
position: relative;
left:510px;
top:-633px;
font-size:25px;
font-family:"juice itc";
}
#box3{
height: 70px;
width:160px;
border:1px solid black;
background-color: #000033;
position: relative;
left:940px;
top:-822px;
font-size:25px;
font-family:"juice itc";
}
#report{
height:80px;
width:330px;
border: 1px solid black;
background-color:#660000;
position: relative;
top:-830px;
left:430px;
font-size:45px;
font-family:"juice itc";
font-weight:bold;
color:white;
}
#girl{
position:relative;
left:290px;
top:370px;
}
#boy{
position:relative;
left:700px;
top:75px;
}
#inst{
font-family:"algerian";
font-size:20px;
color:#000066;
position:relative;
top:-770px;
}
#img{
position:relative;
top:-750px;
left:-7px;
}
#eng{
position:relative;
top:-545px;
left:60px;
font-size:23px;
font-family:"juice itc";
}
#maths{
position:relative;
top:-733px;
left:523px;
font-size:23px;
font-family:"juice itc";
}
#gk{
position:relative;
top:-925px;
left:970px;
font-size:23px;
font-family:"juice itc";
}
        </style>
    </head>
    <body id="bg">
	     <div><img src="logo.png" height="100px" width="120px" id="logo"></img></div>
		 <div><img src="girl5.png" height="300px" width="200px" id="girl"></img></div>
		 <div><img src="boy5.png" height="300px" width="200px" id="boy"></img></div>
         <div><h1><img src= "zx3.png" height="120px" width="400px" id="img"></img></h1></div>
        <div id="inst"><h1><center>Instructions:-</center></h1></div>
        <pre id="content"><b>1) All questions are mandatory.
2) Switching between the subjects will not be allowed.Once you are done with each question of the 
choosen subject then only you can proceed to another subject.
3) Attempting each & every question of each subject is compulsory to proceed towards your progress report.
4) Passing in each subject individually is compulsory. If failed in one subject you will be declared failed!
(overall marking will not be considered in such case)</b></pre>
        <div id="go"><h1><center>All the Best!!</center></h1></div>
        
        <div id="box1"></div>
		<div id="eng"><h1><a href="engexam.php">ENGLISH</a></h1></div>
        <div id="box2"></div>
		<div id="maths"><h1><a href="mathexam.php">Maths</a></h1></div>
        <div id="box3"></div>
        <div id="gk"><h1><a href="gkexam.php">G.K</a></h1></div>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div><input type="submit" name="submit" value="Progress Report !" id="report"></div>
        </form>
        <?php
            $conn=mysqli_connect("localhost","root","Taniyaa","kids");
            $num = 0;
            if(isset($_POST["submit"])){
            $query=" SELECT TotalMarks FROM `progress` WHERE Total='1' ";
            $res=mysqli_query($conn,$query);
            $count=mysqli_num_rows($res);
            if($count>0){
                while($row=$res->fetch_assoc()){
                    if($row["TotalMarks"]>0){
                        $num++;
                    }
                }
            }
            $query=" SELECT TotalMarks FROM `progress` WHERE Total='2' ";
            $res=mysqli_query($conn,$query);
            $count=mysqli_num_rows($res);
            if($count>0){
                while($row=$res->fetch_assoc()){
                    if($row["TotalMarks"]>0){
                        $num++;
                    }
                }
            }
            $query=" SELECT TotalMarks FROM `progress` WHERE Total='3' ";
            $res=mysqli_query($conn,$query);
            $count=mysqli_num_rows($res);
            if($count>0){
                while($row=$res->fetch_assoc()){
                    if($row["TotalMarks"]>0){
                        $num++;
                    }
                }
            }
            $query=" SELECT Email FROM `progress` WHERE Total='1' ";
            $res=mysqli_query($conn,$query);
            $count=mysqli_num_rows($res);
            if($count>0){
                while($row=$res->fetch_assoc()){
                    $mail = $row["Email"];
                }
            }
            $query=" SELECT `EngMark` FROM `signup` WHERE Email='$mail' ";
            $res=mysqli_query($conn,$query);
            $count=mysqli_num_rows($res);
            if($count>0){
                while($row=$res->fetch_assoc()){
                    $engm = $row["EngMark"];
                }
            }
            $query=" SELECT `MathMark` FROM `signup` WHERE Email='$mail' ";
            $res=mysqli_query($conn,$query);
            $count=mysqli_num_rows($res);
            if($count>0){
                while($row=$res->fetch_assoc()){
                    $mathm = $row["MathMark"];
                }
            }
            $query=" SELECT `GkMark` FROM `signup` WHERE Email='$mail' ";
            $res=mysqli_query($conn,$query);
            $count=mysqli_num_rows($res);
            if($count>0){
                while($row=$res->fetch_assoc()){
                    $gkm = $row["GkMark"];
                }
            }
            $date = date("d-m-Y");
            if($num == 3){
                echo "<script> window.location.href = 'progress.php'; </script>";
                $query=" UPDATE `signup` SET `ExamStatus`='Given' WHERE Email = '$mail' ";
                $res=mysqli_query($conn,$query);
                if($engm > 24 && $mathm > 24 && $gkm > 24){
                    $query=" UPDATE `signup` SET `Progress`='Pass' WHERE Email = '$mail' ";
                    $res=mysqli_query($conn,$query);
                }
                else{
                    $query=" UPDATE `signup` SET `Progress`='Fail' WHERE Email = '$mail' ";
                    $res=mysqli_query($conn,$query);
                }
                $query1=" UPDATE `signup` SET `Date`='$date' WHERE Email = '$mail' ";
                $res1=mysqli_query($conn,$query1);
            }
            else{
                echo "<script src='sweetalert.min.js'></script>";
                echo "<script>swal('ERROR!', 'Please attempt all 3 exams first!');</script>";
            }
            }
            echo $num;
        ?>
    </body>
</html>