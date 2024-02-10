<html>
    <head>
        <title>LittleKingdom</title>
        <style>
            #bg{
                background: url('mathbg.jpeg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 1280px 700px;   
                overflow-x:hidden;            
            }
            #day4logo{
                position:relative;
                left:-30px;
                top:-10px;
            }
            #referencename{
                position:relative;
                left:470px;
                top:-130px;
            }
            #logo{
                position: relative;
                left:1100px;
                top:-390px;
            }
            .image1{
                padding:20px;
                position:relative;
                top:-300px;
            }
            #ex1{
                font-family:"goudy stout";
			   font-size:24px;
               position:relative;
               top:-250px;
            }
            #question1{
                 font-family:"Matura MT Script Capitals";
			   font-size:38px;
                position:relative;
                top:-180px;
            }
            #image1{
                position:relative;
                top:-100px;
                left:90px;
            }
            #image2{
                position:relative;
                top:10px;
                left:90px;
            }
            #image3{
                position:relative;
                top:110px;
                left:90px;
            }
            #five{
                position:relative;
                left:720px;
                top:-760px;
                height:120px;
                width:130px;
                font-size: 100px;
                padding:30px;
                background-color:transparent;
                border:2px solid black;
                border-radius:10px;
            }
            #three{
                position:relative;
                left:720px;
                top:-550px;
                height:120px;
                width:130px;
                font-size: 100px;
                padding:30px;
                background-color:transparent;
                border:2px solid black;
                border-radius:10px;
            }
            #nine{
                position:relative;
                left:720px;
                top:-320px;
                height:120px;
                width:130px;
                font-size: 100px;
                padding:30px;
                background-color:transparent;
                border:2px solid black;
                border-radius:10px;
            }
            #res{
           position:relative;
		   left:1000px;
           top:-1324px;
           height:70px;
           width:150px;
           border:2px solid black;
           border-radius:10px;
		   background-color:black;
		   color:white;
		   }
           #ans{
                position:relative;
                padding:20px;
                top:-250px;
                width:300px;
				border-radius:10px;
				color:white;
				background-color:black;
				font-family:"berlin sans fb";
				font-size:30px;
            }
            #line1{
                border:3px solid black;
                width:100%;
                background-color: black;
                position: relative;
                top:-200px;
                left:-4px;
            }  
            #b1{
                height:130px;
                width:250px;
                background-color:black;
                border:1px solid black;
                position:relative;
                left:930px;
                top:-5440px;
            }
            #l1{
                border:2px solid white;
                width:20%;
                background-color: white;
                position: relative;
                top:-5508px;
                left:933px;
            } 
            #y1{
                position:relative;
                font-size:25px;
                color:white;
                top:-5558px;
                left:939px;
                font-weight:bold;
            } 
            #c1{
                position:relative;
                font-size:25px;
                color:white;
                top:-5522px;
                left:939px;
                font-weight:bold;
            } 
            #answbox{
                height:40px;
                width:40px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:1130px;
                top:-5625px;
            }
            #canswbox{
                height:40px;
                width:40px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:1130px;
                top:-5599px;
            }
            #fivecans{
                position:relative;
                font-size:45px;
                font-weight:bold;
                left:1140px;
                top:-5645px;
            }
            #fiveyans{
                position:relative;
                font-weight:bold;
                font-size:45px;
                left:1140px;
                top:-5766px;
            } 
			#ansfetch{
                position:relative;
                top:-497px;
            }
            #ansfetch1{
                position:relative;
                top:-547px;
            }
            #b2{
                height:130px;
                width:250px;
                background-color:black;
                border:1px solid black;
                position:relative;
                left:930px;
                top:-5440px;
            }
            #l2{
                border:2px solid white;
                width:20%;
                background-color: white;
                position: relative;
                top:-5508px;
                left:933px;
            } 
            #y2{
                position:relative;
                font-size:25px;
                color:white;
                top:-5558px;
                left:939px;
                font-weight:bold;
            } 
            #c2{
                position:relative;
                font-size:25px;
                color:white;
                top:-5522px;
                left:939px;
                font-weight:bold;
            } 
            #answbox1{
                height:40px;
                width:40px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:1130px;
                top:-5625px;
            }
            #canswbox1{
                height:40px;
                width:40px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:1130px;
                top:-5599px;
            }
            #threecans{
                position:relative;
                font-size:45px;
                font-weight:bold;
                left:1140px;
                top:-5645px;
            }
            #threeyans{
                position:relative;
                font-weight:bold;
                font-size:45px;
                left:1140px;
                top:-5766px;
            }
            #ansfetch2{
                position:relative;
                top:-580px;
            }
            #b3{
                height:130px;
                width:250px;
                background-color:black;
                border:1px solid black;
                position:relative;
                left:930px;
                top:-5440px;
            }
            #l3{
                border:2px solid white;
                width:20%;
                background-color: white;
                position: relative;
                top:-5508px;
                left:933px;
            } 
            #y3{
                position:relative;
                font-size:25px;
                color:white;
                top:-5558px;
                left:939px;
                font-weight:bold;
            } 
            #c3{
                position:relative;
                font-size:25px;
                color:white;
                top:-5522px;
                left:939px;
                font-weight:bold;
            } 
            #answbox2{
                height:40px;
                width:40px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:1130px;
                top:-5625px;
            }
            #canswbox2{
                height:40px;
                width:40px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:1130px;
                top:-5599px;
            }
            #ninecans{
                position:relative;
                font-size:45px;
                font-weight:bold;
                left:1140px;
                top:-5645px;
            }
            #nineyans{
                position:relative;
                font-weight:bold;
                font-size:45px;
                left:1140px;
                top:-5766px;
            }
            #ex2{
               font-family:"goudy stout";
			   font-size:24px;
               position:relative;
               top:-130px;
            }
            #question2{
                 font-family:"Matura MT Script Capitals";
			   font-size:38px;
                position:relative;
                top:-60px;
            }
            #v1{
                position: relative;
                top:-2050px;
                left:90px;
            }
            #borderfour{
                position:relative;
                left:720px;
				padding:20px;
                top:-2330px;
                height:35px;
                width:50px;
                font-size:73px;
				background-color:transparent;
				border:2px solid black;
                border-radius:10px; 
            }
            #v2{
                position: relative;
                top:-2407px;
                left:725px;
            }
            #bordereight{
                position:relative;
                left:720px;
				padding:20px;
                top:-2370px;
                height:35px;
                width:50px;
                font-size:73px;
				background-color:transparent;
				border:2px solid black;
                border-radius:10px; 
            }
            #v3{
                position: relative;
                top:-2449px;
                left:728px;
            }
            #bordertwo{
                position:relative;
                left:720px;
				padding:20px;
                top:-2415px;
                height:35px;
                width:50px;
                font-size:73px;
				background-color:transparent;
				border:2px solid black;
                border-radius:10px; 
            }
            #v4{
                position: relative;
                top:-2492px;
                left:726px;
            }
            #va1{
                position: relative;
                top:-2300px;
                left:90px;
            }
            #borderseven{
                position:relative;
                left:720px;
				padding:20px;
                top:-2575px;
                height:35px;
                width:50px;
                font-size:73px;
				background-color:transparent;
				border:2px solid black;
                border-radius:10px; 
            }
            #va2{
                position: relative;
                top:-2648px;
                left:732px;
            }
            #borderten{
                position:relative;
                left:720px;
				padding:20px;
                top:-2615px;
                height:35px;
                width:50px;
                font-size:73px;
				background-color:transparent;
				border:2px solid black;
                border-radius:10px; 
            }
            #va3{
                position: relative;
                top:-2690px;
                left:720px;
            }
            #borderfive{
                position:relative;
                left:720px;
				padding:20px;
                top:-2660px;
                height:35px;
                width:50px;
                font-size:73px;
				background-color:transparent;
				border:2px solid black;
                border-radius:10px; 
            }
            #va4{
                position: relative;
                top:-2733px;
                left:728px;
            }
            #val1{
                position: relative;
                top:-2530px;
                left:90px;
            }
            #borderthree{
                position:relative;
                left:720px;
				padding:20px;
                top:-2810px;
                height:35px;
                width:50px;
                font-size:73px;
				background-color:transparent;
				border:2px solid black;
                border-radius:10px; 
            }
            #val2{
                position: relative;
                top:-2890px;
                left:730px;
            }
            #bordernine{
                position:relative;
                left:720px;
				padding:20px;
                top:-2850px;
                height:35px;
                width:50px;
                font-size:73px;
				background-color:transparent;
				border:2px solid black;
                border-radius:10px; 
            }
            #val3{
                position: relative;
                top:-2929px;
                left:730px;
            }
            #bordersix{
                position:relative;
                left:720px;
				padding:20px;
                top:-2895px;
                height:35px;
                width:50px;
                font-size:73px;
				background-color:transparent;
				border:2px solid black;
                border-radius:10px; 
            }
            #val4{
                position: relative;
                top:-2972px;
                left:730px;
            }
            #res2{
                position:relative;
		   left:1000px;
           top:-4398px;
           height:70px;
           width:150px;
           border:2px solid black;
           border-radius:10px;
		   background-color:black;
		   color:white;
            }
            #res2out{
                position: relative;
                left:870px;
                top:-4340px;
            }
            #res3out{
                position: relative;
                left:870px;
                top:-4250px;
            }
            #res4out{
                position: relative;
                left:870px;
                top:-4160px;
            }
            #box{
                position:relative;
                top:2130px;
            }
            #line2{
                border:3px solid black;
                width:100%;
                background-color: black;
                position: relative;
                top:-1950px;
            }  
            #last{
	            position:relative;
	            top:50px;
            }
            #boybookhand{
                position:relative;
                left:350px;
                top:-1900px;
            }    
            #playbutton{
                position:relative;
                left:600px;
                top:-2200px;
            } 
            #back{
                position:relative;
                left:630px;
                top:-2230px;
                font-size:30px;
                font-family:"engravers mt";
            }
