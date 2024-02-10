<html>
    <head>
        <title>LittleKingdom</title>
        <style>
            #bg{
                background: url('gkbg.jpeg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 1280px 700px;
                overflow-x:hidden;
            }
            #ex1
			 {
		       position:relative;
               top:-30px;
			   font-family:"goudy stout";
			   font-size:24px;
			 }
			 #heading1
			 {
			   position:relative;
			   top:50px;
			    font-family:"Matura MT Script Capitals";
			   font-size:32px;
			 }
            #puzzle1{
                position: relative;
                top:140px;
                left:-180px;
            }
            #fruitpuzz{
                position:relative;
                top:170px;
                left:-60px;
            }
            #fr1{
                position:relative;
                left:90px;
                top:40px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #fr2{
                position:relative;
                left:500px;
                top:-40px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #fr3{
                position:relative;
                left:900px;
                top:-120px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #fr4{
                position:relative;
                left:90px;
                top:-55px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #fr5{
                position:relative;
                left:500px;
                top:-135px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #fr6{
                position:relative;
                left:900px;
                top:-215px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #fruit1{
                position:relative;
                top:-715px;
                left:25px;
            }
           #result1{
           position:relative;
		   left:990px;
		   top:-1327px;
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
                top:-370px;
                width:300px;
				color:white;
				background-color:black;
				font-family:"berlin sans fb";
				font-size:30px;
				border-radius:10px;
            }
			#question2div{
                position:relative;
                
                top:205px;
                
            }
            #que2{
			   position:relative;
			   top:-440px;
			    font-family:"Matura MT Script Capitals";
			   font-size:32px;
            }
            #puzzle2{
                position: relative;
                top:-350px;
                left:-180px;
            }
            #vegepuzz{
                position:relative;
                top:-65px;
                left:-60px;
            }
            #veg1{
                position:relative;
                left:90px;
                top:-210px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #veg2{
                position:relative;
                left:500px;
                top:-290px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #veg3{
                position:relative;
                left:900px;
                top:-370px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #veg4{
                position:relative;
                left:90px;
                top:-310px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #veg5{
                position:relative;
                left:500px;
                top:-390px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #veg6{
                position:relative;
                left:900px;
                top:-470px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
             #result2{
           position:relative;
		   left:990px;
		   top:-1325px;
           height:70px;
           width:150px;
           border:2px solid black;
           border-radius:10px;
		   background-color:black;
		   color:white;
		   }
           #answer{
                position:relative;
                padding:20px;
                top:-540px;
                width:300px;
				color:white;
				background-color:black;
				font-family:"berlin sans fb";
				font-size:30px;
				border-radius:10px;
            }
            #vegetable1{
                position:relative;
                top:-1355px;
                left:-5px;
            }
			#question3div{
                position: relative;
                top:-5px;
            }
            
            #puzzle3{
                position: relative;
                top:-400px;
                left:-180px;
            }
            #transpuzz{
                position:relative;
                top:-350px;
                left:-60px;
            }
            #tr1{
                position:relative;
                left:90px;
                top:40px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #tr2{
                position:relative;
                left:500px;
                top:-40px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #tr3{
                position:relative;
                left:900px;
                top:-120px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #tr4{
                position:relative;
                left:90px;
                top:-55px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #tr5{
                position:relative;
                left:500px;
                top:-135px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #tr6{
                position:relative;
                left:900px;
                top:-215px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #result3{
           position:relative;
		   left:990px;
		   top:-1878px;
           height:70px;
           width:150px;
           border:2px solid black;
           border-radius:10px;
		   background-color:black;
		   color:white;
		   
		   }
           #answer1{
                position:relative;
                padding:20px;
                top:-500px;
                width:300px;
				color:white;
				background-color:black;
				font-family:"berlin sans fb";
				font-size:30px;
				border-radius:10px;
            }
            #transport1{
                position:relative;
                top:-1352px;
                left:-25px;
            }
            #que4{
			   position:relative;
			   top:-710px;
			    font-family:"Matura MT Script Capitals";
			   font-size:32px;
            }
			#question4div{
				position:relative;
				top:-55px;
			}
            #puzzle4{
                position: relative;
                top:-620px;
                left:-180px;
            }
            #colpuzz{
                position:relative;
                top:-680px;
                left:-60px;
            }
            #col1{
                position:relative;
                left:90px;
                top:150px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #col2{
                position:relative;
                left:500px;
                top:72px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #col3{
                position:relative;
                left:900px;
                top:-7px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #col4{
                position:relative;
                left:90px;
                top:50px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #col5{
                position:relative;
                left:500px;
                top:-27px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
            #col6{
                position:relative;
                left:900px;
                top:-105px;
                height:80px;
                width:220px;
                font-size: 50px;
                padding:20px;
				border:2px solid black;
                border-radius:10px;
            }
             #result4{
           position:relative;
		   left:990px;
		   top:-1745px;
           height:70px;
           width:150px;
           border:2px solid black;
           border-radius:10px;
		   background-color:black;
		   color:white;
		   }
           #color1{
                position:relative;
                top:-1690px;
                left:25px;
            }
           #answer2{
                position:relative;
                padding:20px;
                top:-710px;
                width:300px;
				color:white;
				background-color:black;
				font-family:"berlin sans fb";
				font-size:30px;
				border-radius:10px;
            } 
            
			#ansfetch1{
				position:relative;
				top:-2314px;
			}
            #b1{
                height:350px;
                width:250px;
                background-color:black;
                border:1px solid black;
                position:relative;
                left:930px;
                top:-4950px;
            }
            #l1{
                border:2px solid white;
                width:20%;
                background-color: white;
                position: relative;
                top:-5130px;
                left:933px;
            }
            #y1{
                position:relative;
                font-size:32px;
                color:white;
                top:-5290px;
                left:960px;
                font-weight:bold;
            } 
            #c1{
                position:relative;
                font-size:32px;
                color:white;
                top:-5150px;
                left:940px;
                font-weight:bold;
            }
            #answbox1{
                height:80px;
                width:210px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:950px;
                top:-5310px;
            }
            #canswbox1{
                height:80px;
                width:210px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:950px;
                top:-5215px;
            } 
            #ans1{
                position:relative;
				padding:5px;
                font-size:24px;
                font-weight:bold;
                left:952px;
                top:-5328px;
                font-family:arial;
            }
			#ans2{
                position:relative;
				padding:5px;
                font-size:24px;
                font-weight:bold;
                left:950px;
                top:-5362px;
                font-family:arial;
            }
			#ans3{
                position:relative;
				padding:5px;
                font-size:24px;
                font-weight:bold;
                left:950px;
                top:-5398px;
                font-family:arial;
            }
            #ansy1{
                position:relative;
                font-weight:bold;
                font-size:24px;
                left:960px;
                top:-5685px;
                font-family:arial;
            }
			#ansy2{
                position:relative;
                font-weight:bold;
                font-size:24px;
                left:960px;
                top:-5710px;
                font-family:arial;
            }
            #ansy3{
                position:relative;
                font-weight:bold;
                font-size:24px;
                left:960px;
                top:-5735px;
                font-family:arial;
            }
            #ansfetch2{
				position:relative;
				top:-1156px;
			}
            #b2{
                height:350px;
                width:250px;
                background-color:black;
                border:1px solid black;
                position:relative;
                left:930px;
                top:-4950px;
            }
            #l2{
                border:2px solid white;
                width:20%;
                background-color: white;
                position: relative;
                top:-5130px;
                left:933px;
            }
            #y2{
                position:relative;
                font-size:32px;
                color:white;
                top:-5290px;
                left:960px;
                font-weight:bold;
            } 
            #c2{
                position:relative;
                font-size:32px;
                color:white;
                top:-5150px;
                left:940px;
                font-weight:bold;
            }
            #answbox2{
                height:80px;
                width:210px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:950px;
                top:-5310px;
            }
            #canswbox2{
                height:80px;
                width:210px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:950px;
                top:-5215px;
            } 
            #ans4{
                position:relative;
				padding:5px;
                font-size:24px;
                font-weight:bold;
                left:952px;
                top:-5328px;
                font-family:arial;
            }
			#ans5{
                position:relative;
				padding:5px;
                font-size:24px;
                font-weight:bold;
                left:950px;
                top:-5362px;
                font-family:arial;
            }
			#ans6{
                position:relative;
				padding:5px;
                font-size:24px;
                font-weight:bold;
                left:950px;
                top:-5398px;
                font-family:arial;
            }
            #ansy4{
                position:relative;
                font-weight:bold;
                font-size:24px;
                left:960px;
                top:-5685px;
                font-family:arial;
            }
			#ansy5{
                position:relative;
                font-weight:bold;
                font-size:24px;
                left:960px;
                top:-5710px;
                font-family:arial;
            }
            #ansy6{
                position:relative;
                font-weight:bold;
                font-size:24px;
                left:960px;
                top:-5735px;
                font-family:arial;
            }
            #ansfetch3{
				position:relative;
				top:155px;
			}
            #b3{
                height:350px;
                width:250px;
                background-color:black;
                border:1px solid black;
                position:relative;
                left:930px;
                top:-4950px;
            }
            #l3{
                border:2px solid white;
                width:20%;
                background-color: white;
                position: relative;
                top:-5130px;
                left:933px;
            }
            #y3{
                position:relative;
                font-size:32px;
                color:white;
                top:-5290px;
                left:960px;
                font-weight:bold;
            } 
            #c3{
                position:relative;
                font-size:32px;
                color:white;
                top:-5150px;
                left:940px;
                font-weight:bold;
            }
            #answbox3{
                height:80px;
                width:210px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:950px;
                top:-5310px;
            }
            #canswbox3{
                height:80px;
                width:210px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:950px;
                top:-5215px;
            } 
            #ans7{
                position:relative;
				padding:5px;
                font-size:24px;
                font-weight:bold;
                left:980px;
                top:-5328px;
                font-family:arial;
            }
			#ans8{
                position:relative;
				padding:5px;
                font-size:24px;
                font-weight:bold;
                left:978px;
                top:-5362px;
                font-family:arial;
            }
			#ans9{
                position:relative;
				padding:5px;
                font-size:24px;
                font-weight:bold;
                left:978px;
                top:-5398px;
                font-family:arial;
            }
            #ansy7{
                position:relative;
                font-weight:bold;
                font-size:24px;
                left:980px;
                top:-5685px;
                font-family:arial;
            }
			#ansy8{
                position:relative;
                font-weight:bold;
                font-size:24px;
                left:980px;
                top:-5710px;
                font-family:arial;
            }
            #ansy9{
                position:relative;
                font-weight:bold;
                font-size:24px;
                left:980px;
                top:-5735px;
                font-family:arial;
            }
            #ansfetch4{
				position:relative;
				top:1326px;
			}
            #b4{
                height:350px;
                width:250px;
                background-color:black;
                border:1px solid black;
                position:relative;
                left:930px;
                top:-4950px;
            }
            #l4{
                border:2px solid white;
                width:20%;
                background-color: white;
                position: relative;
                top:-5130px;
                left:933px;
            }
            #y4{
                position:relative;
                font-size:32px;
                color:white;
                top:-5290px;
                left:960px;
                font-weight:bold;
            } 
            #c4{
                position:relative;
                font-size:32px;
                color:white;
                top:-5150px;
                left:940px;
                font-weight:bold;
            }
            #answbox4{
                height:80px;
                width:210px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:950px;
                top:-5310px;
            }
            #canswbox4{
                height:80px;
                width:210px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:950px;
                top:-5215px;
            } 
            #ans10{
                position:relative;
				padding:5px;
                font-size:24px;
                font-weight:bold;
                left:980px;
                top:-5328px;
                font-family:arial;
            }
			#ans11{
                position:relative;
				padding:5px;
                font-size:24px;
                font-weight:bold;
                left:978px;
                top:-5362px;
                font-family:arial;
            }
			#ans12{
                position:relative;
				padding:5px;
                font-size:24px;
                font-weight:bold;
                left:978px;
                top:-5398px;
                font-family:arial;
            }
            #ansy10{
                position:relative;
                font-weight:bold;
                font-size:24px;
                left:980px;
                top:-5685px;
                font-family:arial;
            }
			#ansy11{
                position:relative;
                font-weight:bold;
                font-size:24px;
                left:980px;
                top:-5710px;
                font-family:arial;
            }
            #ansy12{
                position:relative;
                font-weight:bold;
                font-size:24px;
                left:980px;
                top:-5735px;
                font-family:arial;
            }
            #ex2
			 {
		       position:relative;
			   font-family:"goudy stout";
			   font-size:24px;
			   top:-560px;
			 
			 }
			 #heading2
			 {
			   position:relative;
			   top:-490px;
			    font-family:"Matura MT Script Capitals";
			   font-size:32px;
             }
			#logo{
                position: relative;
                left:1100px;
                top:-650px;
            }
