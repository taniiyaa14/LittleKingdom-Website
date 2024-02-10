<html>
    <head>
        <title>LittleKingdom</title>
        <style>
            #bg{
                overflow-x:hidden;
            }
            #logo{
                position:relative;
            }
            #title{
                position:relative;
                font-weight:bold;
                font-size:40px;
				font-family:"wide latin";
            }
            #exam{
                position:relative;
                font-weight:bold;
                font-size:45px;
                top:20px;
				font-family:"Footlight MT Light";
            }
            #sub{
                position:relative;
                font-weight:bold;
                font-size:40px;
                top:30px;
				font-family:"Maiandra GD";
            }
            #b1{
                height:130px;
                width:250px;
                background-color:black;
                border:1px solid black;
                position:relative;
                left:930px;
                top:0px;
            }
            #l1{
                border:2px solid white;
                width:20%;
                background-color: white;
                position: relative;
                top:-68px;
                left:933px;
            } 
            #y1{
                position:relative;
                font-size:25px;
                color:white;
                top:-118px;
                left:939px;
                font-weight:bold;
            } 
            #c1{
                position:relative;
                font-size:25px;
                color:white;
                top:-82px;
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
                top:-183px;
            }
            #canswbox{
                height:40px;
                width:40px;
                background-color:white;
                border:1px solid white;
                position:relative;
                left:1130px;
                top:-158px;
            }
            #tans{
                position:relative;
                font-size:40px;
                font-weight:bold;
                left:1132px;
                top:-268px;
            }
            #pans{
                position:relative;
                font-weight:bold;
                font-size:40px;
                left:1132px;
                top:-248px;
            }
			#ansfetch{
				position:relative;
                top:200px;
			}
            #details{
                position:relative;
                top:-270px;
            }
            #name1{
                position:relative;
                font-size:26px;
                font-weight:bold;
				font-family:"Book Antiqua";
                top:40px;
                left:20px;
				height:70px;
                width:500px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #nameque{
                position:relative;
                font-family:"Book Antiqua";
                color:white;
                font-size:26px;
                position:relative;
                top:-13px;
                left:30px;
            }
            #age1{
                position:relative;
                font-size:26px;
                font-weight:bold;
				font-family:"Book Antiqua";
                top:40px;
                left:-236px;
				height:70px;
                width:500px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ageque{
                position:relative;
                font-family:"Book Antiqua";
                color:white;
                font-size:26px;
                position:relative;
                top:-25px;
                left:30px;
            }
            #email1{
                position:relative;
                font-size:26px;
                font-weight:bold;
				font-family:"Book Antiqua";
                top:30px;
                left:-236px;
				height:70px;
                width:500px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #emailque{
                position:relative;
                font-family:"Book Antiqua";
                color:white;
                font-size:26px;
                position:relative;
                top:-33px;
                left:30px;
            }
            #name{
                position:relative;
                height:50px;
                width:250px;
                font-size: 30px;
                left:250px;
                top:-83px;
            }
            #age{
                position:relative;
                height:50px;
                width:250px;
                font-size: 30px;
                left:250px;
                top:-96px;
            }
            #email{
                position:relative;
                height:50px;
                width:250px;
                font-size: 30px;
                left:250px;
                top:-73px;
            }
            #fill0{
                position:relative;
                font-weight:bold;
                font-size:34px;
                top:-200px;
				font-family:"goudy stout";
            }
            #quest1que{
                position:relative;
                font-size:30px;
				font-family:"Matura MT Script Capitals";
                top:-130px;
                left:100px;
            }
            #quest1{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-170px;
            }
            #que1tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-216px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #que1p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-70px;
            }
            #borderq11{
                position:relative;
                height:80px;
                width:80px;
                border:4px solid black;
                border-radius:60px;
                top:-150px;
                left:440px;
            }
            #capi{
                position: relative;
                left:80px;
                top:-315px;
            }
            #opt1{
                position: relative;
                left:437px;
                top:-522px;
            }
            #borderq12{
                position:relative;
                height:80px;
                width:80px;
                border:4px solid black;
                border-radius:60px;
                top:-618px;
                left:600px;
            }
            #opt2{
                position: relative;
                left:600px;
                top:-710px;
            }
            #borderq13{
                position:relative;
                height:80px;
                width:80px;
                border:4px solid black;
                border-radius:60px;
                top:-806px;
                left:760px;
            }
            #opt3{
                position: relative;
                left:758px;
                top:-900px;
            } 
            #que1p1m{
                position:relative;
                font-size:20px;
                font-weight:bold;
                top:-972px;
                left:1110px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans1{
                position:relative;
                left:950px;
                top:-1042px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #que1p2{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-720px;
                left:-8px;
            }
            #capg{
                position: relative;
                left:80px;
                top:-900px;
            }
            #borderq121{
                position:relative;
                height:80px;
                width:80px;
                border:4px solid black;
                border-radius:60px;
                top:-1090px;
                left:440px;
            }
            #opti1{
                position: relative;
                left:444px;
                top:-1178px;
            }
            #borderq122{
                position:relative;
                height:80px;
                width:80px;
                border:4px solid black;
                border-radius:60px;
                top:-1273px;
                left:600px;
            }
            #opti2{
                position: relative;
                left:605px;
                top:-1369px;
            }
            #borderq123{
                position:relative;
                height:80px;
                width:80px;
                border:4px solid black;
                border-radius:60px;
                top:-1461px;
                left:760px;
            }
            #opti3{
                position: relative;
                left:755px;
                top:-1560px;
            } 
            #que1p2m{
                position:relative;
                font-size:20px;
                font-weight:bold;
                top:-1642px;
                left:1110px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans2{
                position:relative;
                left:950px;
                top:-1710px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #fillbegin{
                position:relative;
                font-weight:bold;
                font-size:34px;
                top:-1495px;
				font-family:"goudy stout";
            }
            #quest2{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-1465px;
            }
            #quest2que{
                position:relative;
                font-size:30px;
				font-family:"Matura MT Script Capitals";
                top:-1425px;
                left:100px;
            }
            #que2tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-1510px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #que2p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-1370px;
            }
            #ear{
                position: relative;
                left:80px;
                top:-1500px;
            }
            #border21{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:440px;
            top:-1700px;
            }
            #op1{
                position: relative;
                left:449px;
                top:-1787px;
            }
            #border22{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:600px;
            top:-1874px;
            }
            #op2{
                position: relative;
                left:610px;
                top:-1960px;
            }
            #border23{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:760px;
            top:-2040px;
            }
            #op3{
                position: relative;
                left:767px;
                top:-2143px;
            } 
            #que2p1m{
                position:relative;
                font-size:20px;
                font-weight:bold;
                top:-2235px;
                left:1110px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans3{
                position:relative;
                left:950px;
                top:-2301px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #que2p2{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-1950px;
                left:-8px;
            }
            #v1{
                position: relative;
                top:-2150px;
                left:80px;
            }
            #border221{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:650px;
            top:-2460px;
            }
            #v2{
                position: relative;
                top:-2562px;
                left:650px;
            }
            #border222{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:650px;
            top:-2565px;
            }
            #v3{
                position: relative;
                top:-2668px;
                left:656px;
            }
            #border223{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:650px;
            top:-2665px;
            }
            #v4{
                position: relative;
                top:-2764px;
                left:655px;
            }
            #que2p2m{
                position:relative;
                font-size:20px;
                font-weight:bold;
                top:-2960px;
                left:1110px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans4{
                position:relative;
                left:950px;
                top:-3030px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #quest3{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-1460px;
            }
            #que3tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-1505px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #que3p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-1355px;
            }
            #sun{
                position: relative;
                left:80px;
                top:-1540px;
            }
            #border31{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:440px;
            top:-1730px;
            }
            #value1{
                position: relative;
                left:444px;
                top:-1824px;
            }
            #border32{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:600px;
            top:-1925px;
            }
            #value2{
                position: relative;
                left:603px;
                top:-2030px;
            }
            #border33{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:760px;
            top:-2138px;
            }
            #value3{
                position: relative;
                left:765px;
                top:-2235px;
            } 
            #que3p1m{
                position:relative;
                font-size:20px;
                font-weight:bold;
                top:-2317px;
                left:1110px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans5{
                position:relative;
                left:950px;
                top:-2383px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #que3p2{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-2130px;
                left:-8px;
            }
            #house{
                position: relative;
                left:80px;
                top:-2290px;
            }
            #border321{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:440px;
            top:-2490px;
            }
            #value4{
                position: relative;
                left:443px;
                top:-2585px;
            }
            #border322{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:600px;
            top:-2684px;
            }
            #value5{
                position: relative;
                left:603px;
                top:-2788px;
            }
            #border323{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:760px;
            top:-2888px;
            }
            #value6{
                position: relative;
                left:760px;
                top:-2990px;
            } 
            #que3p2m{
                position:relative;
                font-size:20px;
                font-weight:bold;
                top:-3070px;
                left:1110px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans6{
                position:relative;
                left:950px;
                top:-3140px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #box2{
                position:relative;
                top:-1300px;
            }
            #fill{
                position:relative;
                font-weight:bold;
                font-size:34px;
                top:-4220px;
				font-family:"goudy stout";
            }
            #questque{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-4150px;
                left:100px;
            }
            #quest4{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-4191px;
            }
            #que4tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-4232px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #que4p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-4130px;
            }
            #brush{
                position: relative;
                top:-4280px;
                left:35px;  
            }
            #ans7{
                position:relative;
                left:440px;
                top:-4450px;
                height:85px;
                width:99px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #ans8{
                position:relative;
                left:550px;
                top:-4535px;
                height:85px;
                width:99px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #border41{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:660px;
            top:-4620px;
            }
            #optio2{
                position: relative;
                left:658px;
                top:-4730px;
            }
            #border42{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:770px;
            top:-4834px;
            }
            #optio3{
                position: relative;
                left:765px;
                top:-4933px;
            }
            #border43{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:880px;
            top:-5031px;
            }
            #optio4{
                position: relative;
                left:882px;
                top:-5137px;
            }
            #que5p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-4730px;
            }
            #quest5{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-5020px;
            }
            #red{
                position: relative;
                top:-5010px;
                left:80px;
                top:-4970px;
            }
            #ans9{
                position:relative;
                left:440px;
                top:-5185px;
                height:85px;
                width:99px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #border51{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:550px;
            top:-5270px;
            }
            #option1{
                position: relative;
                left:550px;
                top:-5362px;
            }
            #border52{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:660px;
            top:-5454px;
            }
            #option2{
                position: relative;
                left:667px;
                top:-5538px;
            }
            #que5tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-5834px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #que6p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-5140px;
            }
            #quest6{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-5390px;
            }
            #jacket{
                position: relative;
                left:68px;
                top:-5350px;
            }
            #ans10{
                position:relative;
                left:440px;
                top:-5570px;
                height:85px;
                width:99px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #border61{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:550px;
            top:-5655px;
            }
            #val1{
                position: relative;
                left:549px;
                top:-5755px;
            }
            #border62{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:660px;
            top:-5852px;
            }
            #val2{
                position: relative;
                left:655px;
                top:-5953px;
            }
            #border63{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:770px;
            top:-6059px;
            }
            #val3{
                position: relative;
                left:780px;
                top:-6152px;
            }
            #border64{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:880px;
            top:-6246px;
            }
            #val4{
                position: relative;
                left:883px;
                top:-6334px;
            }
            #border65{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:990px;
            top:-6420px;
            }
            #val5{
                position: relative;
                left:995px;
                top:-6512px;
            }
            #que6tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-6795px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #que7p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-6140px;
            }
            #quest7{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-6330px;
            }
            #doll{
                position: relative;
                top:-6350px;
                left:20px;
            }
            #ans11{
                position:relative;
                left:440px;
                top:-6570px;
                height:85px;
                width:99px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #border71{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:550px;
            top:-6655px;
            }
            #doll1{
                position: relative;
                left:550px;
                top:-6754px;
            }
            #border72{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:660px;
            top:-6849px;
            }
            #doll2{
                position: relative;
                left:663px;
                top:-6947px;
            }
            #border73{
            position:relative;
            height:80px;
            width:95px;
            border:2px solid black;
            border-radius:10px;
            left:770px;
            top:-7043px;
            }
            #doll3{
                position: relative;
                left:770px;
                top:-7142px;
            }
            #que7tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-7435px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #fill1{
                position:relative;
                font-weight:bold;
                font-size:34px;
				font-family:"goudy stout";
                top:-6950px;
            }
            #questque1{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-6880px;
                left:100px;
            }
            #quest8{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-6920px;
            }
            #que8p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-4240px;
            }
            #boatdiv{
                position:relative;
                left:20px;
                top:5px;
            }
            #border81{
                position:relative; 
                height:250px;
                width:250px;
                border:2px solid black;
                border-radius:10px;
                left:70px;
                top:-4400px;
            }
            #exam1{
                position: relative;
                top:-4643px;
                left:93px;
            }
            #wboat{
                position:relative;
                font-family:Calibri;
	            top:-4656px;
	            left:160px;
	            font-size:45px;
            }
            #exam2{
                position: relative;
                top:-4957px;
                left:560px;
            }
            #border82{
                position:relative;
                height:110px;
                width:120px;
                border:2px solid black;
                border-radius:10px;
                left:650px;
                top:-5056px;
            }      
            #exam3{
                position: relative;
                top:-5165px;
                left:670px;
            }
            #wbook{
                position:relative;
                font-family:Calibri;
	            top:-5182px;
	            left:680px;
	            font-size:30px;
            }
            #coatdiv{
                position:relative;
                top:-190px;
            }
            #exam4{
                position: relative;
                top:-4957px;
                left:560px;
            }
            #border83{
                position:relative;
                height:110px;
                width:120px;
                border:2px solid black;
                border-radius:10px;
                left:650px;
                top:-5056px;
            }      
            #exam5{
                position: relative;
                top:-5165px;
                left:665px;
            }
            #wcoat{
                position:relative;
                font-family:Calibri;
	            top:-5178px;
	            left:680px;
	            font-size:30px;
            }
            #pigdiv{
                position:relative;
                top:-380px;
            }
            #exam6{
                position: relative;
                top:-4957px;
                left:560px;
            }
            #border84{
                position:relative;
                height:110px;
                width:120px;
                border:2px solid black;
                border-radius:10px;
                left:650px;
                top:-5056px;
            }      
            #exam7{
                position: relative;
                top:-5169px;
                left:665px;
            }
            #wpig{
                position:relative;
                font-family:Calibri;
	            top:-5182px;
	            left:675px;
	            font-size:30px;
            }
            #que8tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-6045px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans12{
                position:relative;
                left:950px;
                top:-5860px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #box3{
                position:relative;
                top:-2490px;
            }
            #quest9{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-8060px;
            }
            #que9p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-4240px;
            }
            #beddiv{
                position:relative;
                left:20px;
                top:5px;
            }
            #border91{
                position:relative; 
                height:250px;
                width:250px;
                border:2px solid black;
                border-radius:10px;
                left:70px;
                top:-4400px;
            }
            #bed1{
                position: relative;
                top:-4643px;
                left:93px;
            }
            #wbed{
                position:relative;
                font-family:Calibri;
	            top:-4656px;
	            left:160px;
	            font-size:45px;
            }
            #bed2{
                position: relative;
                top:-4957px;
                left:560px;
            }
            #border92{
                position:relative;
                height:110px;
                width:120px;
                border:2px solid black;
                border-radius:10px;
                left:650px;
                top:-5056px;
            }      
            #bed3{
                position: relative;
                top:-5170px;
                left:670px;
            }
            #wred{
                position:relative;
                font-family:Calibri;
	            top:-5186px;
	            left:687px;
	            font-size:30px;
            }
            #balldiv{
                position:relative;
                top:-190px;
            }
            #bed4{
                position: relative;
                top:-4957px;
                left:560px;
            }
            #border93{
                position:relative;
                height:110px;
                width:120px;
                border:2px solid black;
                border-radius:10px;
                left:650px;
                top:-5056px;
            }      
            #bed5{
                position: relative;
                top:-5169px;
                left:665px;
            }
            #wball{
                position:relative;
                font-family:Calibri;
	            top:-5180px;
	            left:688px;
	            font-size:30px;
            }
            #catdiv{
                position:relative;
                top:-380px;
            }
            #bed6{
                position: relative;
                top:-4957px;
                left:560px;
            }
            #border94{
                position:relative;
                height:110px;
                width:120px;
                border:2px solid black;
                border-radius:10px;
                left:650px;
                top:-5056px;
            }      
            #bed7{
                position: relative;
                top:-5169px;
                left:665px;
            }
            #wcat{
                position:relative;
                font-family:Calibri;
	            top:-5176px;
	            left:688px;
	            font-size:30px;
            }
            #que9tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-6052px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans13{
                position:relative;
                left:950px;
                top:-5860px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #box4{
                position:relative;
                top:-3620px;
            }
            #quest10{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-9200px;
            }
            #que10p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-4240px;
            }
            #cardiv{
                position:relative;
                left:20px;
                top:5px;
            }
            #border101{
                position:relative; 
                height:250px;
                width:250px;
                border:2px solid black;
                border-radius:10px;
                left:70px;
                top:-4400px;
            }
            #car1{
                position: relative;
                top:-4643px;
                left:93px;
            }
            #wcar{
                position:relative;
                font-family:Calibri;
	            top:-4656px;
	            left:160px;
	            font-size:45px;
            }
            #car2{
                position: relative;
                top:-4957px;
                left:560px;
            }
            #border102{
                position:relative;
                height:110px;
                width:120px;
                border:2px solid black;
                border-radius:10px;
                left:650px;
                top:-5056px;
            }      
            #car3{
                position: relative;
                top:-5163px;
                left:670px;
            }
            #wbun{
                position:relative;
                font-family:Calibri;
	            top:-5175px;
	            left:687px;
	            font-size:30px;
            }
            #pandiv{
                position:relative;
                top:-190px;
            }
            #car4{
                position: relative;
                top:-4957px;
                left:560px;
            }
            #border103{
                position:relative;
                height:110px;
                width:120px;
                border:2px solid black;
                border-radius:10px;
                left:650px;
                top:-5056px;
            }      
            #car5{
                position: relative;
                top:-5172px;
                left:665px;
            }
            #wpan{
                position:relative;
                font-family:Calibri;
	            top:-5183px;
	            left:688px;
	            font-size:30px;
            }
            #jamdiv{
                position:relative;
                top:-380px;
            }
            #car6{
                position: relative;
                top:-4957px;
                left:560px;
            }
            #border104{
                position:relative;
                height:110px;
                width:120px;
                border:2px solid black;
                border-radius:10px;
                left:650px;
                top:-5056px;
            }      
            #car7{
                position: relative;
                top:-5160px;
                left:675px;
            }
            #wjam{
                position:relative;
                font-family:Calibri;
	            top:-5167px;
	            left:685px;
	            font-size:30px;
            }
            #que10tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-6035px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans14{
                position:relative;
                left:950px;
                top:-5860px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #box5{
                position:relative;
                top:-4760px;
            }
            #fill2{
                position:relative;
                font-weight:bold;
                font-size:34px;
				font-family:"goudy stout";
                top:-5560px;
            }
            #questque2{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-5490px;
                left:100px;
            }
            #quest11{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-5530px;
            }
            #que11p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-1620px;
            }
            #water1{
                position: relative;
                top:-1780px;
                left:80px;
            }
            #water2{
                position: relative;
                top:-2140px;
                left:540px;
            }
            #border111{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:630px;
                top:-2220px;
            }		
            #water3{
                position: relative;
                top:-2295px;
                left:635px;
            }
            #border112{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:630px;
                top:-2350px;
            }		
            #water4{
                position: relative;
                top:-2265px;
                left:540px;
            }
            #water5{
                position: relative;
                top:-2423px;
                left:638px;
            }
            #border113{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:630px;
                top:-2480px;
            }
            #water6{
                position: relative;
                top:-2393px;
                left:540px;
            }
            #water7{
                position: relative;
                top:-2554px;
                left:647px;
            }
            #que11tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-2984px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans15{
                position:relative;
                left:950px;
                top:-2820px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #box6{
                position:relative;
                top:-3740px;
            }
            #quest12{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-6300px;
            }
            #que12p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-1620px;
            }
            #time1{
                position: relative;
                top:-1780px;
                left:80px;
            }
            #time2{
                position: relative;
                top:-2140px;
                left:540px;
            }
            #border121{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:630px;
                top:-2220px;
            }		
            #time3{
                position: relative;
                top:-2291px;
                left:645px;
            }
            #border122{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:630px;
                top:-2350px;
            }		
            #time4{
                position: relative;
                top:-2265px;
                left:540px;
            }
            #time5{
                position: relative;
                top:-2423px;
                left:643px;
            }
            #border123{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:630px;
                top:-2480px;
            }
            #time6{
                position: relative;
                top:-2393px;
                left:540px;
            }
            #time7{
                position: relative;
                top:-2556px;
                left:647px;
            }
            #que12tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-2984px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans16{
                position:relative;
                left:950px;
                top:-2820px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #box7{
                position:relative;
                top:-4488px;
            }
            #quest13{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-7030px;
            }
            #que13p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-1500px;
            }
            #play1{
                position: relative;
                top:-1750px;
                left:80px;
            }
            #play2{
                position: relative;
                top:-2140px;
                left:540px;
            }
            #border131{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:630px;
                top:-2220px;
            }		
            #play3{
                position: relative;
                top:-2291px;
                left:655px;
            }
            #border132{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:630px;
                top:-2356px;
            }		
            #play4{
                position: relative;
                top:-2271px;
                left:540px;
            }
            #play5{
                position: relative;
                top:-2425px;
                left:647px;
            }
            #border133{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:630px;
                top:-2480px;
            }
            #play6{
                position: relative;
                top:-2393px;
                left:540px;
            }
            #play7{
                position: relative;
                top:-2558px;
                left:643px;
            }
            #que13tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-2984px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans17{
                position:relative;
                left:950px;
                top:-2820px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #box8{
                position:relative;
                top:-5335px;
            }
            #quest14{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-7890px;
            }
            #que14p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-1580px;
            }
            #color1{
                position: relative;
                top:-1805px;
                left:80px;
            }
            #color2{
                position: relative;
                top:-2140px;
                left:540px;
            }
            #border141{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:630px;
                top:-2220px;
            }		
            #color3{
                position: relative;
                top:-2291px;
                left:648px;
            }
            #border142{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:630px;
                top:-2340px;
            }		
            #color4{
                position: relative;
                top:-2255px;
                left:540px;
            }
            #color5{
                position: relative;
                top:-2421px;
                left:628px;
            }
            #border143{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:630px;
                top:-2480px;
            }
            #color6{
                position: relative;
                top:-2393px;
                left:540px;
            }
            #color7{
                position: relative;
                top:-2552px;
                left:640px;
            }
            #que14tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-2984px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans18{
                position:relative;
                left:950px;
                top:-2820px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #box9{
                position:relative;
                top:-6140px;
            }
            #fill3{
                position:relative;
                font-weight:bold;
                font-size:34px;
				font-family:"goudy stout";
                top:-8680px;
            }
            #questque3{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-8610px;
                left:103px;
            }
            #quest15{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-8650px;
            }
            #wet1{
                position: relative;
                top:-3757px;
                left:75px;
            }
            #border151{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:160px;
                top:-3840px;
            }		
			#wet2{
                position: relative;
                top:-3915px;
                left:175px;
            }
			#wet3{
                position: relative;
                top:-4250px;
                left:300px;
            } 
            #wet4{
                position: relative;
                top:-4500px;
                left:639px;
            }
            #border152{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:720px;
                top:-4584px;
            }		
			#wet5{
                position: relative;
                top:-4661px;
                left:733px;
            }
            #que15tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-4980px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans19{
                position:relative;
                left:950px;
                top:-4795px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #que15p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-4885px;
            }
            #box10{
                position:relative;
                top:-4700px;
            }
            #quest16{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-9320px;
            }
            #longdiv{
                position:relative;
                top:-250px;
            }
            #long11{
                position: relative;
                top:-3757px;
                left:75px;
            }
            #border161{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:160px;
                top:-3840px;
            }		
			#long22{
                position: relative;
                top:-3913px;
                left:177px;
            }
			#long3{
                position: relative;
                top:-4340px;
                left:240px;
            } 
            #long4{
                position: relative;
                top:-4620px;
                left:639px;
            }
            #border162{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:720px;
                top:-4704px;
            }		
			#long5{
                position: relative;
                top:-4784px;
                left:735px;
            }
            #que16tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-5035px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans20{
                position:relative;
                left:950px;
                top:-4920px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #que16p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-5005px;
            }
            #box11{
                position:relative;
                top:-5190px;
            }
            #fill4{
                position:relative;
                font-weight:bold;
                font-size:34px;
				font-family:"goudy stout";
                top:-9900px;
            }
            #questque4{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-9830px;
                left:110px;
            }
            #quest17{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-9870px;
            }
            #que17tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-9915px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #que17p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-5110px;
            }
            #socks{
                position: relative;
                top:-5300px;
                left:40px;  
            }
            #sdiv{
                position:relative;
                top:20px;
            }
            #socks1{
                position:relative;
                left:440px;
                top:-5570px;
            }
            #socks2{
                position:relative;
                left:530px;
                top:-5693px;
            }
            #socks3{
                position: relative;
                left:610px;
                top:-5822px;
            }
            #socks4{
                position: relative;
                left:700px;
                top:-5961px;
            }
            #socks5{
                position: relative;
                left:770px;
                top:-6089px;
            }
            #que17p1m{
                position:relative;
                font-size:20px;
                font-weight:bold;
                top:-6180px;
                left:1100px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans21{
                position:relative;
                left:950px;
                top:-6250px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #box12{
                position:relative;
                top:-4650px;
            }
            #que17p2{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-5380px;
                left:-8px;
            }
            #gift{
                position: relative;
                top:-5640px;
                left:60px;  
            }
            #gift1{
                position:relative;
                left:450px;
                top:-5860px;
            }
            #gift2{
                position:relative;
                left:530px;
                top:-5989px;
            }
            #gift3{
                position: relative;
                left:610px;
                top:-6119px;
            }
            #gift4{
                position: relative;
                left:695px;
                top:-6246px;
            }
            #que17p2m{
                position:relative;
                font-size:20px;
                font-weight:bold;
                top:-6333px;
                left:1100px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #ans22{
                position:relative;
                left:950px;
                top:-6403px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #box13{
                position:relative;
                top:-5150px;
            }
            #quest18{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-11362px;
            }
            #quest18que{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-11400px;
                left:100px;
            }
            #que18tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-11447px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #tiediv{
                position:relative;
                top:-4020px;
            }
            #que18p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-7240px;
            }
            #tie{
                position: relative;
                left:60px;
                top:-7430px;
            }
            #border181{
                position:relative;
                height:80px;
                width:95px;
                border:2px solid black;
                border-radius:10px;
                left:440px;
                top:-7630px;
            }
            #tie1{
                position:relative;
                left:444px;
                top:-7724px;
            }
            #ans23{
                position:relative;
                left:550px;
                top:-7825px;
                height:85px;
                width:99px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #border182{
                position:relative;
                height:80px;
                width:95px;
                border:2px solid black;
                border-radius:10px;
                left:660px;
                top:-7910px;
            }
            #tie2{
                position: relative;
                left:671px;
                top:-7996px;
            }
            #que18p1m{
                position:relative;
                left:1110px;
                font-size:20px;
                font-weight:bold;
                top:-8065px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #que18p2{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-7240px;
                left:-8px;
            }
            #food{
                position: relative;
                left:40px;
                top:-7425px;
            }
            #border1821{
                position:relative;
                height:80px;
                width:95px;
                border:2px solid black;
                border-radius:10px;
                left:450px;
                top:-7610px;
            }
            #food1{
                position:relative;
                left:450px;
                top:-7718px;
            }
            #ans24{
                position:relative;
                left:560px;
                top:-7830px;
                height:85px;
                width:99px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #ans25{
                position:relative;
                left:670px;
                top:-7915px;
                height:85px;
                width:99px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #border1822{
                position:relative;
                height:80px;
                width:95px;
                border:2px solid black;
                border-radius:10px;
                left:780px;
                top:-8000px;
            }
            #food2{
                position: relative;
                left:790px;
                top:-8083px;
            }
            #que18p2m{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-8150px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #box14{
                position:relative;
                top:-4450px;
            }
            #quest19{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-12380px;
            }
            #quest19que{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-12420px;
                left:110px;
            }
            #que19tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-12465px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #slque{
                position:relative;
                top:-4600px;
            }
            #short{
                position: relative;
                top:-7850px;
                left:350px;
                font-size:20px;
				font-family:"Harrington";
				
            }
            #long{
                position: relative;
                top:-7925px;
                left:650px;
                font-size:20px;
				font-family:"Harrington";
            }
            #que19p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-7800px;
            }
            #ring{
                position: relative;
                top:-7970px;
                left:30px;
            }
            #ringop1{
                position: relative;
                top:-8155px;
                left:330px;
            }
            #border191{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:410px;
                top:-8235px;
            }
            #short1{
                position: relative;
                top:-8327px;
                left:425px;
            }
            #border192{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:710px;
                top:-8513px;
            }
            #ringop2{
                position: relative;
                top:-8430px;
                left:630px;
            }
            #long1{
                position: relative;
                top:-8605px;
                left:725px;
            }
            #ans26{
                position:relative;
                left:950px;
                top:-8717px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #que19p1m{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-8792px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #que19p2{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-7780px;
                left:-8px;
            }
            #globe{
                position: relative;
                top:-7970px;
                left:30px;
            }
            #globeop1{
                position: relative;
                top:-8265px;
                left:330px;
            }
            #border1921{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:410px;
                top:-8345px;
            }
            #short2{
                position: relative;
                top:-8439px;
                left:425px;
            }
            #border1922{
                position:relative;
                height:70px;
                width:150px;
                border:2px solid black;
                border-radius:10px;
                left:710px;
                top:-8623px;
            }
            #globeop2{
                position: relative;
                top:-8540px;
                left:630px;
            }
            #long2{
                position: relative;
                top:-8717px;
                left:725px;
            }
            #ans27{
                position:relative;
                left:950px;
                top:-8825px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #que19p2m{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-8902px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #box15{
                position:relative;
                top:-730px;
            }
            #quest20{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-9340px;
            }
            #quest20que{
                position:relative;
                font-size:30px;
                font-family:"Matura MT Script Capitals";
                top:-9380px;
                left:110px;
            }
            #que20tm{
                position:relative;
                left:1100px;
                font-size:20px;
                font-weight:bold;
                top:-9425px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #que20p1{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-9320px;
            }
            #pine1{
                position:relative;
                left:70px;
                top:-3080px;
            }
            #box16{
                position:relative;
                top:-6370px;
            }
            #ans28{
                position:relative;
                left:950px;
                top:-9620px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #que20p1m{
                position:relative;
                left:1120px;
                font-size:20px;
                font-weight:bold;
                top:-9156px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #que20p2{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-9480px;
                left:-8px;
            }
            #aero1{
                position:relative;
                left:70px;
                top:-2520px;
            }
            #box17{
                position:relative;
                top:-7100px;
            }
            #ans29{
                position:relative;
                left:950px;
                top:-9795px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #que20p2m{
                position:relative;
                left:1120px;
                font-size:20px;
                font-weight:bold;
                top:-9873px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #que20p3{
                position:relative;
                font-size:30px;
                font-weight:bold;
                top:-9660px;
                left:-2px;
            }
            #queen1{
                position:relative;
                left:70px;
                top:-1945px;
            }
            #box18{
                position:relative;
                top:-7850px;
            }
            #ans30{
                position:relative;
                left:950px;
                top:-9950px;
                height:100px;
                width:120px;
                font-size: 70px;
                padding:25px;
				border:2px solid black;
                border-radius:10px;
            }
            #que20p3m{
                position:relative;
                left:1120px;
                font-size:20px;
                font-weight:bold;
                top:-10560px;
				height:45px;
				border:2px solid black;
                border-radius:10px;
		        background-color:black;
		        color:white;
            }
            #end{
                position:relative;
                font-size:40px;
                top:-9900px;
				font-family:"cooper black"
            }
            #submitexam{
                position:relative;
                padding:6px;
                top:-9900px;
                width:200px;
				height:60px;
				color:white;
				background-color:black;
				font-family:"berlin sans fb";
				font-size:40px;
				border-radius:10px;
            }
			
        </style>
    </head>
    <body id="bg">
        <div id="logo"><center><img src="logo.png" height="150px" width="150px"></img></center></div> 
        <div id="title"><center>LITTLE KINGDOM</center></div>
        <div id="exam"><center>FINAL EXAM</center></div>
        <div id="sub"><center><u>SUBJECT : ENGLISH</u></center></div>
        <div id='ansfetch'>
            <div id='b1'></div>
            <div id='l1'></div>
            <div id='y1'>Total Marks : </div>
            <div id='c1'>Passing Marks : </div>
            <div id='answbox'></div>
            <div id='canswbox'></div>
            <div id='tans'>50</div>
            <div id='pans'>25</div>
        </div>        
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div id="details">    
        <button id="name1"></button><div id="nameque">Enter Your Name: </div>
            <input type="text" name="name" required id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>">
            <button id="age1"></button><div id="ageque">Enter Your Age: </div>
            <input type="text" name="age" required id="age" value="<?php if(isset($_POST['age'])) echo $_POST['age'] ?>">
            <button id="email1"></button><div id="emailque">Enter Your Email: </div>
            <input type="text" name="email" required id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
        </div>
            <div id="fill0"><u><center>UPPERCASE & LOWERCASE</center></u></div>
            <div id="quest1que">Connect uppercase with lowercase and write your answer in the box given : </div>
            <div id="quest1">Que 1: </div>
            <div><button id="que1tm">2Marks</button></div>
            <div><img src="que1.png" height="70px" width="70px" id="que1p1"></img></div>
           <div id="borderq11"></div>
            <div><img src="alphaz.png" height="280px" width="270px" id="capi"></img></div>
            <div><img src="small-k.png" height="100px" width="90px" id="opt1"></img></div>
            <div id="borderq12"></div>
            <div><img src="small-z.png" height="100px" width="90px" id="opt2"></img></div>
            <div id="borderq13"></div>
            <div><img src="small-l.png" height="95px" width="90px" id="opt3"></img></div>
            <div><button id="que1p1m">1Mark</button></div>
            <div><input type="text" name="ans1" required id="ans1" value="<?php if(isset($_POST['ans1'])) echo $_POST['ans1'] ?>"></div>   
            <div><img src="que2.png" height="73px" width="87px" id="que1p2"></img></div>
            <div><img src="alphag.png" height="280px" width="270px" id="capg"></img></div>
            <div id="borderq121"></div>
            <div><img src="small-g.png" height="95px" width="85px" id="opti1"></img></div>
            <div id="borderq122"></div>
            <div><img src="small-s.png" height="100px" width="90px" id="opti2"></img></div>
            <div id="borderq123"></div>
            <div><img src="small-o.png" height="105px" width="95px" id="opti3"></img></div>
            <div><button id="que1p2m">1Mark</button></div>
            <div><input type="text" name="ans2" id="ans2" required value="<?php if(isset($_POST['ans2'])) echo $_POST['ans2'] ?>"></div> 
            <div id="fillbegin"><center><u>BEGINNING SOUNDS</u></center></div>
            <div id="quest2que">Choose the correct beginning sound and write your answer in the box given : </div>
            <div id="quest2">Que 2: </div>
            <div><button id="que2tm">2Marks</button></div>
            <div><img src="que1.png" height="70px" width="70px" id="que2p1"></img></div>
            <div><img src="gkday5ear.png" height="280px" width="340px" id="ear"></img></div>
            <div id="border21"></div>
            <div><img src="capse.png" height="90px" width="80px" id="op1"></img></div>
            <div id="border22"></div>
            <div><img src="capsn.png" height="82px" width="80px" id="op2"></img></div>
            <div id="border23"></div>
            <div><img src="capsh.png" height="120px" width="90px" id="op3"></img></div>
            <div><button id="que2p1m">1Mark</button></div>
            <div><input type="text" name="ans3" required id="ans3" value="<?php if(isset($_POST['ans3'])) echo $_POST['ans3'] ?>"></div>
            <div><img src="que2.png" height="73px" width="87px" id="que2p2"></img></div>
            <div><img src="engflower.png" height=340 width="300px" id="v1"></img></div>
            <div id="border221"></div>
            <div><img src="capsc.png" height="125px" width="90px" id="v2"></img></div>
            <div id="border222"></div>
            <div><img src="capsl.png" height="120px" width="90px" id="v3"></img></div>
            <div id="border223"></div>
            <div><img src="capsf.png" height="117px" width="90px" id="v4"></img></div>
            <div><button id="que2p2m">1Mark</button></div>
            <div><input type="text" name="ans4" required id="ans4" value="<?php if(isset($_POST['ans4'])) echo $_POST['ans4'] ?>"></div> 
            <div id="box2">
            <div id="quest3">Que 3: Choose the correct beginning sound and write your answer in the box given : </div>
            <div><button id="que3tm">2Marks</button></div>
            <div><img src="que1.png" height="70px" width="70px" id="que3p1"></img></div>
            <div><img src="sunque.png" height="300px" width="290px" id="sun"></img></div>
            <div id="border31"></div>
            <div><img src="capsb.png" height="110px" width="90px" id="value1"></img></div>
            <div id="border32"></div>
            <div><img src="capsm.png" height="130px" width="83px" id="value2"></img></div>
            <div id="border33"></div>
            <div><img src="capss.png" height="106px" width="80px" id="value3"></img></div>
            <div><button id="que3p1m">1Mark</button></div>
            <div><input type="text" name="ans5" required id="ans5" value="<?php if(isset($_POST['ans5'])) echo $_POST['ans5'] ?>"></div>   
            <div><img src="que2.png" height="73px" width="87px" id="que3p2"></img></div>
            <div><img src="housepic.png" height="320px" width="350px" id="house"></img></div>
            <div id="border321"></div>
            <div><img src="capsx.png" height="110px" width="90px" id="value4"></img></div>
            <div id="border322"></div>
            <div><img src="capsh.png" height="120px" width="98px" id="value5"></img></div>
            <div id="border323"></div>
            <div><img src="capsa.png" height="115px" width="100px" id="value6"></img></div>
            <div><button id="que3p2m">1Mark</button></div>
            <div><input type="text" name="ans6" required id="ans6" value="<?php if(isset($_POST['ans6'])) echo $_POST['ans6'] ?>"></div>   
            </div>
            <div id="fill"><center><u>FILL UPS</u></center></div>
            <div id="questque">Fill in the blank to complete the spelling of the picture given : </div>
            <div id="quest4">Que 4: </div>
            <div><button id="que4tm">2Marks</button></div>
            <div><img src="que1.png" height="70px" width="70px" id="que4p1"></img></div>
            <div><img src="eday13brush.png" height="280px" width="380px" id="brush"></img></div>
            <div><input type="text" name="ans7" required id="ans7" value="<?php if(isset($_POST['ans7'])) echo $_POST['ans7'] ?>"></div>
            <div><input type="text" name="ans8" required id="ans8" value="<?php if(isset($_POST['ans8'])) echo $_POST['ans8'] ?>"></div>
            <div id="border41"></div>
            <div><img src="capsu.png" height="130px" width="100px" id="optio2"></img></div>
            <div id="border42"></div>
            <div><img src="capss.png" height="113px" width="100px" id="optio3"></img></div>
            <div id="border43"></div>
            <div><img src="capsh.png" height="126px" width="102px" id="optio4"></img></div>
            <div><img src="que1.png" height="70px" width="70px" id="que5p1"></img></div>
            <div id="quest5">Que 5: Fill in the blank to complete the spelling of the picture given : </div>
            <div><img src="red.jfif" height="330px" width="330px" id="red"></img></div>
            <div><input type="text" name="ans9" required id="ans9" value="<?php if(isset($_POST['ans9'])) echo $_POST['ans9'] ?>"></div>
            <div id="border51"></div>
            <div><img src="capse.png" height="100px" width="95px" id="option1"></img></div>
            <div id="border52"></div>
            <div><img src="capsd.png" height="85px" width="90px" id="option2"></img></div>
            <div><button id="que5tm">2Marks</button></div>
            <div><img src="que1.png" height="70px" width="70px" id="que6p1"></img></div>
            <div id="quest6">Que 6: Fill in the blank to complete the spelling of the picture given : </div>
            <div><img src="coatnew.png" height="320px" width="350px" id="jacket"></img></div>
            <div><input type="text" name="ans10" required id="ans10" value="<?php if(isset($_POST['ans10'])) echo $_POST['ans10'] ?>"></div>
            <div id="border61"></div>
            <div><img src="capsa.png" height="112px" width="100px" id="val1"></img></div>
            <div id="border62"></div>
            <div><img src="capsc.png" height="123px" width="100px" id="val2"></img></div>
            <div id="border63"></div>
            <div><img src="capsk.png" height="103px" width="88px" id="val3"></img></div>
            <div id="border64"></div>
            <div><img src="capse.png" height="90px" width="90px" id="val4"></img></div>
            <div id="border65"></div>
            <div><img src="capst.png" height="105px" width="90px" id="val5"></img></div>
            <div><button id="que6tm">2Marks</button></div>
            <div id="quest7">Que 7: Fill in the blank to complete the spelling of the picture given : </div>
            <div><img src="que1.png" height="70px" width="70px" id="que7p1"></img></div>
            <div><img src="engdoll.png" height="320px" width="360px" id="doll"></img></div>
            <div><input type="text" name="ans11" required id="ans11" value="<?php if(isset($_POST['ans11'])) echo $_POST['ans11'] ?>"></div>
            <div id="border71"></div>
            <div><img src="capso.png" height="110px" width="100px" id="doll1"></img></div>
            <div id="border72"></div>
            <div><img src="capsl.png" height="110px" width="100px" id="doll2"></img></div>
            <div id="border73"></div>
            <div><img src="capsl.png" height="110px" width="100px" id="doll3"></img></div>
            <div><button id="que7tm">2Marks</button></div>
            <div id="fill1"><center><u>RHYMING WORDS</u></center></div>
            <div id="questque1">Connect the rhyming words and write your answer in the box given : </div>
            <div id="quest8">Que 8: </div>
            <div id="box3">
            <div><img src="que1.png" height="70px" width="70px" id="que8p1"></img></div>
            <div id="boatdiv">
            <div id="border81"></div>
            <div><img src="Boat.png" height="200px" width="210px" id="exam1"></img></div>
            <div id="wboat">Boat</div>
            </div>
            <div><img src="optiona.jpg" height="90px" width="80px" id="exam2"></img></div>
            <div id="border82"></div>
            <div><img src="booknew.png" height="90px" width="80px" id="exam3"></img></div>
            <div id="wbook">Book</div>
            <div id="coatdiv">
            <div><img src="optionb.jpg" height="90px" width="80px" id="exam4"></img></div>
            <div id="border83"></div>
            <div><img src="coatnew.png" height="90px" width="90px" id="exam5"></img></div>
            <div id="wcoat">Coat</div>
            </div>
            <div id="pigdiv">
            <div><img src="optionc.jpg" height="90px" width="80px" id="exam6"></img></div>
            <div id="border84"></div>
            <div><img src="gkday1pig.png" height="90px" width="90px" id="exam7"></img></div>
            <div id="wpig">Pig</div>
            </div>
            <div><button id="que8tm">2Marks</button></div>
            <div><input type="text" name="ans12" required id="ans12" value="<?php if(isset($_POST['ans12'])) echo $_POST['ans12'] ?>"></div>
            </div>
            <div id="quest9">Que 9: Connect the rhyming words and write your answer in the box given : </div>
            <div id="box4">
            <div><img src="que1.png" height="70px" width="70px" id="que9p1"></img></div>
            <div id="beddiv">
            <div id="border91"></div>
            <div><img src="bednew.png" height="200px" width="210px" id="bed1"></img></div>
            <div id="wbed">Bed</div>
             </div>
            <div><img src="optiona.jpg" height="90px" width="80px" id="bed2"></img></div>
            <div id="border92"></div>
            <div><img src="rednew.png" height="95px" width="90px" id="bed3"></img></div>
            <div id="wred">Red</div>
            <div id="balldiv">
            <div><img src="optionb.jpg" height="90px" width="80px" id="bed4"></img></div>
            <div id="border93"></div>
            <div><img src="ballque.png" height="90px" width="90px" id="bed5"></img></div>
            <div id="wball">Ball</div>
            </div>
            <div id="catdiv">
            <div><img src="optionc.jpg" height="90px" width="80px" id="bed6"></img></div>
            <div id="border94"></div>
            <div><img src="cat1.png" height="85px" width="87px" id="bed7"></img></div>
            <div id="wcat">Cat</div>
            </div>
            <div><button id="que9tm">2Marks</button></div>
            <div><input type="text" name="ans13" required id="ans13" value="<?php if(isset($_POST['ans13'])) echo $_POST['ans13'] ?>"></div>
            </div>
            <div id="quest10">Que 10: Connect the rhyming words and write your answer in the box given : </div>
            <div id="box5">
            <div><img src="que1.png" height="70px" width="70px" id="que10p1"></img></div>
            <div id="cardiv">
            <div id="border101"></div>
            <div><img src="gkday1car.png" height="200px" width="210px" id="car1"></img></div>
            <div id="wcar">Car</div>
            <div><img src="optiona.jpg" height="90px" width="80px" id="car2"></img></div>
            <div id="border102"></div>
            <div><img src="bunnew.png" height="85px" width="80px" id="car3"></img></div>
            <div id="wbun">Bun</div>
            <div id="pandiv">
            <div><img src="optionb.jpg" height="90px" width="80px" id="car4"></img></div>
            <div id="border103"></div>
            <div><img src="pannew.png" height="90px" width="80px" id="car5"></img></div>
            <div id="wpan">Pan</div>
            </div>
            <div id="jamdiv">
            <div><img src="optionc.jpg" height="90px" width="80px" id="car6"></img></div>
            <div id="border104"></div>
            <div><img src="jamupdate.png" height="75px" width="64px" id="car7"></img></div>
            <div id="wjam">Jar</div>
            </div>
            <div><button id="que10tm">2Marks</button></div>
            <div><input type="text" name="ans14" required id="ans14" value="<?php if(isset($_POST['ans14'])) echo $_POST['ans14'] ?>"></div>
            </div>
            <div id="fill2"><center><u>SIGHT WORDS</u></center></div>
            <div id="questque2">Answer the sight words and write your answer in the box given : </div>
            <div id="quest11">Que 11: </div>
            <div id="box6">
            <div><img src="que1.png" height="70px" width="70px" id="que11p1"></img></div>
            <div><img src="newtap.png" height="340px" width="310px" id="water1"></img></div>
            <div><img src="optiona.jpg" height="90px" width="80px" id="water2"></img></div>
            <div id="border111"></div>
            <div><img src="blueoption.png" height="84px" width="150px" id="water3"></img></div>
            <div><img src="optionb.jpg" height="90px" width="80px" id="water4"></img></div>
            <div id="border112"></div>
            <div><img src="wateroption.png" height="85px" width="140px" id="water5"></img></div>
            <div><img src="optionc.jpg" height="90px" width="80px" id="water6"></img></div>
            <div id="border113"></div>
            <div><img src="outoption.png" height="80px" width="115px" id="water7"></img></div>
            <div><button id="que11tm">3Marks</button></div>
            <div><input type="text" name="ans15" required id="ans15" value="<?php if(isset($_POST['ans15'])) echo $_POST['ans15'] ?>"></div>
            </div>
            <div id="quest12">Que 12: Answer the sight words and write your answer in the box given : </div>
            <div id="box7">
            <div><img src="que1.png" height="70px" width="70px" id="que12p1"></img></div>
            <div><img src="timenew.png" height="330px" width="290px" id="time1"></img></div>
            <div><img src="optiona.jpg" height="90px" width="80px" id="time2"></img></div>
            <div id="border121"></div>
            <div><img src="timeoption.png" height="75px" width="120px" id="time3"></img></div>
            <div><img src="optionb.jpg" height="90px" width="80px" id="time4"></img></div>
            <div id="border122"></div>
            <div><img src="twooption.png" height="80px" width="125px" id="time5"></img></div>
            <div><img src="optionc.jpg" height="90px" width="80px" id="time6"></img></div>
            <div id="border123"></div>
            <div><img src="useoption.png" height="80px" width="120px" id="time7"></img></div>
            <div><button id="que12tm">3Marks</button></div>
            <div><input type="text" name="ans16" required id="ans16" value="<?php if(isset($_POST['ans16'])) echo $_POST['ans16'] ?>"></div>
            </div>
            <div id="quest13">Que 13: Answer the sight words and write your answer in the box given : </div>
            <div id="box8">
            <div><img src="que1.png" height="70px" width="70px" id="que13p1"></img></div>
            <div><img src="playimg.png" height="450px" width="300px" id="play1"></img></div>
            <div><img src="optiona.jpg" height="90px" width="80px" id="play2"></img></div>
            <div id="border131"></div>
            <div><img src="upoption.png" height="80px" width="100px" id="play3"></img></div>
            <div><img src="optionb.jpg" height="90px" width="80px" id="play4"></img></div>
            <div id="border132"></div>
            <div><img src="blackoption.png" height="68px" width="120px" id="play5"></img></div>
            <div><img src="optionc.jpg" height="90px" width="80px" id="play6"></img></div>
            <div id="border133"></div>
            <div><img src="playoption.png" height="85px" width="130px" id="play7"></img></div>
            <div><button id="que13tm">3Marks</button></div>
            <div><input type="text" name="ans17" required id="ans17" value="<?php if(isset($_POST['ans17'])) echo $_POST['ans17'] ?>"></div>
            </div>
            <div id="quest14">Que 14: Answer the sight words and write your answer in the box given : </div>
            <div id="box9">
            <div><img src="que1.png" height="70px" width="70px" id="que14p1"></img></div>
            <div><img src="gkday1sun.png" height="390px" width="320px" id="color1"></img></div>
            <div><img src="optiona.jpg" height="90px" width="80px" id="color2"></img></div>
            <div id="border141"></div>
            <div><img src="calloption.png" height="70px" width="115px" id="color3"></img></div>
            <div><img src="optionb.jpg" height="90px" width="80px" id="color4"></img></div>
            <div id="border142"></div>
            <div><img src="yellowoption.png" height="90px" width="158px" id="color5"></img></div>
            <div><img src="optionc.jpg" height="90px" width="80px" id="color6"></img></div>
            <div id="border143"></div>
            <div><img src="brownoption.png" height="75px" width="140px" id="color7"></img></div>
            <div><button id="que14tm">3Marks</button></div>
            <div><input type="text" name="ans18" required id="ans18" value="<?php if(isset($_POST['ans18'])) echo $_POST['ans18'] ?>"></div>
            </div>
            <div id="fill3"><center><u>OPPOSITE WORDS</u></center></div>
            <div id="questque3">Choose the correct word and write your answer in the box given : </div>
            <div id="quest15">Que 15:</div>
            <div id="box10">
            <div><img src="optiona.jpg" height="90px" width="80px" id="wet1"></img></div>
            <div id="border151"></div>
            <div><img src="dryoption.png" height="80px" width="120px" id="wet2"></img></div>
            <div><img src="wetnew.png" height="500px" width="350px" id="wet3"></img></div>
            <div><img src="optionb.jpg" height="90px" width="80px" id="wet4"></img></div>
            <div id="border152"></div>
            <div><img src="wetoption.png" height="80px" width="130px" id="wet5"></img></div>
            <div><button id="que15tm">3Marks</button></div>
            <div><input type="text" name="ans19" required id="ans19" value="<?php if(isset($_POST['ans19'])) echo $_POST['ans19'] ?>"></div>
            <div><img src="que1.png" height="70px" width="70px" id="que15p1"></img></div>    
            </div>
            <div id="quest16">Que 16: Choose the correct word and write your answer in the box given : </div>
            <div id="box11">
            <div id="longdiv">
            <div><img src="optiona.jpg" height="90px" width="80px" id="long11"></img></div>
            <div id="border161"></div>
            <div><img src="longoption.png" height="70px" width="120px" id="long22"></img></div>
            </div>
            <div><img src="longnew.png" height="380px" width="380px" id="long3"></img></div>
            <div><img src="optionb.jpg" height="90px" width="80px" id="long4"></img></div>
            <div id="border162"></div>
            <div><img src="shortoption.png" height="82px" width="127px" id="long5"></img></div>
            <div ><button id="que16tm">3Marks</button></div>
            <div><input type="text" name="ans20" required id="ans20" value="<?php if(isset($_POST['ans20'])) echo $_POST['ans20'] ?>"></div>
            <div><img src="que1.png" height="70px" width="70px" id="que16p1"></img></div>        
        </div>
            <div id="fill4"><center><u>VOWELS</u></center></div>
            <div id="questque4">Choose the correct vowel and write your answer in the box given : </div>
            <div id="quest17">Que 17: </div>
            <div><button id="que17tm">3Marks</button></div>
            <div id="box12">
            <div><img src="que1.png" height="70px" width="70px" id="que17p1"></img></div>        
            <div><img src="socks1.png" height="400px" width="400px" id="socks"></img></div>
            <div id="sdiv">
            <div><img src="capss.png" height="125px" width="90px" id="socks1"></img></div>
            <div><img src="capso.png" height="120px" width="90px" id="socks2"></img></div>
            <div><img src="capsc.png" height="148px" width="95px" id="socks3"></img></div>
            <div><img src="capsk.png" height="125px" width="88px" id="socks4"></img></div>
            <div><img src="capss.png" height="125px" width="90px" id="socks5"></img></div>
            <div><button id="que17p1m">1.5Marks</button></div>
            <div><input type="text" name="ans21" required id="ans21" value="<?php if(isset($_POST['ans21'])) echo $_POST['ans21'] ?>"></div>
            </div>   
            </div>
            <div id="box13">
            <div><img src="que2.png" height="73px" width="87px" id="que17p2"></img></div>
            <div><img src="giftnew.png" height="350px" width="320px" id="gift"></img></div>
            <div id="gdiv">
            <div><img src="capsg.png" height="135px" width="90px" id="gift1"></img></div>
            <div><img src="capsi.png" height="126px" width="90px" id="gift2"></img></div>
            <div><img src="capsf.png" height="136px" width="90px" id="gift3"></img></div>
            <div><img src="capst.png" height="120px" width="90px" id="gift4"></img></div>
            </div>
            <div><button id="que17p2m">1.5Marks</button></div>
            <div><input type="text" name="ans22" required id="ans22" value="<?php if(isset($_POST['ans22'])) echo $_POST['ans22'] ?>"></div>
            </div>
            <div id="quest18">Que 18: </div>
            <div id="quest18que">Fill with correct vowel and write your answer in the box given : </div>
            <div><button id="que18tm">3Marks</button></div>
            <div id="tiediv">
            <div><img src="que1.png" height="70px" width="70px" id="que18p1"></img></div>        
            <div><img src="tie.png" height="275px" width="290px" id="tie"></img></div>
            <div id="border181"></div>
            <div><img src="capst.png" height="110px" width="90px" id="tie1"></img></div>
            <div><input type="text" name="ans23" required id="ans23" value="<?php if(isset($_POST['ans23'])) echo $_POST['ans23'] ?>"></div>
            <div id="border182"></div>
            <div><img src="capse.png" height="90px" width="80px" id="tie2"></img></div>
            <div><button id="que18p1m">1Mark</button></div>
            </div>
            <div id="box14">
            <div><img src="que2.png" height="73px" width="87px" id="que18p2"></img></div>
            <div><img src="foodnew.png" height="300px" width="380px" id="food"></img></div>
            <div id="border1821"></div>
            <div><img src="capsf.png" height="136px" width="90px" id="food1"></img></div>
            <div><input type="text" name="ans24" required id="ans24" value="<?php if(isset($_POST['ans24'])) echo $_POST['ans24'] ?>"></div>
            <div><input type="text" name="ans25" required id="ans25" value="<?php if(isset($_POST['ans25'])) echo $_POST['ans25'] ?>"></div>
            <div id="border1822"></div>
            <div><img src="capsd.png" height="85px" width="90px" id="food2"></img></div>
            <div><button id="que18p2m">2Marks</button></div>
            </div>
            <div id="quest19">Que 19: </div>
            <div id="quest19que">Choose the correct option and write your answer in the box given : </div>
            <div><button id="que19tm">3Marks</button></div>
            <div id="slque">
            <div id="short"><h1>Short Vowel</h1></div>
            <div id="long"><h1>Long Vowel</h1></div>
            <div><img src="que1.png" height="70px" width="70px" id="que19p1"></img></div>        
            <div><img src="ringnew.png" height="280px" width="300px" id="ring"></img></div>
            <div><img src="optiona.jpg" height="90px" width="80px" id="ringop1"></img></div>
            <div id="border191"></div>
            <div><img src="ringword.png" height="115px" width="130px" id = "short1"></img>
            <div><img src="optionb.jpg" height="90px" width="80px" id="ringop2"></img></div>
            <div id="border192"></div>
            <img src="ringword.png" height="115px" width="130px" id="long1"></img>
            <div><input type="text" name="ans26" required id="ans26" value="<?php if(isset($_POST['ans26'])) echo $_POST['ans26'] ?>"></div>
            <div><button id="que19p1m">1.5Marks</button></div>
            <div id="box15">
            <div><img src="que2.png" height="73px" width="87px" id="que19p2"></img></div>
            <div><img src="globenew.png" height="400px" width="300px" id="globe"></img></div>
            <div><img src="optiona.jpg" height="90px" width="80px" id="globeop1"></img></div>
            <div id="border1921"></div>
            <div><img src="globeword.png" height="112px" width="130px" id = "short2"></img>
            <div><img src="optionb.jpg" height="90px" width="80px" id="globeop2"></img></div>
            <div id="border1922"></div>
            <img src="globeword.png" height="112px" width="130px" id="long2"></img>
            <div><input type="text" name="ans27" required id="ans27" value="<?php if(isset($_POST['ans27'])) echo $_POST['ans27'] ?>"></div>
            <div><button id="que19p2m">1.5Marks</button></div>
            </div>
            </div>
            <div id="quest20">Que 20: </div>
            <div id="quest20que">Count total vowels in the spelling and write your answer in the box given : </div>
            <div><button id="que20tm">3Marks</button></div>
            <div><img src="que1.png" height="70px" width="70px" id="que20p1"></img></div>        
            <div id="box16">
            <div><img src="pineapple.png" height="230px" width="800px" id="pine1"></img></div>
            </div>
            <div><input type="text" name="ans28" required id="ans28" value="<?php if(isset($_POST['ans28'])) echo $_POST['ans28'] ?>"></div>
            <div><button id="que20p1m">1Mark</button></div>
            <div><img src="que2.png" height="73px" width="87px" id="que20p2"></img></div>
            <div id="box17">
            <div><img src="aeroplane.png" height="230px" width="800px" id="aero1"></img></div>
            </div>
            <div><input type="text" name="ans29" required id="ans29" value="<?php if(isset($_POST['ans29'])) echo $_POST['ans29'] ?>"></div>
            <div ><button id="que20p2m">1Mark</button></div>
            <div><img src="que3.png" height="75px" width="70px" id="que20p3"></img></div>
            <div id="box18">
            <div><img src="princess.png" height="200px" width="800px" id="queen1"></img></div>
            </div>
            <div><input type="text" name="ans30" required id="ans30" value="<?php if(isset($_POST['ans30'])) echo $_POST['ans30'] ?>"></div>
            <div><button id="que20p3m">1Mark</button></div>
            <div><center><pre id="end">*** END OF EXAM ***</pre></center></div>
            <div><center><input type="submit" name="submit" value="SUBMIT" id="submitexam"></center></div>
        </form>
        <?php
        $conn=mysqli_connect("localhost","root","Taniyaa","kids");
        if(isset($_POST["submit"]))
        {
            $name = $_POST['name'];
            $query=" UPDATE `progress` SET `Name`='$name' WHERE `Total`='1' ";
            $res=mysqli_query($conn,$query);
            $age = $_POST['age'];
            $query1=" UPDATE `progress` SET `Age`='$age' WHERE `Total`='1' ";
            $res1=mysqli_query($conn,$query1);
            $email = $_POST['email'];
            $query2=" UPDATE `progress` SET `Email`='$email' WHERE `Total`='1' ";
            $res2=mysqli_query($conn,$query2);
            $ans1 = $_POST['ans1'];
            if($ans1 == 'z'){
                $query=" UPDATE `signup` SET `Que1` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que1` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans2 = $_POST['ans2'];
            if($ans2 == 'g'){
                $query=" UPDATE `signup` SET `Que2` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que2` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans3 = $_POST['ans3'];
            if($ans3 == 'E'){
                $query=" UPDATE `signup` SET `Que3` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que3` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans4 = $_POST['ans4'];
            if($ans4 == 'F'){
                $query=" UPDATE `signup` SET `Que4` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que4` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans5 = $_POST['ans5'];
            if($ans5 == 'S'){
                $query=" UPDATE `signup` SET `Que5` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que5` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans6 = $_POST['ans6'];
            if($ans6 == 'H'){
                $query=" UPDATE `signup` SET `Que6` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que6` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans7 = $_POST['ans7'];
            if($ans7 == 'B' || $ans7 == 'b'){
                $query=" UPDATE `signup` SET `Que7` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que7` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans8 = $_POST['ans8'];
            if($ans8 == 'R' || $ans8 == 'r'){
                $query=" UPDATE `signup` SET `Que8` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que8` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans9 = $_POST['ans9'];
            if($ans9 == 'R' || $ans9 == 'r'){
                $query=" UPDATE `signup` SET `Que9` = '2' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que9` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans10 = $_POST['ans10'];
            if($ans10 == 'J' || $ans10 == 'j'){
                $query=" UPDATE `signup` SET `Que10` = '2' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que10` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans11 = $_POST['ans11'];
            if($ans11 == 'D' || $ans11 == 'd'){
                $query=" UPDATE `signup` SET `Que11` = '2' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que11` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans12 = $_POST['ans12'];
            if($ans12 == 'B' || $ans12 == 'b'){
                $query=" UPDATE `signup` SET `Que12` = '2' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que12` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans13 = $_POST['ans13'];
            if($ans13 == 'A' || $ans13 == 'a'){
                $query=" UPDATE `signup` SET `Que13` = '2' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que13` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans14 = $_POST['ans14'];
            if($ans14 == 'C' || $ans14 == 'c'){
                $query=" UPDATE `signup` SET `Que14` = '2' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que14` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans15 = $_POST['ans15'];
            if($ans15 == 'B' || $ans15 == 'b'){
                $query=" UPDATE `signup` SET `Que15` = '3' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que15` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans16 = $_POST['ans16'];
            if($ans16 == 'A' || $ans16 == 'a'){
                $query=" UPDATE `signup` SET `Que16` = '3' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que16` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans17 = $_POST['ans17'];
            if($ans17 == 'C' || $ans17 == 'c'){
                $query=" UPDATE `signup` SET `Que17` = '3' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que17` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans18 = $_POST['ans18'];
            if($ans18 == 'B' || $ans18 == 'b'){
                $query=" UPDATE `signup` SET `Que18` = '3' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que18` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans19 = $_POST['ans19'];
            if($ans19 == 'B' || $ans19 == 'b'){
                $query=" UPDATE `signup` SET `Que19` = '3' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que19` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans20 = $_POST['ans20'];
            if($ans20 == 'A' || $ans20 == 'a'){
                $query=" UPDATE `signup` SET `Que20` = '3' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que20` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans21 = $_POST['ans21'];
            if($ans21 == 'O' || $ans21 == 'o'){
                $query=" UPDATE `signup` SET `Que21` = '1.5' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que21` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans22 = $_POST['ans22'];
            if($ans22 == 'I' || $ans22 == 'i'){
                $query=" UPDATE `signup` SET `Que22` = '1.5' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que4` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans23 = $_POST['ans23'];
            if($ans23 == 'I' || $ans23 == 'i'){
                $query=" UPDATE `signup` SET `Que23` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que23` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans24 = $_POST['ans24'];
            if($ans24 == 'O' || $ans24 == 'o'){
                $query=" UPDATE `signup` SET `Que24` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que24` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans25 = $_POST['ans25'];
            if($ans25 == 'O' || $ans25 == 'o'){
                $query=" UPDATE `signup` SET `Que25` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que25` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans26 = $_POST['ans26'];
            if($ans26 == 'A' || $ans26 == 'a'){
                $query=" UPDATE `signup` SET `Que26` = '1.5' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que26` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans27 = $_POST['ans27'];
            if($ans27 == 'B' || $ans27 == 'b'){
                $query=" UPDATE `signup` SET `Que27` = '1.5' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que27` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans28 = $_POST['ans28'];
            if($ans28 == '4'){
                $query=" UPDATE `signup` SET `Que28` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que28` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans29 = $_POST['ans29'];
            if($ans29 == '5'){
                $query=" UPDATE `signup` SET `Que29` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que29` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans30 = $_POST['ans30'];
            if($ans30 == '2'){
                $query=" UPDATE `signup` SET `Que30` = '1' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `signup` SET `Que30` = '0' WHERE `signup`.`Email` = '$email' ";
                $res=mysqli_query($conn,$query); 
            }
            $query3=" UPDATE `signup` SET `EngMark` = Que1 + Que2 + Que3 + Que4 + Que5 + Que6 + Que7 + Que8 + Que9 + Que10 + Que11 + Que12 + Que13 + Que14 + Que15 + Que16 + Que17 + Que18 + Que19 + Que20 + Que21 + Que22 + Que23 + Que24 + Que25 + Que26 + Que27 + Que28 + Que29 + Que30 WHERE `signup`.`Email` = '$email' ";
            $res4=mysqli_query($conn,$query3); 
            echo "<script> window.location.href = 'exam.php'; </script>";

            $ans1 = $_POST['ans1'];
            if($ans1 == 'z'){
                $query=" UPDATE `progress` SET `Que1`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que1`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans2 = $_POST['ans2'];
            if($ans2 == 'g'){
                $query=" UPDATE `progress` SET `Que2`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que2`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans3 = $_POST['ans3'];
            if($ans3 == 'E'){
                $query=" UPDATE `progress` SET `Que3`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que3`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans4 = $_POST['ans4'];
            if($ans4 == 'F'){
                $query=" UPDATE `progress` SET `Que4`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que4`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans5 = $_POST['ans5'];
            if($ans5 == 'S'){
                $query=" UPDATE `progress` SET `Que5`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que5`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans6 = $_POST['ans6'];
            if($ans6 == 'H'){
                $query=" UPDATE `progress` SET `Que6`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que6`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans7 = $_POST['ans7'];
            if($ans7 == 'B' || $ans7 == 'b'){
                $query=" UPDATE `progress` SET `Que7`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que7`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans8 = $_POST['ans8'];
            if($ans8 == 'R' || $ans8 == 'r'){
                $query=" UPDATE `progress` SET `Que8`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que8`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans9 = $_POST['ans9'];
            if($ans9 == 'R' || $ans9 == 'r'){
                $query=" UPDATE `progress` SET `Que9`='2' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que9`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans10 = $_POST['ans10'];
            if($ans10 == 'J' || $ans10 == 'j'){
                $query=" UPDATE `progress` SET `Que10`='2' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que10`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans11 = $_POST['ans11'];
            if($ans11 == 'D' || $ans11 == 'd'){
                $query=" UPDATE `progress` SET `Que11`='2' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que11`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans12 = $_POST['ans12'];
            if($ans12 == 'B' || $ans12 == 'b'){
                $query=" UPDATE `progress` SET `Que12`='2' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que12`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans13 = $_POST['ans13'];
            if($ans13 == 'A' || $ans13 == 'a'){
                $query=" UPDATE `progress` SET `Que13`='2' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que13`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans14 = $_POST['ans14'];
            if($ans14 == 'C' || $ans14 == 'c'){
                $query=" UPDATE `progress` SET `Que14`='2' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que14`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans15 = $_POST['ans15'];
            if($ans15 == 'B' || $ans15 == 'b'){
                $query=" UPDATE `progress` SET `Que15`='3' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que15`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans16 = $_POST['ans16'];
            if($ans16 == 'A' || $ans16 == 'a'){
                $query=" UPDATE `progress` SET `Que16`='3' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que16`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans17 = $_POST['ans17'];
            if($ans17 == 'C' || $ans17 == 'c'){
                $query=" UPDATE `progress` SET `Que17`='3' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que17`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans18 = $_POST['ans18'];
            if($ans18 == 'B' || $ans18 == 'b'){
                $query=" UPDATE `progress` SET `Que18`='3' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que18`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans19 = $_POST['ans19'];
            if($ans19 == 'B' || $ans19 == 'b'){
                $query=" UPDATE `progress` SET `Que19`='3' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que19`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans20 = $_POST['ans20'];
            if($ans20 == 'A' || $ans20 == 'a'){
                $query=" UPDATE `progress` SET `Que20`='3' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que20`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans21 = $_POST['ans21'];
            if($ans21 == 'O' || $ans21 == 'o'){
                $query=" UPDATE `progress` SET `Que21`='1.5' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que21`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans22 = $_POST['ans22'];
            if($ans22 == 'I' || $ans22 == 'i'){
                $query=" UPDATE `progress` SET `Que22`='1.5' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que22`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans23 = $_POST['ans23'];
            if($ans23 == 'I' || $ans23 == 'i'){
                $query=" UPDATE `progress` SET `Que23`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que23`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans24 = $_POST['ans24'];
            if($ans24 == 'O' || $ans24 == 'o'){
                $query=" UPDATE `progress` SET `Que24`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que24`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans25 = $_POST['ans25'];
            if($ans25 == 'O' || $ans25 == 'o'){
                $query=" UPDATE `progress` SET `Que25`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que25`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans26 = $_POST['ans26'];
            if($ans26 == 'A' || $ans26 == 'a'){
                $query=" UPDATE `progress` SET `Que26`='1.5' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que26`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans27 = $_POST['ans27'];
            if($ans27 == 'B' || $ans28 == 'b'){
                $query=" UPDATE `progress` SET `Que27`='1.5' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que27`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans28 = $_POST['ans28'];
            if($ans28 == '4'){
                $query=" UPDATE `progress` SET `Que28`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que28`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans29 = $_POST['ans29'];
            if($ans29 == '5'){
                $query=" UPDATE `progress` SET `Que29`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que29`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $ans30 = $_POST['ans30'];
            if($ans30 == '2'){
                $query=" UPDATE `progress` SET `Que30`='1' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query);
            }
            else{
                $query=" UPDATE `progress` SET `Que30`='0' WHERE `Total`='1' ";
                $res=mysqli_query($conn,$query); 
            }
            $query4=" UPDATE `progress` SET `TotalMarks`=Que1 + Que2 + Que3 + Que4 + Que5 + Que6 + Que7 + Que8 + Que9 + Que10 + Que11 + Que12 + Que13 + Que14 + Que15 + Que16 + Que17 + Que18 + Que19 + Que20 + Que21 + Que22 + Que23 + Que24 + Que25 + Que26 + Que27 + Que28 + Que29 + Que30  WHERE `Total`='1' ";
            $res5=mysqli_query($conn,$query4); 
        }
        ?>
    </body>
</html>