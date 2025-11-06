<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="login1.css">
<head>
<div class="header">
	<!--<img src="logo1R.png" alt="Logo" style="height:40px; vertical-align:middle;">-->
  <h1>Pharmacy Management System</h1>
 
 <p style="margin-top:-20px;line-height:1;font-size:20px;">Department of Computer Science</p>
</div>
<title>
Pharmacy Management System 
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
  <img src="logo4edi.png" class="logo-img">
</div>

				<h1 class="seva-brand">
					
					<div class="seva-text">
					<span class="seva-word">SEVA</span>
					<span class="pharma-word"style="font-size: 32px;">PHARMA</span>
					</div>
				</h1>
					<!--<img src="logo.png" alt="Logo" class="logo">*/-->
					<!--<p style="text-align:right; font-size:30px; color:#003366; margin-right:5cm; margin-top: -80px;border-radius: 8px;"><img src="logo1R.png" style="height:30px; vertical-align:middle;">SEVA PHARMA</p>-->

				<hr style="width: 300px; float: right; margin-right: 3.2cm; margin-top: -35px;border: 0.2px solid #0f3460;">  <!--line-->
				<p style="font-family: 'Georgia';text-align: right; margin-right: 4cm; margin-top: -30px; font-size: 16px; color:rgb(64, 69, 73);">
              PHARMA  AGENCY  SOFTWARE
        </p>


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
		
					$sql="SELECT * FROM admin WHERE a_username='$uname' AND a_password='$password'";
					$result = $conn->query($sql);
					$row = $result->fetch_row();
					if(!$row) {
						echo "<p style='color:red;'>Invalid username or password!</p>";
					}
					else {
						session_start();
						$_SESSION['user']=$uname;
						header('location:adminmainpage.php');
					}
				}
			}
				
		if(isset($_POST['psubmit']))
		{
			header("location:mainpage1.php");
		}
	?>
			
				</div>
				</center>
			</div>
		</form>
	</div>

	<div class=footer style="color:black;">
	<br>
	@ Developed by Sazzad & Aadrita 
	<br><br>
	</div>
	
</body>

</html>