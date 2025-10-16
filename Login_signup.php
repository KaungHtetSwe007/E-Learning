<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/home.js"></script>
      <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Sign in & Sign up Form</title>
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
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <!-- login start -->
          <form action="signin.php" class="sign-in-form" id="myLoginForm" method="post">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="lname" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id="password" name="lpass" />
              <i class="fas fa-eye" id="togglePassword"></i>
            </div>
            <a href="password_reset.php">Forget Password?</a>
            <input type="submit" value="Login" class="btn solid" name="signin_btn" />
         
          </form>
          <!-- login end -->

          <!-- sign up start -->
          <form action="signup.php" class="sign-up-form"  method="post">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="sname" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id="singuppass" name="spass" />
              <i class="fas fa-eye" id="togglePasswordSignup" ></i>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" id="scpass" name="scpass" />
              <i class="fas fa-eye" id="toggleCPasswordSignup"></i>
            </div>
            <input type="submit" class="btn" value="Sign up" name="signup_btn" />
          
          </form>
          <!-- sign up end -->

        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>MCY.</h3>
            <p>
               Our mission is to provide a one-stop, free,<br> non-profit way to learn computer science.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/mp3.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
               Our mission is to provide a one-stop, free,<br>  non-profit way to learn computer science.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/mp1.svg" class="image" alt="" />
        </div>
      </div>
    </div>

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
    <script src="js/app.js"></script>
  </body>
</html>
