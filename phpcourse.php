<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/course.css">
  <!-- search link  start-->
  <!-- instructor start -->
  
  <link rel="stylesheet" type="text/css" href="css/contact.css">
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
    <li class="hideOnMobile dropdown"><a href="#" class="nav_link dropdown_link" id="cos" >Courses<i class='bx bxs-chevron-down dropdown_icon'></i></a>
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
    
    <li class="hideOnMobile"><a href="home.php" class="nav_link"  style=" margin-left:250px;">Home</a></li>

    <li class="hideOnMobile"><a href="usercontact.php" class="nav_link">Contact Us</a></li>
    <li class="hideOnMobile"><a href="#" class="nav_link">About Us</a></li>
   <li class="hideOnMobile"> <a href="commentmain.php"class="nav_link">Reviews</a></li>
  </ul>
  <ul>
</nav>
</header>


    <center>
    <div class="bann">
        <div class="column1">
            <h1 style="color: #3586ff;">PHP Course</h1>
            <h1 style="color: #3586ff;"></h1>
            <p>Be Professionals in PHP Programming</p>
            <button><a href="Login_signup.php">JOIN</a></button>
        </div>
        <div class="column2">
            <img src="img/php-animate.svg" alt="" width="500px">
        </div>
    </div>

    <div class="container">
        <div class="card" style="background-color: #7ccef7;">
            <div class="imageBx">
                <img src="img/p1.png" alt="">
            </div>
            <div class="content">
                <div>
                    <h3>Level-1</h3>
                    <p>Level for Beginners.</p>
                    <button class="btn" style="margin-top: 40px;"><a href="phpbasic.php">More</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="card" style="background-color: #7ccef7;">
            <div class="imageBx">
                <img src="img/p2.png" alt="">
            </div>
            <div class="content">
                <div>
                    <h3>Level-2</h3>
                    <p>Level for Intermediate.</p>
                    <button class="btn" style="margin-top: 25px;"><a href="phpintermidiate.php">More</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="card" style="background-color: #7ccef7;">
            <div class="imageBx">
                <img src="img/p3.png" alt="">
            </div>
            <div class="content">
                <div>
                    <h3>Level-3</h3>
                    <p>Level for Advance.</p>
                    <button class="btn" style="margin-top: 40px;"><a href="phpadvance.php">More</a>
                    </button>
                </div>
            </div>
        </div>
    </div></center>

    <div class="foot">
    <!-- footer start -->
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
</footer></div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- For dropdown JS start-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bxslider/dist/jquery.bxslider.min.js"></script>
<script>
  $(document).ready(function(){
    // Toggle dropdown when clicking on the dropdown icon
    $('.dropdown_icon').click(function(){
      $('.dropdown-content').toggle();
    });

    // Close dropdown when clicking outside of it
    $(document).click(function(event) {
      var $target = $(event.target);
      if (!$target.closest('.dropdown').length) {
        $('.dropdown-content').hide();
      }
    });
  });
</script>
<!-- For dropdown JS end-->
</body>
</html>