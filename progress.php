<html>
    <head>
        <title>LittleKingdom</title>
        <style>
            #bg{ 
			    background:url('pbg.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 1270px 610px; 
                overflow-x:hidden;
            }
            #box{
                position:relative;
                height:500px;
                width:500px;
                border:2px solid black;
                top:-20px;
				background-color:#f9e6ff;
            }
            #logo{
                position:relative;
                top:-520px;
                left:370px;
            }
            #title{
                position:relative;
                top:-595px;
                left:510px;
                font-size:37px;
                font-family:"Berlin Sans FB";
				font-weight:bold;
            }
            #date{
                position:relative;
                font-family:"Berlin Sans FB";
                font-size:20px;
                top:-560px;
                left:690px;
            }
            #name{
                position:relative;
                font-family:"Berlin Sans FB";
                font-size:25px;
                top:-550px;
                left:370px;
            }
            #age{
                position:relative;
                font-family:"Berlin Sans FB";
                font-size:25px;
                top:-540px;
                left:370px;
            }
            #line1{
                position:relative;
                border-right:2px solid black;
                height:185px;
                top:-565px;
                left:-800px;
            }
            #line2{
                position:relative;
                border-right:2px solid black;
                height:185px;
                top:-750px;
                left:-650px;
            }
            #line3{
                position:relative;
                border-right:2px solid black;
                height:185px;
                top:-935px;
                left:-540px;
            }
            #line4{
                position:relative;
                border-right:2px solid black;
                height:185px;
                top:-1120px;
                left:-430px;
            }
            #num{
                position:relative;
                font-weight:bold;
                top:-1293px;
                left:357px;
                font-size:15px;
            }
            #sub{
                position:relative;
                font-weight:bold;
                top:-1310px;
                left:448px;
                font-size:15px;
            }
            #stumark{
                position:relative;
                font-weight:bold;
                font-size:15px;
                top:-1353px;
                left:576px;
                font-family:times new roman;
            }
            #totmark{
                position:relative;
                font-weight:bold;
                font-size:15px;
                top:-1403px;
                left:690px;
                font-family:times new roman;
            }
            #res{
                position:relative;
                font-weight:bold;
                top:-1445px;
                left:789px;
                font-size:15px;
            }
            #fres{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1280px;
                left:570px;
            }
            #percent{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1279px;
                left:570px;
            }
            #finalres{
                position:relative;
                font-weight:bold;
                font-size:25px;
                top:-1279px;
                left:365px;
            }
            #next{
                position:relative;
                padding:10px;
                top:-1268px;
                width:150px;
                left:875px;
				border-radius:4px;
				background-color:black;
				color:white;
            }
            #s1{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1548px;
                left:374px;
            }
            #s2{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1528px;
                left:374px;
            }
            #s3{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1508px;
                left:374px;
            }
            #sub1{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1617px;
                left:439px;
            }
            #sub2{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1598px;
                left:449px;
            }
            #sub3{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1578px;
                left:464px;
            }
            #m1{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1688px;
                left:715px;
            }
            #m2{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1668px;
                left:715px;
            }
            #m3{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1648px;
                left:715px;
            }
            #d1{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1937px;
                left:750px;
            }
            #nm1{
                position:relative;
                font-family:"Berlin Sans FB";
                font-size:30px;
                top:-1932px;
                left:460px;
            }
            #age1{
                position:relative;
                font-family:"Berlin Sans FB";
                font-size:30px;
                top:-1927px;
                left:432px;
            }
            #engm{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1849px;
                left:609px;
            }
            #p1{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1873px;
                left:802px;
                color:blue;
            }
            #f1{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1873px;
                left:802px;
                color:red;
            }
            #mathm{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1853px;
                left:609px;
            }
            #p2{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1877px;
                left:802px;
                color:blue;
            }
            #f2{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1877px;
                left:802px;
                color:red;
            }
            #gkm{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1856px;
                left:609px;
            }
            #p3{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1880px;
                left:802px;
                color:blue;
            }
            #f3{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1880px;
                left:802px;
                color:red;
            }
            #obtainm{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1856px;
                left:781px;
            }
            #tpercent{
                position:relative;
                font-weight:bold;
                font-size:20px;
                top:-1853px;
                left:730px;
            }
            #fpass{
                position:relative;
                font-weight:bold;
                font-size:25px;
                top:-1854px;
                left:490px;
                color:blue;
            }
            #ffail{
                position:relative;
                font-weight:bold;
                font-size:25px;
                top:-1853px;
                left:484px;
                color:red;
            }
			#dabba{
				position:relative;
				left:-250px;
				top:50px;
			}
			#dabba2{
				position:relative;
				left:-250px;
				
			}
			#pr{
				position:relative;
				top:-2095px;
				left:280px;
			}
			#pr2{
				font-family:"comic sans";
			}
			
        </style>
    </head>
    <body id="bg">
		<div id="dabba">
        <center><div id="box"></div></center>
        <div><img src="logo.png" height="100px" width="120px" id="logo"></img></div>
        <div id="title">LITTLE KINGDOM</div>
        <div id="date">Date : </div>
        <div id="name">Name : </div>
        <div id="age">Age : </div>
        <hr style="background-color:black;width:500px;height:2px;position:relative;top:-530px;">
        <hr style="background-color:black;width:500px;height:2px;position:relative;top:-500px;">
        <hr style="background-color:black;width:500px;height:2px;position:relative;top:-370px;">
        <div id="line1"></div>
        <div id="line2"></div>
        <div id="line3"></div>
        <div id="line4"></div>
        <div id="num">SR NO.</div>
        <div id="sub">SUBJECT</div>
        <div><pre id="stumark">   MARKS 
