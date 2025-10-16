<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Your Page Title</title> 
  <!-- search link  start-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- search link  start-->
  <!-- instructor start -->
  
<link rel="stylesheet" type="text/css" href="css/com.css">
<script src="js/home.js"></script>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- comment start -->
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"rel="stylesheet"/>
    <link rel="stylesheet" href="css/comstyle.css"/>
    <!-- comment end -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== CSS ===============-->
        <style type="text/css">
          .card__details button{
             width: 100px;
    height: 40px;
    background-color: white;
    color: black;
    border-radius: 10px;
    border:none;
          }
          .card__details button:hover{
    background-color: #3586ff;
    color: white;
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
.card{
  margin-left: 70px;
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
    
  <li class="hideOnMobile"></li>

  </ul>
  <ul>
</nav>
</header>


<div class="header">
      <div class="container">
        <div class="container__left">
          <h1>ကျွန်ုပ်တို့ website နဲ့ပတ်သတ်ပီး userများရဲ့ အကြုံပြုချက်များ</h1>
          <p>
           ကျွန်ုပ်တို့၏ရည်ရွယ်ချက်သည် အကျိုးအမြတ်မယူဘဲ ကွန်ပျူတာ သိပ္ပံပညာရပ်များကို တစ်နေရာတည်းတွင်အခမဲ့ လေ့လာနိုင်စေရန်ဖြစ်သည်။
          </p>
          <p>
            သင်၏ ပန်းတိုင်ကို အောင်မြင်အောင်လျောက်လှမ်းပါ။
          </p>
          


          <div class="popup_form" >
             <section class="modal container">
            <button class="modal__button" id="open-modal" >
               သင့်အတွေးများကို မျှဝေပါ
            </button>

            <div class="modal__container" id="modal-container">
                <div class="modal__content">
                    <div class="modal__close close-modal" title="Close">
                        <i class='bx bx-x'></i>
                    </div>

                    <!-- <img src="assets/img/star-trophy.png" alt="" class="modal__img"> -->

                    <h1 class="modal__title">သင့်အတွေးများကို မျှဝေပါ</h1>
                    <form action="cinsert.php" method="post">
                   <div class="wave-group">
                    <input required="" type="text" class="input" name="name">
                    <span class="bar"></span>
                    <label class="label">
                    <span class="label-char" style="--index: 0">N</span>
                    <span class="label-char" style="--index: 1">a</span>
                    <span class="label-char" style="--index: 2">m</span>
                    <span class="label-char" style="--index: 3">e</span>
  </label>
</div><br><br>
                    <div class="wave-group">
                    <textarea class="input" required rows="3" cols="4" name="ta"></textarea>
                    <span class="bar"></span>
                    <label class="label">
                    <span class="label-char" style="--index: 0">c</span>
                    <span class="label-char" style="--index: 1">o</span>
                    <span class="label-char" style="--index: 2">m</span>
                    <span class="label-char" style="--index: 3">m</span>
                    <span class="label-char" style="--index: 3">e</span>
                    <span class="label-char" style="--index: 3">n</span>
                    <span class="label-char" style="--index: 3">t</span>
  </label>
</div><br><br>
                    <button class="modal__button modal__button-width" type="submit" name="add">
                        Submit
                    </button>
                    </form>
                    <!-- <button class="modal__button-link close-modal">
                        Close
                    </button> -->
                </div>
            </div>
        </section>
        </div>

        </div>
        <div class="container__right">

          <?php  
        $conn=mysqli_connect("localhost","root","","gp4_project");
        if (!$conn) {
          die("Doesn't connected".mysqli_error_no());
        }
        $sql="SELECT * FROM permitreview";
        $result=mysqli_query($conn,$sql);
        if (!$result) {
          # code...
          die("Error".mysqli_error_no());
        }else{
          while ($res=mysqli_fetch_assoc($result)) {
      ?>    
          <div class="card">
            <img src="img/pic-6.jpg" alt="user" />
            <div class="card__content">
              <span><i class="ri-double-quotes-l"></i></span>
              <div class="card__details">
                <p>
                  <?php echo $res['comment']?>
                </p>

                <h4>-<?php echo $res['username']?></h4>
                
              </div>
            </div>
          </div>
          <?php
          }
        }
      ?>
     
        </div>
      </div>
  </div>
<br><br><br>
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
    <li><a href="home.php">ပင်မစာမျက်နှာ</a></li>
    <li><a href="aboutus.php">ဝက်ဘ်ဆိုဒ်အကြောင်း</a></li>
    <li><a href="commentmain.php">သုံးသပ်ချက်များ</a></li>
 
    <li><a href="usercontactus.php">ဆက်သွယ်ရန်</a></li>
  </ul>
  <p>MCY. Online Learning | All Rights Reversed</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


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
   <script src="assets/assets/js/main.js"></script>
</body>
</html>