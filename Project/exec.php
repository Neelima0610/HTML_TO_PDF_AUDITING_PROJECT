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
else
{
    echo 'connected succesfully';
}


$visby = $_POST['vis'];
$who = $_POST['who'];
$dov = $_POST['dov'];
$pofv = $_POST['pofv'];
$ccop = $_POST['ccop'];
$cash = $_POST['cash'];
$term = $_POST['term'];
$total = $_POST['tot'];
$others1 = $_POST['others1'];
$others12 = $_POST['others12'];
$others13 = $_POST['others13'];
$others14 = $_POST['others14'];
$others15 = $_POST['others15'];
$others16 = $_POST['others16'];

$raw = $_POST['raw'];
$wip = $_POST['wip'];
$fs = $_POST['fs'];
$qstn2 = $_POST['in3b'];
$qstn3 = $_POST['in3c'];
$qstn4 = $_POST['in3d'];
$qstn5 = $_POST['in3e'];
$qstn6 = $_POST['in3f'];
$qstn7 = $_POST['in3g'];
$qstn8 = $_POST['in3h'];
$qstn9 = $_POST['in3i'];
$qstn10 = $_POST['in3j'];
$qstn11 = $_POST['in3k'];
$date1 = $_POST['date1'];
$total2 = $_POST['total2'];

$in4a = $_POST['in4a'];
$in4b = $_POST['in4b'];
$in4c = $_POST['in4c'];
$in4d = $_POST['in4d'];
$in4e = $_POST['in4e'];
$in4f = $_POST['in4f'];

$noic = $_POST['noic'];
$lorc = $_POST['lorc'];
$valid = $_POST['valid'];
$pn = $_POST['pn'];
$asset = $_POST['asset'];
$insure = $_POST['insure'];

$sql = "update executive_summary set visby = '$visby' , who = '$who' , dov = '$dov' , pofv = '$pofv' , ccop='$ccop' ,  others = '$others1' ,others2 = '$others12' ,others3 = '$others13' ,others4 = '$others14' ,others5 = '$others15' ,others6 = '$others16' ,cash = $cash , term =$term , total = $total  where sno = 1";

$res = $conn->query($sql);

 $sql = "update inventory_control set raw=$raw , wip=$wip , fs=$fs , qstn2 = '$qstn2' , qstn3 = '$qstn3' , qstn4 = '$qstn4' , qstn5 = '$qstn5' , qstn6 = '$qstn6' , qstn7 = '$qstn7' , qstn8 = '$qstn8' , qstn9 = '$qstn9' , qstn10 = '$qstn10',qstn11 = '$qstn11' , date1='$date1' , total = $total2 where sno = 1";

$res3 = $conn->query($sql);
 $sql = "update book_keeping set qstn1='$in4a',qstn2='$in4b',qstn3='$in4c',qstn4='$in4d',qstn5='$in4e',qstn6='$in4f' where sno = 1";

$res4 = $conn->query($sql);
 $sql = "update insurance_coverage set noic = '$noic',lorc='$lorc',valid='$valid',pn='$pn',asset='$asset',insure='$insure'  where sno = 1";

$res5 = $conn->query($sql);

if(($res===TRUE))
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
    <a href='main4.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
    
    </center>
          
          </body></html>
          ";
    
}
 else
 {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
?>
