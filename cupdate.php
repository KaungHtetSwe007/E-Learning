<!DOCTYPE html>
<html>
<head>
	<title>Comments</title>
	<link rel="stylesheet" type="text/css" href="cstyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- search link  start-->
  <!-- instructor start -->
  
<link rel="stylesheet" type="text/css" href="css/ab.css">
<script src="js/home.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- popular courses css link -->

</head>
<body>



  <header>
<nav>
  <div class="logo">MCY.</div>
  <div class="toggle_menu" id="toggle_menu">
    <i class='bx bx-menu'></i>
  </div>
  <ul class="nav_list" id="nav_menu">
    <div class="close_menu" id="close_menu"><i class='bx bx-x'></i></div>
     <!-- dropdown start -->
    <li class="hideOnMobile dropdown"><a href="#" class="nav_link dropdown_link" id="cos">Courses<i class='bx bxs-chevron-down dropdown_icon'></i></a>
      <div class="dropdown-content">
    <a href="phpcourse.html">PHP</a>
    <a href="javascript.php">JavaScript</a>
    <a href="htmlcss.php">HTML & CSS</a>
    <a href="#">Logic</a>
    <a href="#">C++</a>
    <a href="#">Python</a>
    <a href="#">C#</a>
    <a href="#">Note.JS</a>
  </div>

    </li>
    <!-- dropdown end -->
    
    <li class="hideOnMobile"  style=" margin-left:110px;"><a href="home.php" class="nav_link">Home</a></li>

    <li class="hideOnMobile"><a href="usercontact.php" class="nav_link">Contact Us</a></li>
    <li class="hideOnMobile"><a href="aboutus.php" class="nav_link">About Us</a></li>
    <li class="hideOnMobile"> <a href="commentmain.php"class="nav_link">Reviews</a></li>
    <li class="hideOnMobile">
        <label class="lan_label">Language</label>
        <select id="language-select">
          <option value="en" selected>🇺🇸</option>
          <option value="my"> 🇲🇲</option> 
      </select>
  </li>
  <li class="hideOnMobile"></li>

  </ul>
  <ul>
</nav>
</header>

	<div class="container">
	<div class="box1">
	</div>
	
	<form action="" method="GET">
		<center>
		<table>
			<tr id="t">
				<td colspan="2" align="center"><h2>Update Form</h2></td>
			</tr>
				<input type="hidden" name="id" value="<?php echo $no['id']?>">
			<tr id="t2">
				<td>Update comments</td>
				<td><textarea name="ta" value="<?php echo $no['comments']?>"></textarea></td>
			</tr>
			<tr id="t3">
				<td colspan="2" align="center"><button type="submit" name="update">Update</button></td>
			</tr>
		</table>
		</center>
		</form>
		</div>

		<footer>
  <div class="waves">
    <div class="wave" id="wave1"></div>
    <div class="wave" id="wave2"></div>
    <div class="wave" id="wave3"></div>
    <div class="wave" id="wave4"></div>
  </div>
  <ul class="social_icon">
    <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
    <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
    <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
    <li><a href="#"><ion-icon name="call-outline"></ion-icon></a></li>
  </ul>
  <ul class="menu">
    <li><a href="home.html">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Team</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
  <p>MCY. Online Learning | All Rights Reversed</p>
</footer>


</body>
</html>