#referencename{
position:relative;
top:-50px;
left:180px;
}
#think{
    position:relative;
    left:800px;
    top:-350px;
}
a{
                text-decoration:none;
               
            }
#line1{
    border:3px solid black;
    width:100%;
    background-color: black;
    position: relative;
    top:-650px;
}  
#line10{
    border:3px solid black;
    width:100%;
    background-color: black;
    position: relative;
    top:-350px;
}  
#line20{
    border:3px solid black;
    width:100%;
    background-color: black;
    position: relative;
    top:-890px;
}  			
#line2{
    border:3px solid black;
    width:100%;
    background-color: black;
    position: relative;
    top:-1150px;
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
#day8logo{
position:relative;
left:-10px;
top:-10px;
}
#last{
position:relative;
top:680px;
}
#box{
position:relative;
top:-880px;
} 
#puzz1{
    position:relative;
    left:30px;
    top:-370px;
}    
#puzz2{
    position:relative;
    left:410px;
    top:-700px;
}  
#puzz3{
    position:relative;
    left:790px;
    top:-1020px;
}      
        </style>
    </head>
    <body id="bg">
    <div><img src="gk8daylogo.png" height="170px" width="350px" id="day8logo"></div>
		 
        <div><img src="wordnm.png" height="200px" width="650px" id="referencename"></div>
        <div><img src="thinknm.png" height="280" width="300" id="think"></img></div>
		
    <div id="logo"><img src="circlelogo.png" height="100px" width="100px"></img></div>
    <div><img src="wordsearch.png" height="300px" width="400px" id="puzz1"></div>
    <div><img src="gkday8boy.png" height="350px" width="400px" id="puzz2"></div>
    <div><img src="puzzleif.gif" height="300px" width="400px" id="puzz3"></div>
    <div id ="box">
    <div id="ex1"><h1><center>~ Exercise 1 ~</center></h1></div>
    <div id="heading1">Ques- Find the fruit names from the given puzzle :</div>
    <div id="puzzle1"><center><img src="fruitpuzzle.png" height="350px" width="500px"></img></center></div>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div id="fruitpuzz">
        <div><input type="text" name="fruit1" id="fr1" value="<?php if(isset($_POST['fruit1'])) echo $_POST['fruit1'] ?>"></div>
        <div><input type="text" name="fruit2" id="fr2" value="<?php if(isset($_POST['fruit2'])) echo $_POST['fruit2'] ?>"></div>
        <div><input type="text" name="fruit3" id="fr3" value="<?php if(isset($_POST['fruit3'])) echo $_POST['fruit3'] ?>"></div>
        <div><input type="text" name="fruit4" id="fr4" value="<?php if(isset($_POST['fruit4'])) echo $_POST['fruit4'] ?>"></div>    
        <div><input type="text" name="fruit5" id="fr5" value="<?php if(isset($_POST['fruit5'])) echo $_POST['fruit5'] ?>"></div>
        <div><input type="text" name="fruit6" id="fr6" value="<?php if(isset($_POST['fruit6'])) echo $_POST['fruit6'] ?>"></div>    
       </div>
       <div><img src="fruitsnm.png" height="400px" width="100px" id="fruit1"></img></div>
        <div><center><input type="submit" name="submit" value="Check Answers" id="ans"></center></div>
    </form>
	 <div><button id="result1"><h1>RESULT</h1></button></div>
     <div id="line10"></div>
	 <div id="question2div">
    <div id="que2">Ques- Find the vegetable names from the given puzzle :</div>
    <div id="puzzle2"><center><img src="vegetableword.png" height="350px" width="500px"></img></center></div>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <div id="vegepuzz">
        <div><input type="text" name="vege1" id="veg1" value="<?php if(isset($_POST['vege1'])) echo $_POST['vege1'] ?>"></div>
        <div><input type="text" name="vege2" id="veg2" value="<?php if(isset($_POST['vege2'])) echo $_POST['vege2'] ?>"></div>
        <div><input type="text" name="vege3" id="veg3" value="<?php if(isset($_POST['vege3'])) echo $_POST['vege3'] ?>"></div>
        <div><input type="text" name="vege4" id="veg4" value="<?php if(isset($_POST['vege4'])) echo $_POST['vege4'] ?>"></div>    
        <div><input type="text" name="vege5" id="veg5" value="<?php if(isset($_POST['vege5'])) echo $_POST['vege5'] ?>"></div>
        <div><input type="text" name="vege6" id="veg6" value="<?php if(isset($_POST['vege6'])) echo $_POST['vege6'] ?>"></div>    
        </div>
        <div><button id="result2"><h1>RESULT</h1></button></div>
        <div><center><input type="submit" name="value" value="Check Answers" id="answer"></center></div>
        <div><img src="vegenm.png" height="400px" width="180px" id="vegetable1"></img></div>
    </form>
	</div>
	<div id="line1"></div>
    <div id="question3div">
    <div id="ex2"><h1><center>~ Exercise 2 ~</center></h1></div>
    <div id="heading2">Ques- Find the transportation names from the given puzzle :</div>
    <div id="puzzle3"><center><img src="transportpuzzle.png" height="350px" width="500px"></img></center></div>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <div id="transpuzz">
        <div><input type="text" name="trans1" id="tr1" value="<?php if(isset($_POST['trans1'])) echo $_POST['trans1'] ?>"></div>
        <div><input type="text" name="trans2" id="tr2" value="<?php if(isset($_POST['trans2'])) echo $_POST['trans2'] ?>"></div>
        <div><input type="text" name="trans3" id="tr3" value="<?php if(isset($_POST['trans3'])) echo $_POST['trans3'] ?>"></div>
        <div><input type="text" name="trans4" id="tr4" value="<?php if(isset($_POST['trans4'])) echo $_POST['trans4'] ?>"></div>    
        <div><input type="text" name="trans5" id="tr5" value="<?php if(isset($_POST['trans5'])) echo $_POST['trans5'] ?>"></div>
        <div><input type="text" name="trans6" id="tr6" value="<?php if(isset($_POST['trans6'])) echo $_POST['trans6'] ?>"></div>    
       </div>
        <div><center><input type="submit" name="valueadded" value="Check Answers" id="answer1"></center></div>
    </form>
	</div>
    <div><img src="transnm.png" height="400px" width="180px" id="transport1"></img></div>
	 <div><button id="result3"><h1>RESULT</h1></button></div>
     <div id="line20"></div>
	  <div id="question4div">
    <div id="que4">Ques- Find the color names from the given puzzle :</div>
    <div id="puzzle4"><center><img src="colorword.png" height="350px" width="500px"></img></center></div>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div id="colpuzz">
        <div><input type="text" name="col1" id="col1" value="<?php if(isset($_POST['col1'])) echo $_POST['col1'] ?>"></div>
        <div><input type="text" name="col2" id="col2" value="<?php if(isset($_POST['col2'])) echo $_POST['col2'] ?>"></div>
        <div><input type="text" name="col3" id="col3" value="<?php if(isset($_POST['col3'])) echo $_POST['col3'] ?>"></div>
        <div><input type="text" name="col4" id="col4" value="<?php if(isset($_POST['col4'])) echo $_POST['col4'] ?>"></div>    
        <div><input type="text" name="col5" id="col5" value="<?php if(isset($_POST['col5'])) echo $_POST['col5'] ?>"></div>
        <div><input type="text" name="col6" id="col6" value="<?php if(isset($_POST['col6'])) echo $_POST['col6'] ?>"></div>    
       </div>
        <div><center><input type="submit" name="valuesubmit" value="Check Answers" id="answer2"></center></div>
    </form>
    </div>
       <div><button id="result4"><h1>RESULT</h1></button></div>
       <div><img src="colornm.png" height="400px" width="100px" id="color1"></img></div>
       <div id="line2"></div>
      <div id="last">
         <div><img src="a9.png" height="380px" width="280px" id="boybookhand"></img></div>
		<div id="back"><b>Back <br>to <br> Choose <br> Subject</b></a></div>
        <div><a href="choosesub.php#img3"><img src="playbutton.png" height="150px" width="250px" id="playbutton"></img></a></div>
		</div>
		</div>
		
		
	  
    <?php
