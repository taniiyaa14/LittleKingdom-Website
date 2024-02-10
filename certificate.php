<html>
    <head>
        <title>LittleKingdom</title>
        <style>
            #bg{
                overflow:hidden;
            }
            #certi{
                font-family:"Algerian";
                font-size:30px;
                text-decoration:underline;
            }
            #back{
                height:40px;
                width:175px;
                border:1px solid black;
                background-color:black;
				color: #ff1a66;
                position: relative;
                left:960px;
				top:10px;
            }
            a{
                text-decoration: none;
                color:white;
				font-family:"elephant";
				font-size:20px;
                position: relative;
                left:15px;
                top:7px;
            }
            #note{
                position:relative;
                top:-40px;
                left:110px;
            }
            #date{
                font-size:30px;
                font-weight:bold;
                position:relative;
                top:-140px;
                left:745px;
                font-family:"cooper black";
            }
            #studnm{
                font-weight:bold;
                font-size:50px;
                position:relative;
                top:-390px;
                left:400px;
                font-family:"cooper black";
            }
        </style>
    </head>
    <body id="bg">
        <h1 id="certi"><center>CERTIFICATE</center></h1>
        <div><center><img src="certificate1.jpg" height="470px" width="1008px"></img></center></div>
        <div id="back"><a href="welcome.html">Back to Home</a></div>
        <div id="note">* Please take a screenshot of the certificate *</div>
        <?php 
            $conn=mysqli_connect("localhost","root","Taniyaa","kids");
            echo "<div id='date'>" .date("d-m-Y"). "</div>";
            $query=" SELECT `Name` FROM `progress` WHERE Total='1' ";
            $res=mysqli_query($conn,$query);
            $count=mysqli_num_rows($res);
            if($count>0){
                while($row=$res->fetch_assoc()){
                    $name = $row["Name"];
                    $name1 = strtoupper($name);
                    echo "<div id='studnm'>" .$name1. "</div>";
                }
            }    
        ?>
    </body>
</html>