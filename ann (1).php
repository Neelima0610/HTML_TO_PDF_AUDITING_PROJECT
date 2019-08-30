<?php

$ser  = "localhost";
$user = "id10204674_db1";
$pass = "123456";
$dbname = "id10204674_db1";
$conn = new mysqli($ser,$user,$pass,$dbname);

if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}

$d1 = $_POST['d1'];
$d2 = $_POST['d2'];
$d3 = $_POST['d3'];
$d4 = $_POST['d4'];
$d5 = $_POST['d5'];
$d6 = $_POST['d6'];
$d7 = $_POST['d7'];
$d8 = $_POST['d8'];
$d9 = $_POST['d9'];
$d10 = $_POST['d10'];



$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];
$p6 = $_POST['p6'];
$p7 = $_POST['p7'];
$p8 = $_POST['p8'];
$p9 = $_POST['p9'];
$p10 = $_POST['p10'];


$vt1 = $_POST['vt1'];
$vt2 = $_POST['vt2'];
$vt3 = $_POST['vt3'];
$vt4 = $_POST['vt4'];
$vt5 = $_POST['vt5'];
$vt6 = $_POST['vt6'];
$vt7 = $_POST['vt7'];
$vt8 = $_POST['vt8'];
$vt9 = $_POST['vt9'];
$vt10 = $_POST['vt10'];


$am1 = $_POST['am1'];
$am2 = $_POST['am2'];
$am3 = $_POST['am3'];
$am4 = $_POST['am4'];
$am5 = $_POST['am5'];
$am6 = $_POST['am6'];
$am7 = $_POST['am7'];
$am8 = $_POST['am8'];
$am9 = $_POST['am9'];
$am10 = $_POST['am10'];


 $sql = "update ann1 set d1 = '$d1',d2 = '$d2',d3 = '$d3',d4 = '$d4',d5 = '$d5',d6 = '$d6',d7 = '$d7',d8 = '$d8',d9 = '$d9',d10 = '$d10',p1 = '$p1',p2 = '$p2',p3 = '$p3',p4 = '$p4',p5 = '$p5',p6 = '$p6',p7 = '$p7',p8 = '$p8',p9 = '$p9',p10 = '$p10', vt1 = '$vt1',vt2 = '$vt2',vt3 = '$vt3',vt4 = '$vt4',vt5 = '$vt5',vt6 = '$vt6',vt7 = '$vt7',vt8 = '$vt8',vt9 = '$vt9',vt10 = '$vt10', am1 = $am1,am2 = $am2,am3 = $am3,am4 = $am4,am5 = $am5,am6 = $am6,am7 = $am7,am8 = $am8,am9 = $am9,am10 = $am10 where sno = 1";

$res7 = $conn->query($sql);

if(($res7===TRUE))
{
    
echo "<html><head>

         
          
                   <style>
           .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white; 
  color: black; 
  width:300px;
  height:300px;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

          </style>
          </head><body>
    <center><br><br><h1 style='color:green';>Data Saved Successfully</h1><br><br>
     <a href='index.php' style='text-decoration:none;color:black;'><button class='button button2' >UPDATE PDF</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href='main8.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
   
    </center>
   <body></html>";       
   
}
 else
 {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
?>