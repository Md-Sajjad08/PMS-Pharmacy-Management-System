<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="login1.css">
<div class="header">
<h1>Pharmacy Management System</h1>
 <p style="margin-top:-20px;line-height:1;font-size:20px;">Department of Computer Science</p>
</div>
<title>
Pharmacia 
</title>
</head>

<body>
	<br><br><br><br>
	<!--<div class="container">-->
		<form method="post" action="">
			<!--<div id="div_login">-->
				<!--<h1>Admin Login</h1>
				<center>-->
				
				<div class="logo-top-right">
  <img src="logo4edi.png" class="logo-img" >
</div>

				<div style="text-align: right; margin-right: 3cm;">
				<div>
					<input type="text" style="width: 300px; height: 30px; padding: 5px; font-size: 16px;border-radius: 8px;margin-top:20px" class="textbox" id="uname" name="uname" placeholder="Username" />
				</div>
				<div style="margin: 10px 0;">
				<div>
					<input type="password" style="width: 300px; height: 30px; padding: 5px; font-size: 16px;border-radius: 8px;"class="textbox" id="pwd" name="pwd" placeholder="Password"/>
				</div>
				<div>
				<div style="margin: 10px 0;">
				<input type="submit" style="border-radius: 8px;"value="Submit" name="submit" id="submit" />
				<input type="submit" style="border-radius: 8px;"value="Click here for Pharmacist Login" name="psubmit" id="submit" />
			 
				
	<?php
				
		include "config.php";

		if(isset($_POST['submit'])){

			$uname = mysqli_real_escape_string($conn,$_POST['uname']);
			$password = mysqli_real_escape_string($conn,$_POST['pwd']);

			if ($uname != "" && $password != ""){

				$sql="SELECT e_id FROM emplogin WHERE e_username='$uname' AND e_pass='$password'";
				$result = $conn->query($sql);
				$row = $result->fetch_row();
				if(!$row) {
					echo "<p style='color:red;'>Invalid username or password!</p>";
				}
				else {
				
					$emp=$row[0];
					session_start();
					$_SESSION['user']=$emp;
					header("location:pharmmainpage.php");
				}
			}
		}
				
		if(isset($_POST['psubmit']))
		{
			header("location:mainpage.php");
		}
	?>

				</center> 
			</div>
		</form>
	</div>
	<div class=footer style="color:black;">
	<br>
	Developed by, sazzad and aadrita
	<br><br>
	</div>

</body>

</html>