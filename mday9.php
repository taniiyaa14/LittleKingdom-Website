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
            #day9logo{
                position:relative;
                left:-20px;
                top:-20px;
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
                position: relative;
                top:-290px; 
            }
            .image2{
                padding:110px;
                position: relative;
                top:-370px;
            }
            #ex1{
                font-family:"goudy stout";
			   font-size:24px;
               position:relative;
               top:-400px;
            }
            #question1{
                 font-family:"Matura MT Script Capitals";
			   font-size:38px;
                position:relative;
                top:-330px;
            }
            #box1{
                position:relative;
                top:-150px;
            }
            #image1{
                position:relative;
                top:-100px;
                left:70px;
            }
            #image2{
                position:relative;
                top:10px;
                left:70px;
            }
            #image3{
                position:relative;
                top:110px;
                left:70px;
            }
            #fifteen{
                position:relative;
                left:720px;
                top:-760px;
                height:120px;
                width:130px;
                font-size: 100px;
                padding:07px;
                background-color:transparent;
                border:2px solid black;
                border-radius:10px;
            }
            #twelve{
                position:relative;
                left:720px;
                top:-550px;
                height:120px;
                width:130px;
                font-size: 100px;
                padding:07px;
                background-color:transparent;
                border:2px solid black;
                border-radius:10px;
            }
            #eighteen{
                position:relative;
                left:720px;
                top:-320px;
                height:120px;
                width:130px;
                font-size: 100px;
                padding:07px;
                background-color:transparent;
                border:2px solid black;
                border-radius:10px;
            }
            #res{
           position:relative;
		   left:1012px;
           top:-1510px;
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
                top:-420px;
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
                top:-340px;
                left:-4px;
            } 
            #ansfetch1{
                position:relative;
                top:-542px;
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
            #fifteencans{
                position:relative;
                font-size:40px;
                font-weight:bold;
                left:1130px;
                top:-5642px;
            }
            #fifteenyans{
                position:relative;
                font-weight:bold;
                font-size:40px;
                left:1132px;
                top:-5758px;
            }
            #ansfetch2{
                position:relative;
                top:-43px;
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
            #twelvecans{
                position:relative;
                font-size:40px;
                font-weight:bold;
                left:1130px;
                top:-5642px;
            }
            #twelveyans{
                position:relative;
                font-weight:bold;
                font-size:40px;
                left:1132px;
                top:-5758px;
            }
            #ansfetch3{
                position:relative;
                top:-18px;
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
            #eighteencans{
                position:relative;
                font-size:40px;
                font-weight:bold;
                left:1130px;
                top:-5642px;
            }
            #eighteenyans{
                position:relative;
                font-weight:bold;
                font-size:40px;
                left:1132px;
                top:-5758px;
            }
            #ex2{
                font-family:"goudy stout";
			   font-size:24px;
               position:relative;
               top:-250px;
            }
            #question2{
                 font-family:"Matura MT Script Capitals";
			   font-size:38px;
                position:relative;
                top:-190px;
            }
            #v1{
                position: relative;
                top:-2060px;
                left:70px;
            }
            #border17{
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
                top:-2402px;
                left:728px;
            }
            #border11{
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
                top:-2441px;
                left:728px;
            }
            #border19{
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
                top:-2488px;
                left:726px;
            }
            #va1{
                position: relative;
                top:-2306px;
                left:70px;
            }
            #border18{
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
                left:728px;
            }
            #border20{
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
                top:-2688px;
                left:728px;
            }
            #border15{
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
                top:-2730px;
                left:726px;
            }
            #val1{
                position: relative;
                top:-2546px;
                left:70px;
            }
            #border12{
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
                top:-2882px;
                left:725px;
            }
            #border14{
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
                top:-2923px;
                left:725px;
            }
            #border16{
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
                top:-2963px;
                left:727px;
            }
            #res2{
           position:relative;
		   left:1012px;
           top:-2290px;
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
                top:-2285px;
            }
            #res3out{
                position: relative;
                left:870px;
                top:-2230px;
            }
            #res4out{
                position: relative;
                left:870px;
                top:-2175px;
            }
            #box{
                position:relative;
                top:1970px;
            }
            a{
                text-decoration:none;
               
            }			
