<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | Dan Aleko</title>
  <link rel="stylesheet" href="css/amin.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" type="text/css" href="css/contact.css">
<script src="js/home.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<style type="text/css"></style>
<style type="text/css">
  .logo img{
    width: 100px;
    height: 110px;
    margin-left: -5px;
    margin-top: 10px;
    border-radius:0 0 50px 50px;
  }
  .input-box input:placeholder{
    color: black;
  }

</style>
</head>
<body>

  <header>
<nav>
  <div class="logo"><img src="img/6.png"></div>
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
   
    
    <li class="hideOnMobile"  style=" margin-left:300px;"><a href="home.php" class="nav_link">Home</a></li>

    <li class="hideOnMobile"><a href="usercontact.php" class="nav_link">Contact Us</a></li>
    <li class="hideOnMobile"><a href="aboutus.php" class="nav_link">About Us</a></li>
    <li class="hideOnMobile"> <a href="commentmain.php"class="nav_link">Reviews</a></li>


  </ul>
  <ul>
</nav>
</header>
<div id="bb">
  <div class="wrapper">
    <form action="admininsert.php" method="post">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" name="name" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="pass" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Option" name="opt" required>
        <i class='bx bxs-user'></i>
      </div>
      <button type="submit" name="submit" class="btn">Login</button>
    </form>
</div>
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
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">Team</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
  <p>MCY. Online Learning | All Rights Reversed</p>
</footer>
</body>
</html>