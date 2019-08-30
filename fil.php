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
$year5 = $_POST['year5'];
$year6 = $_POST['year6'];
$year7 = $_POST['year7'];
$year8 = $_POST['year8'];
$m1    = $_POST['m1'];
$m12    = $_POST['m12'];
$m13    = $_POST['m13'];
$m14    = $_POST['m14'];
$m15    = $_POST['m15'];
$m16    = $_POST['m16'];
$m17   = $_POST['m17'];
$m18    = $_POST['m18'];
$m19    = $_POST['m19'];
$m110    = $_POST['m110'];
$m111    = $_POST['m111'];
$m112    = $_POST['m112'];
$fy1  = $_POST['fy1'];
$fy12  = $_POST['fy12'];
$fy13  = $_POST['fy13'];
$fy14  = $_POST['fy14'];
$fy15  = $_POST['fy15'];
$fy16  = $_POST['fy16'];
$fy17  = $_POST['fy17'];
$fy18  = $_POST['fy18'];
$fy19  = $_POST['fy19'];
$fy110  = $_POST['fy110'];
$fy111  = $_POST['fy111'];
$fy112  = $_POST['fy112'];

$m2    = $_POST['m2'];
$m22    = $_POST['m22'];
$m23    = $_POST['m23'];
$m24    = $_POST['m24'];
$m25    = $_POST['m25'];
$m26    = $_POST['m26'];
$m27   = $_POST['m27'];
$m28    = $_POST['m28'];
$m29    = $_POST['m29'];
$m210    = $_POST['m210'];
$m211    = $_POST['m211'];
$m212    = $_POST['m212'];
$sno = 1;

$fy2  = $_POST['fy2'];
$fy22  = $_POST['fy22'];
$fy23  = $_POST['fy23'];
$fy24  = $_POST['fy24'];
$fy25  = $_POST['fy25'];
$fy26  = $_POST['fy26'];
$fy27  = $_POST['fy27'];
$fy28  = $_POST['fy28'];
$fy29  = $_POST['fy29'];
$fy210  = $_POST['fy210'];
$fy211  = $_POST['fy211'];
$fy212  = $_POST['fy212'];
$tota =   $_POST['tota'];
$totb  = $_POST['totb'];
$sql = "update FI set m1=$m1,m12=$m12,m13=$m13,m1=$m14,m15=$m15,m16=$m16,m17=$m17,m18=$m18,m19=$m19,m110=$m110,m111=$m111,m112=$m112,m2=$m2,m22=$m22,m23=$m23,m2=$m24,m25=$m25,m26=$m26,m27=$m27,m28=$m28,m29=$m29,m210=$m210,m211=$m211,m212=$m212,fy1=$fy1,fy12=$fy12,fy13=$fy13,fy14=$fy14,fy15=$fy15,fy16=$fy16,fy17=$fy17,fy18=$fy18,fy19=$fy19,fy110=$fy110,fy111=$fy111,fy112=$fy112,fy2=$fy2,fy22=$fy22,fy23=$fy23,fy24=$fy24,fy25=$fy25,fy26=$fy26,fy27=$fy27,fy28=$fy28,fy29=$fy29,fy210=$fy210,fy211=$fy211,fy212=$fy212,tota=$tota,totb=$totb where sno=1";

$res6 = $conn->query($sql);


if(($res6===TRUE))
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
    <a href='main7.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
    
    </center>
          
          </body></html>
          ";
    
}
 else
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
    <a href='main7.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
    
    </center>
          
          </body></html>
          ";
    
 }
?>
