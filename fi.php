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


$year1 = $_POST['year1'];
$year2 = $_POST['year2'];
$year3 = $_POST['year3'];
$year4 = $_POST['year4'];
$saud1 = $_POST['saud1'];
$saud2 = $_POST['saud2'];
$sin = $_POST['sin'];
$sinp = $_POST['sinp'];

$paud1 = $_POST['paud1'];
$paud2 = $_POST['paud2'];
$pin = $_POST['pin'];
$pinp = $_POST['pinp'];

	$daud1 = $_POST['daud1'];
	$daud2 = $_POST['daud2'];
	$din = $_POST['din'];
	$dinp = $_POST['dinp'];

$staud1 = $_POST['staud1'];
$staud2 = $_POST['staud2'];
$stin = $_POST['stin'];
$stinp = $_POST['stinp'];

$craud1 = $_POST['craud1'];
$craud2 = $_POST['craud2'];
$crin = $_POST['crin'];
$crinp = $_POST['crinp'];

$naud1 = $_POST['naud1'];
$naud2 = $_POST['naud2'];
$nin = $_POST['nin'];
$ninp = $_POST['ninp'];

$sql = "update FI set year1=$year1,year2=$year2,year3=$year3,year4=$year4,saud1=$saud1,saud2=$saud2,sin = $sin,sinp = $sinp,daud1=$daud1,daud2=$daud2,din = $din,dinp = $dinp,paud1=$paud1,paud2=$paud2,pin = $pin,pinp = $pinp,staud2=$staud1,staud1=$staud2,stin = $stin,stinp = $stinp,craud1=$craud1,craud2=$craud2,crin = $crin,crinp = $crinp,naud1=$naud1,naud2=$naud2,nin = $nin,ninp = $ninp where sno=1";

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
    <a href='main6.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
    
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
    <a href='main6.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
    
    </center>
          
          </body></html>
          ";
    
 }
?>