#line2{
    border:3px solid black;
    width:100%;
    background-color: black;
    position: relative;
    top:-2100px;
} 
#boybookhand{
position:relative;
top:-1750px;
left:350px;
}    
#playbutton{
position:relative;
top:-2050px;
left:600px;
} 
#back{
position:relative;
top:-2060px;
left:630px;
font-size:30px;
font-family:"engravers mt";
}
#day9logo{
position:relative;
left:-30px;
top:-20px;
}
#last{
    position:relative;
    top:-280px;
}
#quest1{
    position:relative;
	left:-2px;
    top:-5530px;
}
#quest2{
    position:relative;
    top:-5250px;
    left:-15px;
}
#quest3{
    position:relative;
    top:-4980px;
    left:-2px;
}
#quest4{
    position:relative;
	left:-5px;
    top:-4140px;
}
#quest5{
    position:relative;
    top:-3780px;
    left:-13px;
}
#quest6{
    position:relative;
    top:-3420px;
    left:-8px;
}
        </style>
    </head> 
    <body id="bg">
    <div><img src="mathslogo9.png" height="200px" width="350px" id="day9logo"></div>
        <div><img src="ref.png" height="190px" width="350px" id="referencename"></div>
		<script src="mday9.js"></script>
        <div id="logo"><img src="circlelogo.png" height="100px" width="100px"></img></div> 
        <div><img src="mday9ref1.jpg" height="350px" width="350px" class="image1"></img>
            <img src="mday9ref2.jpg" height="350px" width="350px" class="image1"></img>
            <img src="mday9ref3.jpg" height="350px" width="350px" class="image1"></img>
            <img src="mday9ref4.jpg" height="350px" width="350px" class="image2"></img>
            <img src="mday9ref5.jpg" height="350px" width="350px" class="image2"></img>
        </div> 
        <div id="ex1"><h1><center>~ Exercise 1 ~</center></h1></div>
        <div id="question1">Ques- Count and write : </div>  
        <div id="box1">
        <div><img src="day9ex1que1.png" height="245px" width="600px" id="image1"></img></div>
        <div><img src="day9ex1que2.png" height="245px" width="600px" id="image2"></img></div>
        <div><img src="day9ex1que3.png" height="245px" width="600px" id="image3"></img></div>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div><input type="text" name="fifteen" id="fifteen" value="<?php if(isset($_POST['fifteen'])) echo $_POST['fifteen'] ?>"></div>
            <div><input type="text" name="twelve" id="twelve" value="<?php if(isset($_POST['twelve'])) echo $_POST['twelve'] ?>"></div>
            <div><input type="text" name="eighteen" id="eighteen" value="<?php if(isset($_POST['eighteen'])) echo $_POST['eighteen'] ?>"></div>
            </div>
            <div><button id="res"><h1>RESULT</h1></button></div>
            <div><center><input type="submit" name="submit" value="Check Answers" id="ans"></center></div>
        </form>
		<div id="line1"></div>
		
        <div id="ex2"><h1><center>~ Exercise 2 ~</center></h1></div>
        <div id="question2">Ques- Count and Connect : </div>
        <div id="box">
        <div><img src="day9ex2que1.png" height="245px" width="600px" id="v1"></img></div>
		<div id="border17"></div>
        <div><img src="seventeenbg.png" height="62px" width="75px" id="v2" onclick="getans1()"></img></div>
		<div id="border11"></div>
        <div><img src="elevenbg.png" height="65px" width="83px" id="v3" onclick="getans2()"></img></div>
		<div id="border19"></div>
        <div><img src="nineteenbg.png" height="67px" width="83px" id="v4" onclick="getans3()"></img></div>
		
        <div><img src="day9ex2que2.png" height="245px" width="600px" id="va1"></img></div>
		<div id="border18"></div>
        <div><img src="eighteenbg.png" height="66px" width="81px" id="va2" onclick="getans4()"></img></div>
		<div id="border20"></div>
        <div><img src="twentybg.png" height="68px" width="80px" id="va3" onclick="getans5()"></img></div>
		<div id="border15"></div>
        <div><img src="fifteenbg.png" height="64px" width="88px" id="va4" onclick="getans6()"></img></div> 
		
        <div><img src="day9ex2que3.png" height="245px" width="600px" id="val1"></img></div>
		<div id="border12"></div>
        <div><img src="twelvebg.png" height="66px" width="87px" id="val2" onclick="getans7()"></img></div>
		<div id="border14"></div>
        <div><img src="fourteenbg.png" height="70px" width="86px" id="val3" onclick="getans8()"></img></div>
		<div id="border16"></div>
        <div><img src="sixteenbg.png" height="65px" width="82px" id="val4" onclick="getans9()"></img></div>
        </div>
        <div><button id="res2"><h1>RESULT</h1></button></div>
        <div><img src="questionimg.gif" height="380px" width="300px" id="res2out"></img></div>
        <div><img src="questionimg.gif" height="380px" width="300px" id="res3out"></img></div>
        <div><img src="questionimg.gif" height="380px" width="300px" id="res4out"></img></div>
		
		 <div id="line2"></div>
		
		<div id="last">
         <div><img src="a9.png" height="380px" width="280px" id="boybookhand"></img></div>
		<div id="back"><b>Back <br>to <br> Choose <br> Subject</b></a></div>
        <div><a href="choosesub.php#img2"><img src="playbutton.png" height="150px" width="250px" id="playbutton"></img></a></div>
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
                $fifteen=$_POST['fifteen'];
                $twelve=$_POST['twelve'];
                $eighteen=$_POST['eighteen'];
                $query=" UPDATE `mathans` SET `Userans`='$fifteen' WHERE `Correctans`='fifteen9' ";
                $res=mysqli_query($conn,$query);
                $query1=" UPDATE `mathans` SET `Userans`='$twelve' WHERE `Correctans`='twelve9' ";
                $res1=mysqli_query($conn,$query1);
                $query2=" UPDATE `mathans` SET `Userans`='$eighteen' WHERE `Correctans`='eighteen9' ";
                $res2=mysqli_query($conn,$query2);
                $query3 = " SELECT * FROM `mathans` WHERE Correctans='fifteen9' ";
                $res3 = mysqli_query($conn,$query3);
                $nums =  mysqli_num_rows($res3);
                $result = mysqli_fetch_array($res3);
                echo "<div id='ansfetch1'>";
                echo "<div id='b1'></div>";
                echo "<div id='l1'></div>";
                echo "<div id='y1'>Your Answer : </div>";
                echo "<div id='c1'>Correct Answer : </div>";
                echo "<div id='answbox'></div>";
                echo "<div id='canswbox'></div>";
                echo "<div id='fifteencans'>15</div>";
                echo "<div id='fifteenyans'>$result[1]</div>";
                $query4 = " SELECT * FROM `mathans` WHERE Correctans='twelve9' ";
                $res4 = mysqli_query($conn,$query4);
                $nums1 =  mysqli_num_rows($res4);
                $result1 = mysqli_fetch_array($res4);
                echo "<div id='ansfetch2'>";
                echo "<div id='b2'></div>";
                echo "<div id='l2'></div>";
                echo "<div id='y2'>Your Answer : </div>";
                echo "<div id='c2'>Correct Answer : </div>";
                echo "<div id='answbox1'></div>";
                echo "<div id='canswbox1'></div>";
                echo "<div id='twelvecans'>12</div>";
                echo "<div id='twelveyans'>$result1[1]</div>";
                $query5 = " SELECT * FROM `mathans` WHERE Correctans='eighteen9' ";
                $res5 = mysqli_query($conn,$query5);
                $nums2 =  mysqli_num_rows($res5);
                $result2 = mysqli_fetch_array($res5);
                echo "<div id='ansfetch3'>";
                echo "<div id='b3'></div>";
                echo "<div id='l3'></div>";
                echo "<div id='y3'>Your Answer : </div>";
                echo "<div id='c3'>Correct Answer : </div>";
                echo "<div id='answbox2'></div>";
                echo "<div id='canswbox2'></div>";
                echo "<div id='eighteencans'>18</div>";
                echo "<div id='eighteenyans'>$result2[1]</div>";
            }
        ?>
    </body>
</html>