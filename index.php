<?php


    

error_reporting (E_ALL ^ E_NOTICE); 
session_start(); 
$userID = $_SESSION['userID'];  
$username = $_SESSION['username']; 
$databaseTitle = $_SESSION['title']; 
$databaseUserType = $_SESSION['userType']; 
$datebasePatientFlag = $_SESSION['patientFlag']; 
?>
<!DOCTYPE html>
<html>
<head> 
	<title>Organ Donation</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css"/>
</head>
<body>
<div id="nav">
    <div id="nav_wrapper">
        <ul>
			<li><a href="index.php"><img src = "images/heartandhandsicon.jpg" width = "40" height = "40" alt = "heart and hands"  /></a></li>
            <li><a href="index.php">Home</a></li>
            <li> <a href="about.php">About Us</a></li>
            <li> <a href="faq.php">FAQ</a></li>
			<?php 
			if(!$userID)
			{
			echo "<li> <a href='register.php'>Register</a>"; 
				echo "<ul>"; 
					echo "<li><a href='register.php'>Donor/Recipient</a></li>"; 
					echo "<li><a href='staffregister.php'>Doctor/Staff</a></li>"; 
                echo "</ul>"; 
			}
			?>
            <li> <a href="profile.php">Account</a>
                <ul>
				<?php
					if(!$username)
						echo "<li><a href='login.php'>Login</a></li>"; 
					else
						echo "<li><a href ='profile.php'>{$username}'s Profile</a></li>";
					?>
				<?php
					if($userID && $databaseUserType != "0") 
					{ echo "<li><a href='reports.php'>Reports</a></li>"; 
					}
					if($userID && ($databaseUserType == "1"))
					{
						echo "<li><a href='matching.php'>Matching</a></li>";
					}
					?>
					<?php
					if($userID && ($databaseUserType == "2"))
					{?>
					<li><a href="scheduler.php">Scheduler</a></li>
					<?php
					}
					?>
					<?php
					if($userID)
					{ ?>
						<li><a href='POA_Management.php'>Power Of Attorney Management</a></li>
						<li><a href='logout.php'>Logout</a></li> 
					<?php }
					?>
                </ul>
            </li>
			<?php
				if($userID)
				{
					echo "<li> <a href='profile.php'>Hello, {$username}</a>"; 
				}
			?>
        </ul>
    </div>
    <!-- Nav wrapper end -->
</div>
<!-- Nav end -->
	<p>&nbsp;</p> 
	<div class = "priority" align = "center">
		<h2 class="title"><font face= "Brush Script MT" size = 13px>About Us</font></h2>
		<img src = "images/nurse.jpg" width = "519px" height = "330px" alt = "Nurse" />
		<p> In 1970, Teresa Anderson began her education at Tulane University to study nursing. Years after her graduation she would go on to work for Charity Hospital in New Orleans. Her kindness and passion for caring for others would make her a natural in her field. Eventually she would go on to create her own catholic health practice and decided to create her own private organ donation center. She would name it, St. Teresa's, not after herself but after her grandmother who was a catholic nun. With the success and growth she recieved over the years, she took her practice to Houston and futher expanded her organ donation center, giving care to those who need it most. <br> We are located in the medical center in Houston and are here to assist those in need of donating and recieving needed organs. We work with the best medical professionals to ensure that our donor patients give to those in need and our recipients are taken care of and enjoy life with their new organ. You can join our community by clicking on the registration tab for donors and recipients. Thank You.</p>
		<p>&nbsp;</p> 
	</div>
	<footer>
		<a href = "https://www.facebook.com/st.teresasorgandonation/?skip_nax_wizard=true" ><img src = "images/facebook-icon.png" width = "48" height = "48" alt = "facebook" /> </a>
		<p> Follow us on Facebook :)<br> </p>
	<footer>
</body>
</html>

