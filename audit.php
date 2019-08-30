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

	$pno1 = $_POST['pno1'];
	$pno2 = $_POST['pno2'];
	$pno3 = $_POST['pno3'];
	$pno4 = $_POST['pno4'];
	$pno5 = $_POST['pno5'];
	$pno6 = $_POST['pno6'];
	$pno7 = $_POST['pno7'];
	$pno8 = $_POST['pno8'];
	$pno9 = $_POST['pno9'];
	$sno = 1;


	$sql = "update auditing set pageno1 = $pno1 ,  pageno2 = $pno2, pageno3 = $pno3, pageno4 = $pno4, pageno5 = $pno5, pageno6 = $pno6, pageno7 = $pno7, pageno8 = $pno8, pageno9 = $pno9 where sno=1";

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
		<a href='aud.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
		
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
		<a href='aud.html' style='text-decoration:none;color:black;'><button class='button button2' >NEXT PAGE</button></a>
		
		</center>
			  
			  </body></html>
			  ";
		
	 }
	?>
