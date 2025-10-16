 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- search link  start-->
  <!-- instructor start -->
  
<link rel="stylesheet" type="text/css" href="css/ab.css">
<script src="js/home.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<style type="text/css">
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
  .ml .wrapper.two {
    font-size: 2.7rem;
    font-family: "Play", sans-serif;
}
.neon h3 {
  padding-top: 50px;
    margin-left: 137px;
    margin-bottom: -80px;
    animation: neon 1s ease infinite;
}
@keyframes neon {
    0%,
    100% {
        text-shadow: 0 0 10px #A4BED6, 0 0 20px #A4BED6, 0 0 20px #A4BED6, 0 0 20px #A4BED6, 0 0 2px #A4BED6, 2px 2px 2px #A4BED6;
        color: #3586ff;
    }
    50% {
        text-shadow: 0 0 2px #A4BED6, 0 0 5px #A4BED6, 0 0 5px #A4BED6, 0 0 5px #A4BED6, 0 0 2px #A4BED6, 4px 4px 2px #A4BED6;
        color: #3586ff;
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
    
    <li class="hideOnMobile"  style=" margin-left:270px;"><a href="home.php" class="nav_link">Home</a></li>

    <li class="hideOnMobile"><a href="usercontact.php" class="nav_link">Contact Us</a></li>
    <li class="hideOnMobile"><a href="aboutus.php" class="nav_link">About Us</a></li>
    <li class="hideOnMobile"> <a href="commentmain.php"class="nav_link">Reviews</a></li>
   
  <li class="hideOnMobile"></li>

  </ul>
  <ul>
</nav>
</header>

    <div class="ml">
<div class="wrapper two">
        <div class="neon">
            <h3>Million Chances For Youth</h3>
        </div>
</div>
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="flex">
                    
                    <h3>Discover Our Team's Story</h3>
                    <p>Welcome to our programming knowledge platform! We’re a passionate team of educators, developers, and tech enthusiasts who believe in empowering today’s youth with the skills they need to thrive in the digital world.</p>
                    <h3>Our Mission</h3>
                    <p>Our mission is simple: to make programming accessible, fun, and impactful. We know that learning to code can be intimidating, especially for beginners. That’s why we’ve created this platform—to break down complex concepts, demystify programming languages, and inspire the next generation of developers.</p>
                    
                </div>
                <div class="flex">
                    <img src="img/aboutUs-animate.svg" alt="">
                </div>
            </div>
        </div>   
    </div>
 <div>
   
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
    <li><a href="home.php">Home</a></li>
    <li><a href="usercontactus.php">Contactus</a></li>
    <li><a href="aboutus.php">Aboutus</a></li>
    <li><a href="commentmain.php">Review</a></li>
 
    
  </ul>
  <p>MCY. Online Learning | All Rights Reversed</p>
</footer>
</body>
</html>