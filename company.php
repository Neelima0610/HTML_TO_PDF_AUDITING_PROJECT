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
$dis = $_POST['dis'];
$cname1 = $_POST['cname1'];
$ofadd = $_POST['ofadd'];
$badd = $_POST['badd'];
$since = $_POST['since'];
$const = isset($_POST['const'])?$_POST['const']:"false";
$nob = $_POST['nob'];
$prod = $_POST['prod'];
$prod2 = $_POST['products2'];
$prod3 = $_POST['products3'];
$prod4 = $_POST['products4'];
$prod5 = $_POST['products5'];
$prod6 = $_POST['products6'];
$prod7 = $_POST['products7'];
$prod8 = $_POST['products8'];
$concern = $_POST['concern'];
$msup = $_POST['msupl'];
$msup2 = $_POST['msupl2'];
$msup3 = $_POST['msupl3'];
$msup4 = $_POST['msupl4'];
$msup5 = $_POST['msupl5'];
$msup6 = $_POST['msupl6'];
$msup7 = $_POST['msupl7'];
$msup8 = $_POST['msupl8'];
$mcust = $_POST['mcust'];
$mcust2 = $_POST['mcust2'];
$mcust3 = $_POST['mcust3'];
$mcust4 = $_POST['mcust4'];
$mcust5 = $_POST['mcust5'];
$mcust6 = $_POST['mcust6'];
$mcust7 = $_POST['mcust7'];
$mcust8 = $_POST['mcust8'];

$prop = $_POST['propr'];
//------------------------------
$cname = $_POST['cname'];
$address = $_POST['address'];
$acname = $_POST['acname'];
$date = $_POST['date'];
$dat = date_format(new DateTime($date),"d.F.Y");
//---------------------------------------------------------------------------
$sql = "update auditing set  cname = '$cname' , address = '$address' , acname = '$acname' , date = '$dat'  where sno=1";
$res = $conn->query($sql);
$sql = "update company_profile set cname = '$cname1' , ofaddress = '$ofadd' , baddress = '$badd' , since = '$since' , const = '$const' , nob = '$nob' , products = '$prod' , products2 = '$prod2' , products3 = '$prod3' , products4 = '$prod4' , products5 = '$prod5' , products6 = '$prod6' , products7 = '$prod7' , products8 = '$prod8' , concerns ='$concern' , msupl = '$msup' ,msupl = '$msup' ,msupl2 = '$msup2' ,msupl3 = '$msup3' ,msupl4 = '$msup4' ,msupl5 = '$msup5' ,msupl6 = '$msup6' ,msupl7 = '$msup7',msupl8 = '$msup8' , mcost = '$mcust' ,mcost2 = '$mcust2' ,mcost3 = '$mcust3' ,mcost4 = '$mcust4' ,mcost5 = '$mcust5' ,mcost6 = '$mcust6' ,mcost7 = '$mcust7' ,mcost8 = '$mcust8' , prop = '$prop',dis='$dis'  where sno = 1";

$res = $conn->query($sql);
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
    <a href='main3.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
    
    </center>
          
          </body></html>
          ";
    
}
 else
 {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
?>
