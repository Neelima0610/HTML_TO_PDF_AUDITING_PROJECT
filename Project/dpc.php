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


$nps = $_POST['nps'];
$debp = $_POST['debp'];
$stock = $_POST['stock'];
$cred = $_POST['cred'];
$tps = $_POST['tps'];
$mops = $_POST['mops'];
$dpA = $_POST['dpA'];
$deb = $_POST['debt'];
$mods = $_POST['mods'];
$dpB = $_POST['dpB'];
$tadp = $_POST['tadp'];
$ls = $_POST['ls'];
$aa = $_POST['aa'];
$pst = $_POST['pst'];
$dep = $_POST['dep'];
$date1 = $_POST['date1'];
$stk1 = $_POST['stk1'];
$stk2 = $_POST['stk2'];
$stk3 = $_POST['stk3'];
$sttot = $_POST['sttot'];
$cred1 = $_POST['cred1'];
$cred2 = $_POST['cred2'];
$cred3 = $_POST['cred3'];
$credtot = $_POST['credtot'];
$deb1 = $_POST['deb1'];
$deb2 = $_POST['deb2'];
$deb3 = $_POST['deb3'];
$deb4 = $_POST['deb4'];
$debtot = $_POST['debtot'];
$dag1 = $_POST['dag1'];
$dag2 = $_POST['dag2'];
$dag3 = $_POST['dag3'];
$dag4 = $_POST['dag4'];
$dagtot = $_POST['dagtot'];
$g = $_POST['g'];
$h1 = $_POST['h1'];
$h2 = $_POST['h2'];
$i = $_POST['i'];
$j = $_POST['j'];
$k = $_POST['k'];
$l = $_POST['l'];
$m = $_POST['m'];

$bank1 = $_POST['bank1'];
$cc = $_POST['cc'];
$total=$_POST['tot1'];
 $sql = "update dpc set nps=$nps,debp=$debp,stock=$stock,cred=$cred,tps=$tps,mops=$mops ,dpA=$dpA,deb=$deb,mods=$mods,dpB=$dpB,tadp=$tadp,ls=$ls,aa='$aa',pst='$pst',dep='$dep',date1='$date1',stk1=$stk1,stk2=$stk2,stk3=$stk3,sttot=$sttot,cred1=$cred1,cred2=$cred2,cred3=$cred3,credtot=$credtot,deb1=$deb1,deb2=$deb2,deb3=$deb3,deb4=$deb4,debtot=$debtot,dag1=$dag1,dag2=$dag2,dag3=$dag3,dag4=$dag4,dagtot=$dagtot,g='$g',h1='$h1',h2='$h1',i='$i',j='$j',k='$k',l='$l',m='$m',bank='$bank1',cc=$cc,total=$total where sno = 1";

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
    <a href='main5a.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
    
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
    <a href='main5a.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
    
    </center>
          
          </body></html>
          ";
    
 }
?>
