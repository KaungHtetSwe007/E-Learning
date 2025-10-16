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
    <li class="hideOnMobile dropdown"><a href="#" class="nav_link dropdown_link" id="cos">သင်ခန်းစာများ<i class='bx bxs-chevron-down dropdown_icon'></i></a>
      <div class="dropdown-content">
    <a href="course.html">PHP</a>
    <a href="#">JavaScript</a>
    <a href="#">HTML & CSS</a>
    <a href="#">Logic</a>
    <a href="#">C++</a>
    <a href="#">Python</a>
    <a href="#">C#</a>
    <a href="#">Note.JS</a>
  </div>

    </li>
    <!-- dropdown end -->
    
    <li class="hideOnMobile" style=" margin-left:200px;"><a href="home.php" class="nav_link">ပင်မစာမျက်နှာ</a></li>

    <li class="hideOnMobile"><a href="usercontact.php" class="nav_link">ဆက်သွယ်ရန်</a></li>
    <li class="hideOnMobile"><a href="aboutus.php" class="nav_link">ဝက်ဘ်ဆိုဒ်အကြောင်း</a></li>
    <li class="hideOnMobile"> <a href="commentmain.php"class="nav_link">သုံးသပ်ချက်များ</a></li>

  </ul>
  <ul>
</nav>
</header>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <!-- login start -->
          <form action="signin.php" class="sign-in-form" id="myLoginForm" method="post">
            <h2 class="title">အကောင့်ဝင်ရန်</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="အသုံးပြုသူအမည်ထည့်ရန်" name="lname" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="လျှို့ဝှက်နံပါတ်ထည့်ရန်" id="password" name="lpass" />
              <i class="fas fa-eye" id="togglePassword"></i>
            </div>
            <input type="submit" value="အကောင့်ဝင်ရန်" class="btn solid" name="signin_btn" />
         
          </form>
          <!-- login end -->

          <!-- sign up start -->
          <form action="signup.php" class="sign-up-form"  method="post">
            <h2 class="title">အကောင့်ဖွင့်ရန်</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="အသုံးပြုသူအမည်ထည့်ရန်" name="sname" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="အီးမေးလ်ထည့်ရန်" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="လျှို့ဝှက်နံပါတ်ထည့်ရန်" id="singuppass" name="spass" />
              <i class="fas fa-eye" id="togglePasswordSignup" ></i>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="လျှို့ဝှက်နံပါတ်အတည်ပြုရန်" id="scpass" name="scpass" />
              <i class="fas fa-eye" id="toggleCPasswordSignup"></i>
            </div>
            <input type="submit" class="btn" value="အကောင့်ဖွင့်ရန်" name="signup_btn" />
          
          </form>
          <!-- sign up end -->

        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>MCY.</h3>
            <p>
              ကျွန်ုပ်တို့၏ရည်ရွယ်ချက်သည် အကျိုးအမြတ်မယူဘဲ <br>ကွန်ပျူတာ သိပ္ပံပညာရပ်များကို တစ်နေရာတည်းတွင်အခမဲ့ လေ့လာနိုင်စေရန်ဖြစ်သည်။
            </p>
            <button class="btn transparent" id="sign-up-btn">
              အကောင့်ဖွင့်ရန်
            </button>
          </div>
          <img src="img/mp3.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
             ကျွန်ုပ်တို့၏ရည်ရွယ်ချက်သည် အကျိုးအမြတ်မယူဘဲ <br> ကွန်ပျူတာ သိပ္ပံပညာရပ်များကို တစ်နေရာတည်းတွင်အခမဲ့ လေ့လာနိုင်စေရန်ဖြစ်သည်။
            </p>
            <button class="btn transparent" id="sign-in-btn">
              အကောင့်ဝင်ရန်
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