OBTAINED</pre></div>
        <div><pre id="totmark">   TOTAL
  MARKS</pre></div>
        <div id="res">RESULT</div>
        <div id="fres">Total Marks Obtained : </div>
        <div id="percent">Total Percentage : </div>
        <div id="finalres">RESULT : </div>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div><input type="submit" name="submit" value="NEXT" id="next"></div>
        </form>
        <div id="s1">1</div>
        <div id="s2">2</div>
        <div id="s3">3</div>
        <div id="sub1">ENGLISH</div>
        <div id="sub2">MATHS</div>
        <div id="sub3">G.K</div>
        <div id="m1">50</div>
        <div id="m2">50</div>
        <div id="m3">50</div>
		<marquee id="pr"><pre id="pr2">ProgressReport     ProgressReport     ProgressReport     ProgressReport     ProgressReport     ProgressReport     ProgressReport     ProgressReport     ProgressReport     ProgressReport      ProgressReport     ProgressReport     ProgressReport     ProgressReport</pre></marquee>
		</div>
        <?php
        $conn=mysqli_connect("localhost","root","Taniyaa","kids");
        $num = 0;
		echo "<div id='dabba2'>";
        echo "<div id='d1'>";
        echo "" .date("d-m-Y");
        echo "</div>";
        $query=" SELECT `Name` FROM `progress` WHERE Total='1' ";
        $res=mysqli_query($conn,$query);
        $count=mysqli_num_rows($res);
        if($count>0){
            while($row=$res->fetch_assoc()){
                echo "<div id='nm1'>" .$row["Name"]. "</div>";
            }
        }
        $query=" SELECT `Age` FROM `progress` WHERE Total='1' ";
        $res=mysqli_query($conn,$query);
        $count=mysqli_num_rows($res);
        if($count>0){
            while($row=$res->fetch_assoc()){
                echo "<div id='age1'>" .$row["Age"]. " years </div>";
            }
        }
        $query=" SELECT `TotalMarks` FROM `progress` WHERE Total='1' ";
        $res=mysqli_query($conn,$query);
        $count=mysqli_num_rows($res);
        if($count>0){
            while($row=$res->fetch_assoc()){
                echo "<div id='engm'>" .$row["TotalMarks"]. "</div>";
                $engm = $row["TotalMarks"];
                $num = $num + $engm;
                if($row["TotalMarks"]>24){
                    echo "<div id='p1'> Pass </div>";
                }
                else{
                    echo "<div id='f1'> Fail </div>";
                }
            }
        }
        $query=" SELECT `TotalMarks` FROM `progress` WHERE Total='3' ";
        $res=mysqli_query($conn,$query);
        $count=mysqli_num_rows($res);
        if($count>0){
            while($row=$res->fetch_assoc()){
                echo "<div id='mathm'>" .$row["TotalMarks"]. "</div>";
                $mathm = $row["TotalMarks"];
                $num = $num + $mathm;
                if($row["TotalMarks"]>24){
                    echo "<div id='p2'> Pass </div>";
                }
                else{
                    echo "<div id='f2'> Fail </div>";
                }
            }
        }
        $query=" SELECT `TotalMarks` FROM `progress` WHERE Total='2' ";
        $res=mysqli_query($conn,$query);
        $count=mysqli_num_rows($res);
        if($count>0){
            while($row=$res->fetch_assoc()){
                $gkm = $row["TotalMarks"];
                $num = $num + $gkm;
                echo "<div id='gkm'>" .$row["TotalMarks"]. "</div>";
                if($row["TotalMarks"]>24){
                    echo "<div id='p3'> Pass </div>";
                }
                else{
                    echo "<div id='f3'> Fail </div>";
                }
            }
        }
        echo "<div id='obtainm'>" .$num. "/150 </div>";
        $percent = ($num * 100) / 150 ;
        $percent1 =  number_format($percent,2);
        echo "<div id='tpercent'>" .$percent1. "% </div>";
        if($engm > 24 && $mathm > 24 && $gkm > 24){
            echo "<div id='fpass'> PASS </div>";
        }
        else{
            echo "<div id='ffail'> FAIL </div>";
        }
        if(isset($_POST["submit"])){
            if($engm > 24 && $mathm > 24 && $gkm > 24){
                echo "<script> window.location.href = 'certificate.php'; </script>";
            }
            else{
                echo "<script> window.location.href = 'console.php'; </script>";
            } 
           echo "</div>";			
        }
        ?>
    </body>
</html>