#quest1{
    position:relative;
	left:-2px;
    top:-5470px;
}
#quest2{
    position:relative;
    top:-5190px;
    left:-15px;
}
#quest3{
    position:relative;
    top:-4920px;
    left:-2px;
}
#quest4{
    position:relative;
	left:-5px;
    top:-4080px;
}
#quest5{
    position:relative;
    top:-3680px;
    left:-13px;
}
#quest6{
    position:relative;
    top:-3300px;
    left:-8px;
}
        </style>
    </head> 
    <body id="bg">
        <div><img src="mathslogo4.png" height="205px" width="350px" id="day4logo"></div>
        <div><img src="ref.png" height="190px" width="350px" id="referencename"></div>
        <div id="logo"><img src="circlelogo.png" height="100px" width="100px"></img></div> 
        <div><img src="frame1-5.png" height="350px" width="550px" class="image1"></img>
        <img src="frame6-10.png" height="350px" width="550px" class="image1"></img></div> 
        <div id="ex1"><h1><center>~ Exercise 1 ~</center></h1></div>
        <div id="question1">Ques- Count and write : </div>  
        <div><img src="count5.png" height="245px" width="570px" id="image1"></img></div>
        <div><img src="count3.png" height="245px" width="570px" id="image2"></img></div>
        <div><img src="count9.png" height="245px" width="570px" id="image3"></img></div>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div><input type="text" name="five" id="five" value="<?php if(isset($_POST['five'])) echo $_POST['five'] ?>"></div>
            <div><input type="text" name="three" id="three" value="<?php if(isset($_POST['three'])) echo $_POST['three'] ?>"></div>
            <div><input type="text" name="nine" id="nine" value="<?php if(isset($_POST['nine'])) echo $_POST['nine'] ?>"></div>
            <div><button id="res"><h1>RESULT</h1></button></div>
            <div><center><input type="submit" name="submit" value="Check Answers" id="ans"></center></div>
        </form>
        <div id="line1"></div>
        <div id="ex2"><h1><center>~ Exercise 2 ~</center></h1></div>
        <div id="question2">Ques- Count and Connect : </div>
        <div id="box">
        <div><img src="count3.2.png" height="245px" width="570px" id="v1"></img></div>
        <div id="borderfour"></div>
        <div><img src="threenum.png" height="80px" width="90px" id="v2" onclick="getans1()"></img></div>
        <div id="bordereight"></div>
        <div><img src="eightnum.png" height="80px" width="80px" id="v3" onclick="getans2()"></img></div>
        <div id="bordertwo"></div>
        <div><img src="twonum.png" height="77px" width="90px" id="v4" onclick="getans3()"></img></div>
		
        <div><img src="count10.png" height="245px" width="570px" id="va1"></img></div>
        <div id="borderseven"></div>
        <div><img src="sevennum.png" height="68px" width="73px" id="va2" onclick="getans4()"></img></div>
        <div id="borderten"></div>
        <div><img src="tennum.png" height="75px" width="100px" id="va3" onclick="getans5()"></img></div>
        <div id="borderfive"></div>
        <div><img src="fivenum.png" height="68px" width="80px" id="va4" onclick="getans6()"></img></div> 
		
        <div><img src="count6.png" height="245px" width="570px" id="val1"></img></div>
        <div id="borderthree"></div>
        <div><img src="threenum.png" height="85px" width="80px" id="val2" onclick="getans7()"></img></div>
        <div id="bordernine"></div>
        <div><img src="ninenum.png" height="80px" width="80px" id="val3" onclick="getans8()"></img></div>
        <div id="bordersix"></div>
        <div><img src="sixnum.png" height="80px" width="80px" id="val4" onclick="getans9()"></img></div>
        <script src="mday4.js"></script>
        <div><button id="res2"><h1>RESULT</h1></button></div>
        <div><img src="questionimg.gif" height="380px" width="300px" id="res2out"></img></div>
        <div><img src="questionimg.gif" height="380px" width="300px" id="res3out"></img></div>
        <div><img src="questionimg.gif" height="380px" width="300px" id="res4out"></img></div>
        </div>
        <div id="line2"></div>
		<div id="last">
		<div><img src="a9.png" height="380px" width="280px" id="boybookhand"></img></div>
        <div id="back"><b>Back <br>to <br> Choose <br> Subject</b></a></div>
        <div><a href="choosesub.php#img2" style="text-decoration: none;"><img src="playbutton.png" height="150px" width="250px" id="playbutton"></img></a></div>
        </div>
		
		<div><img src="que1.png" height="70px" width="70px" id="quest1"></img></div>
       <div><img src="que2.png" height="73px" width="87px" id="quest2"></img></div>
       <div><img src="que3.png" height="75px" width="74px" id="quest3"></img></div>
       <div><img src="que1.png" height="70px" width="70px" id="quest4"></img></div>
       <div><img src="que2.png" height="73px" width="87px" id="quest5"></img></div>
       <div><img src="que3.png" height="75px" width="74px" id="quest6"></img></div>
		
        <?php
            $conn=mysqli_connect("localhost","root","Taniyaa","kids");
            if(isset($_POST["submit"]))
            {
                $five=$_POST['five'];
                $three=$_POST['three'];
                $nine=$_POST['nine'];
                $query=" UPDATE `mathans` SET `Userans`='$five' WHERE `Correctans`='5' ";
                $res=mysqli_query($conn,$query);
                $query1=" UPDATE `mathans` SET `Userans`='$three' WHERE `Correctans`='3' ";
                $res1=mysqli_query($conn,$query1);
                $query2=" UPDATE `mathans` SET `Userans`='$nine' WHERE `Correctans`='9' ";
                $res2=mysqli_query($conn,$query2);
                $query3 = " SELECT * FROM `mathans` WHERE Correctans='5' ";
                $res3 = mysqli_query($conn,$query3);
                $nums =  mysqli_num_rows($res3);
                $result = mysqli_fetch_array($res3);
				 echo "<div id='ansfetch'>";
                echo "<div id='b1'></div>";
                echo "<div id='l1'></div>";
                echo "<div id='y1'>Your Answer : </div>";
                echo "<div id='c1'>Correct Answer : </div>";
                echo "<div id='answbox'></div>";
                echo "<div id='canswbox'></div>";
                echo "<div id='fivecans'>5</div>";
                echo "<div id='fiveyans'>$result[1]</div>";
				  echo "</div>";
                $query4 = " SELECT * FROM `mathans` WHERE Correctans='3' ";
                $res4 = mysqli_query($conn,$query4);
                $nums1 =  mysqli_num_rows($res4);
                $result1 = mysqli_fetch_array($res4);
                echo "<div id='ansfetch1'>";
                echo "<div id='b2'></div>";
                echo "<div id='l2'></div>";
                echo "<div id='y2'>Your Answer : </div>";
                echo "<div id='c2'>Correct Answer : </div>";
                echo "<div id='answbox1'></div>";
                echo "<div id='canswbox1'></div>";
                echo "<div id='threecans'>3</div>";
                echo "<div id='threeyans'>$result1[1]</div>";
                echo "</div>";
                $query5 = " SELECT * FROM `mathans` WHERE Correctans='9' ";
                $res5 = mysqli_query($conn,$query5);
                $nums2 =  mysqli_num_rows($res5);
                $result2 = mysqli_fetch_array($res5);
                echo "<div id='ansfetch2'>";
                echo "<div id='b3'></div>";
                echo "<div id='l3'></div>";
                echo "<div id='y3'>Your Answer : </div>";
                echo "<div id='c3'>Correct Answer : </div>";
                echo "<div id='answbox2'></div>";
                echo "<div id='canswbox2'></div>";
                echo "<div id='ninecans'>9</div>";
                echo "<div id='nineyans'>$result2[1]</div>";
                echo "</div>";
            }
        ?>
    </body>
</html>