$conn=mysqli_connect("localhost","root","Taniyaa","kids");
if(isset($_POST["submit"]))
{
$fruit1=$_POST['fruit1'];
$fruit2=$_POST['fruit2'];
$fruit3=$_POST['fruit3'];
$fruit4=$_POST['fruit4'];
$fruit5=$_POST['fruit5'];
$fruit6=$_POST['fruit6'];
echo "<div id='ansfetch1'>";
echo "<div id='b1'></div>";
echo "<div id='l1'></div>";
echo "<div id='y1'>Your Answer : </div>";
echo "<div id='c1'>Correct Answer : </div>";
echo "<div id='answbox1'></div>";
echo "<div id='canswbox1'></div>";
echo "<pre id='ans1'>Apple,     Mango,</pre>";
echo "<pre id='ans2'>Banana,  Orange,</pre>";
echo "<pre id='ans3'>Grapes,   Cherry</pre>";
echo "<pre id='ansy1'>$fruit1, $fruit2,</pre>";
echo "<pre id='ansy2'>$fruit3, $fruit4,</pre>";
echo "<pre id='ansy3'>$fruit5, $fruit6</pre>";
echo "</div>";
}
if(isset($_POST["value"]))
{
$vege1=$_POST['vege1'];
$vege2=$_POST['vege2'];
$vege3=$_POST['vege3'];
$vege4=$_POST['vege4'];
$vege5=$_POST['vege5'];
$vege6=$_POST['vege6'];
echo "<div id='ansfetch2'>";
echo "<div id='b2'></div>";
echo "<div id='l2'></div>";
echo "<div id='y2'>Your Answer : </div>";
echo "<div id='c2'>Correct Answer : </div>";
echo "<div id='answbox2'></div>";
echo "<div id='canswbox2'></div>";
echo "<pre id='ans4'>Potato,   Tomato,</pre>";
echo "<pre id='ans5'>Onion,    Carrot,</pre>";
echo "<pre id='ans6'>Peas,      Lemon</pre>";
echo "<pre id='ansy4'>$vege1, $vege2,</pre>";
echo "<pre id='ansy5'>$vege3, $vege4,</pre>";
echo "<pre id='ansy6'>$vege5, $vege6</pre>";
echo "</div>";
}
if(isset($_POST["valueadded"]))
{
$trans1=$_POST['trans1'];
$trans2=$_POST['trans2'];
$trans3=$_POST['trans3'];
$trans4=$_POST['trans4'];
$trans5=$_POST['trans5'];
$trans6=$_POST['trans6'];
echo "<div id='ansfetch3'>";
echo "<div id='b3'></div>";
echo "<div id='l3'></div>";
echo "<div id='y3'>Your Answer : </div>";
echo "<div id='c3'>Correct Answer : </div>";
echo "<div id='answbox3'></div>";
echo "<div id='canswbox3'></div>";
echo "<pre id='ans7'>Bus,     Car,</pre>";
echo "<pre id='ans8'>Bike,    Train,</pre>";
echo "<pre id='ans9'>Cycle,   Ship</pre>";
echo "<pre id='ansy7'>$trans1, $trans2,</pre>";
echo "<pre id='ansy8'>$trans3, $trans4,</pre>";
echo "<pre id='ansy9'>$trans5, $trans6</pre>";
echo "</div>";
}
if(isset($_POST["valuesubmit"]))
{
$col1=$_POST['col1'];
$col2=$_POST['col2'];
$col3=$_POST['col3'];
$col4=$_POST['col4'];
$col5=$_POST['col5'];
$col6=$_POST['col6'];
echo "<div id='ansfetch4'>";
echo "<div id='b4'></div>";
echo "<div id='l4'></div>";
echo "<div id='y4'>Your Answer : </div>";
echo "<div id='c4'>Correct Answer : </div>";
echo "<div id='answbox4'></div>";
echo "<div id='canswbox4'></div>";
echo "<pre id='ans10'>Red,     Pink,</pre>";
echo "<pre id='ans11'>Blue,    Black,</pre>";
echo "<pre id='ans12'>White,  Green</pre>";
echo "<pre id='ansy10'>$col1, $col2,</pre>";
echo "<pre id='ansy11'>$col3, $col4,</pre>";
echo "<pre id='ansy12'>$col5, $col6</pre>";
echo "</div>";
}
?>              
</body>
</html>