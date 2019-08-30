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

$dep1 = $_POST['dep1'];
$dep2 = $_POST['dep2'];
$dep3 = $_POST['dep3'];
$dep4 = $_POST['dep4'];
$sales1 = $_POST['sales1'];
$sales2 = $_POST['sales2'];
$sales3 = $_POST['sales3'];
$sales4 = $_POST['sales4'];
$depg1 = $_POST['depg1'];
$depg2 = $_POST['depg2'];
$depg3 = $_POST['depg3'];
$depg4 = $_POST['depg4'];
$note = $_POST['note'];
$b7 = $_POST['b7'];
$c7 = $_POST['c7'];
$d7 = $_POST['d7'];
$e7 = $_POST['e7'];
$f7 = $_POST['f7'];
$mn1 = $_POST['mn1'];
$mn2 = $_POST['mn2'];
$mn3 = $_POST['mn3'];
$mn4 = $_POST['mn4'];

 $sql = "update cc set dep1=$dep1,dep2=$dep2,dep3=$dep3,dep4=$dep4,sale1=$sales1,sale2=$sales2,sale3=$sales3,sale4=$sales4,depg1=$depg1,depg2=$depg2,depg3=$depg3,depg4=$depg4,note='$note',b7='$b7',c7='$c7',d7='$d7',e7='$e7',f7='$f7',mn1 = '$mn1',mn2='$mn2',mn3='$mn3',mn4='$mn4'  where sno = 1";

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
    <a href='main5.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
    
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
    <a href='main5.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
    
    </center>
          
          </body></html>
          ";
    
 }
?>
