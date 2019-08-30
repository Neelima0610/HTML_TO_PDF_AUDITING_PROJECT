<?php

$ser  = "localhost";
$user = "id10204674_db1";
$pass = "123456";
$dbname = "id10204674_db1";
$conn = new mysqli($ser,$user,$pass,$dbname);
$p11;
if($conn->connect_error)
{
	die("connection failed:".$conn->connect_error);
}
$p11 = $_POST['p11'];

$p12 = $_POST['p12'];

$p13 = $_POST['p13'];
$p14 = $_POST['p14'];
$p15 = $_POST['p15'];
$p16 = $_POST['p16'];
$p17 = $_POST['p17'];
$p18 = $_POST['p18'];
$p19 = $_POST['p19'];
$p20 = $_POST['p20'];


$p21 = $_POST['p21'];
$p22 = $_POST['p22'];
$p23 = $_POST['p23'];
$p24 = $_POST['p24'];
$p25 = $_POST['p25'];
$p26 = $_POST['p26'];
$p27 = $_POST['p27'];
$p28 = $_POST['p28'];
$p29 = $_POST['p29'];
$p30 = $_POST['p30'];



$bq11 = $_POST['bq11'];
$bq12 = $_POST['bq12'];
$bq13 = $_POST['bq13'];
$bq14 = $_POST['bq14'];
$bq15 = $_POST['bq15'];
$bq16 = $_POST['bq16'];
$bq17 = $_POST['bq17'];
$bq18 = $_POST['bq18'];
$bq19 = $_POST['bq19'];
$bq20 = $_POST['bq20'];

$bq21 = $_POST['bq21'];
$bq22 = $_POST['bq22'];
$bq23 = $_POST['bq23'];
$bq24 = $_POST['bq24'];
$bq25 = $_POST['bq25'];
$bq26 = $_POST['bq26'];
$bq27 = $_POST['bq27'];
$bq28 = $_POST['bq28'];
$bq29 = $_POST['bq29'];
$bq30 = $_POST['bq30'];


$pq11 = $_POST['pq11'];
$pq12 = $_POST['pq12'];
$pq13 = $_POST['pq13'];
$pq14 = $_POST['pq14'];
$pq15 = $_POST['pq15'];
$pq16 = $_POST['pq16'];
$pq17 = $_POST['pq17'];
$pq18 = $_POST['pq18'];
$pq19 = $_POST['pq19'];
$pq20 = $_POST['pq20'];

$pq21 = $_POST['pq21'];
$pq22 = $_POST['pq22'];
$pq23 = $_POST['pq23'];
$pq24 = $_POST['pq24'];
$pq25 = $_POST['pq25'];
$pq26 = $_POST['pq26'];
$pq27 = $_POST['pq27'];
$pq28 = $_POST['pq28'];
$pq29 = $_POST['pq29'];
$pq30 = $_POST['pq30'];


$rem11 = $_POST['rem11'];
$rem12 = $_POST['rem12'];
$rem13 = $_POST['rem13'];
$rem14 = $_POST['rem14'];
$rem15 = $_POST['rem15'];
$rem16 = $_POST['rem16'];
$rem17 = $_POST['rem17'];
$rem18 = $_POST['rem18'];
$rem19 = $_POST['rem19'];
$rem20 = $_POST['rem20'];


$rem21 = $_POST['rem21'];
$rem22 = $_POST['rem22'];
$rem23 = $_POST['rem23'];
$rem24 = $_POST['rem24'];
$rem25 = $_POST['rem25'];
$rem26 = $_POST['rem26'];
$rem27 = $_POST['rem27'];
$rem28 = $_POST['rem28'];
$rem29 = $_POST['rem29'];
$rem30 = $_POST['rem30'];

 $sql = "update ann2 set p11 = '$p11',p12 = '$p12',p13 = '$p13',p14 = '$p14',p15 = '$p15',p16 = '$p16',p17 = '$p17',p18 = '$p18',p19 = '$p19',p20 = '$p20', p21 = '$p21',p22 = '$p22',p23 = '$p23',p24 = '$p24',p25 = '$p25',p26 = '$p26',p27 = '$p27',p28 = '$p28',p29 = '$p29',p30 = '$p30', bq11 = $bq11,bq12 = $bq12,bq13 = $bq13,bq14 = $bq14,bq15 = $bq15,bq16 = $bq16,bq17 = $bq17,bq18 = $bq18,bq19 = $bq19,bq20 = $bq20, bq21 = $bq21,bq22 = $bq22,bq23 = $bq23,bq24 = $bq24,bq25 = $bq25,bq26 = $bq26,bq27 = $bq27,bq28 = $bq28,bq29 = $bq29,bq30 = $bq30, pq11 = $pq11,pq12 = $pq12,pq13 = $pq13,pq14 = $pq14,pq15 = $pq15,pq16 = $pq16,pq17 = $pq17,pq18 = $pq18,pq19 = $pq19,pq20 = $pq20, pq21 = $pq21,pq22 = $pq22,pq23 = $pq23,pq24 = $pq24,pq25 = $pq25,pq26 = $pq26,pq27 = $pq27,pq28 = $pq28,pq29 = $pq29,pq30 = $pq30, rem1 = '$rem11',rem2 = '$rem12',rem3 = '$rem13',rem4 = '$rem14',rem5 = '$rem15',rem6 = '$rem16',rem7 = '$rem17',rem8 = '$rem18',rem9 = '$rem19',rem10 = '$rem20', rem11 = '$rem21',rem12 = '$rem22',rem13 = '$rem23',rem14 = '$rem24',rem15 = '$rem25',rem16 = '$rem26',rem17 = '$rem27',rem18 = '$rem28',rem19 = '$rem29',rem20 = '$rem30' where sno = 1";

$res7 = $conn->query($sql);

if(($res7===TRUE))
{
    
echo "<html><head>          <style>
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
    <a href='index.php' style='text-decoration:none;color:black;'><button class='button button2' >GENERATE PDF</button></a>
    </center>
          
         
          </body></html>
          ";
    
}
 else
 {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }

?>
