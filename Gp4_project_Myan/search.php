
<!DOCTYPE html>
<html>
<head>
	<title>Comments</title>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- search link  start-->
  <!-- instructor start -->
  <link rel="stylesheet" type="text/css" href="css/search.css">
  
<link rel="stylesheet" type="text/css" href="css/ab.css">
<script src="js/home.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<style type="text/css">
  #search{
    height: 400px;
    margin-top:60px;
  }
 
  .logo img{
    width: 100px;
    height: 110px;
    margin-left: -5px;
    margin-top: 10px;
    border-radius:0 0 50px 50px;
  }
  .hideOnMobile{
  margin: 1rem 4rem;
  padding: 1rem 0rem;
  font-size: 17px;
  padding-top: 33px;
  margin-left: 20px;
 
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
    <li class="hideOnMobile dropdown"><a href="#" class="nav_link dropdown_link" id="cos">သင်ခန်းစာများ<i class='bx bxs-chevron-down dropdown_icon'></i></a>
      <div class="dropdown-content">
    <a href="phpcourse.php">PHP</a>
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
   
    
    <li class="hideOnMobile"  style=" margin-left:100px;"><a href="home.php" class="nav_link">ပင်မစာမျက်နှာ</a></li>

    <li class="hideOnMobile"><a href="usercontactus.php" class="nav_link">ဆက်သွယ်ရန်</a></li>
    <li class="hideOnMobile"><a href="aboutus.php" class="nav_link">ဝက်ဘ်ဆိုဒ်အကြောင်း</a></li>
    <li class="hideOnMobile"> <a href="commentmain.php"class="nav_link">သုံးသပ်ချက်များ</a></li>


  </ul>
  <ul>
</nav>
</header>
<div class="container">
 <div class="box-container">
  <?php  
  
    $conn = mysqli_connect("localhost","root", "", "gp4_project");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['search'])) {
      $searchTerm = mysqli_real_escape_string($conn, $_POST['st']);
      $sql = "SELECT * FROM files WHERE name LIKE '%$searchTerm%' OR type LIKE '%$searchTerm%'";
      $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
       
        <div class="box">
            <img src="img/web-designing.jpg" alt="">
            <h3><?php echo $row['type'] ?></h3>
            <p><?php echo $row['name'] ?></p>
            <a href="download.php?file=<?php echo $row['file'] ?>">Download</a>
        </div>
    

        <?php
        }

    }
    else {
        echo "No results found.";
    }

    // Free result set
    mysqli_free_result($result);
  }
  mysqli_close($conn);
  ?>
  
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