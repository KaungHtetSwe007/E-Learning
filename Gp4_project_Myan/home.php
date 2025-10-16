
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
  <link rel="stylesheet"  href="css/swiper-bundle.min.css">
  <link rel="stylesheet" type="text/css" href="css/instructor.css">
  <!-- instructor end -->
  <!-- essential topics start -->
    <link rel="stylesheet" type="text/css" href="css/tstyle.css">
  <!-- essential topics end -->

  <link rel="stylesheet" type="text/css" href="css/home.css">
  <script src="js/home.js">  
</script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<!-- popular courses css link -->
<link rel="stylesheet" type="text/css" href="css/instyle.css">
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
  font-size: 16px;
  padding-top: 33px;
  margin-left: 0px;
 
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
    
    <li class="hideOnMobile"><a href="home.php" class="nav_link">ပင်မစာမျက်နှာ</a></li>

    <li class="hideOnMobile"><a href="usercontactus.php" class="nav_link">ဆက်သွယ်ရန်</a></li>
    <li class="hideOnMobile"><a href="aboutus.php" class="nav_link" >ဝက်ဘ်ဆိုဒ်အကြောင်း</a></li>
    <li class="hideOnMobile"> <a href="commentmain.php"class="nav_link">သုံးသပ်ချက်များ</a></li>
    <li class="hideOnMobile"> <a href="mhome.php"class="nav_link">ဘာသာစကား(US)</a></li>
  <li class="hideOnMobile"><a href="amin.php" class="nav_link">အက်ဒမင်</a></li>

  </ul>
  <ul>
</nav>
</header>
<!-- header end -->

<!-- main content -->
<div class="main_page">
  <div>
    <p class="slogan" id="textContent">Million Chances For Youth!</p>
    <p class="sub_title" id="tc1">ကျွန်ုပ်တို့၏ရည်ရွယ်ချက်သည် အကျိုးအမြတ်မယူဘဲ ကွန်ပျူတာ သိပ္ပံပညာရပ်များကို တစ်နေရာတည်းတွင်အခမဲ့ လေ့လာနိုင်စေရန်ဖြစ်သည်။<br><br><span id="mcy">လူတိုင်းအတွက် <span id="mcyl">MCY.</span> ၊ နေရာတိုင်းအတွက် <span  id="mcyl">MCY.</span></span></p>
      <br><br>
    <div class="for_mark"><img src="img/mk.png" width="20px" height="20px" class="mark"><p>သင်၏ ပန်းတိုင်ကို အောင်မြင်အောင်လျောက်လှမ်းပါ။</p></div>
    <div class="for_mark"><img src="img/mk.png" width="20px" height="20px" class="mark"><p>စိတ်ဝင်တစားရှိစွာလေ့လာပါ။</p></div>
    <div class="for_mark"><img src="img/mk.png" width="20px" height="20px" class="mark"><p>သင်၏ပရိုဂရမ်းမင်းခရီးကိုခွန်အားအပြည့်ဖြင့် ရှေ့ဆက်သွားပါ။</p></div><br>
    

    <button type="submit" class="sub_btn" id="btn" > <a href="Login_signup.php">အကောင့်ဖွင့်/ဝင်ရန်</a></button>
  </div>

  <div class="image"><img src="img/mp3.svg" width="50%" height="400px"></div>
</div>

    <div id="search">
      <form action="search.php" method="post">
        <input type="text" name="st" class="input-style" placeholder="ရှာလိုသောသင်ခန်းစာ">
        <button class="animated-button" type="submit" name="search"><span>ရှာရန်</span></button>
      </form>
    </div>
<hr>
<br>
<!-- instructor start -->
<h2 class="instr_topic">သင်ကြားသူ<span class="color"> ပရိုဖိုင်</span></h2><br>
<div class="swiper slide-container">
    <div class="slide-content">
      <div class="card-wrapper swiper-wrapper">
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="https://yt3.googleusercontent.com/nhDLqeIgXMJBDIrX2bXavvHoWX0tsslDEh7k2xZ1P0W8b_CMRVigp2kxJubYEVwBcBlogZDe=s176-c-k-c0x00ffffff-no-rj" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>Apna College</h2>
            <p class="description">Ex-Microsoft Software Engineer</p>
            <button class="button"><a href="1.php" style="text-decoration: none; color: white;">ပိုမိုကြည့်ရှုရန်</a></button>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="data:image/jpeg;base64,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" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>Mosh</h2>
            <p class="description">C++ Teacher</p>
             <button class="button"><a href="2.php" style="text-decoration: none; color: white;">ပိုမိုကြည့်ရှုရန်</a></button>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="https://pbs.twimg.com/profile_images/1379973538212372481/d8l0V4Yo_400x400.jpg" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>SuperSimpleDev</h2>
            <p class="description">Javascript Teacher</p>
             <button class="button"><a href="3.php" style="text-decoration: none; color: white;">ပိုမိုကြည့်ရှုရန်</a></button>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="https://yt3.googleusercontent.com/BUYA5zaqDRFvaG94XtFr0rqWAN8je0nynBbuIITf9dk_Y8kT7UMEWLyzr9OJ4mQsMPExXo8DfHw=s176-c-k-c0x00ffffff-no-rj" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>SimonThuta</h2>
            <p class="description">Python Teacher</p>
            <button class="button"><a href="4.php" style="text-decoration: none; color: white;">ပိုမိုကြည့်ရှုရန်</a></button>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="https://yt3.googleusercontent.com/qfA_u7fOM5hjK0559x9sWOYbAY2PBGplzmLXMsc2uS1upElpYX_aXlOwZao4ztReTJlisLhpZg=s176-c-k-c0x00ffffff-no-rj" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>PL Myanmar</h2>
            <p class="description">Java Teacher</p>
             <button class="button"><a href="5.php" style="text-decoration: none; color: white;">ပိုမိုကြည့်ရှုရန်</a></button>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="https://yt3.googleusercontent.com/ytc/AIf8zZS0AozSPXKprRy1mF7t6bk579jwvGRe2BH4Wezm0A=s176-c-k-c0x00ffffff-no-rj" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>Dani Krossing</h2>
            <p class="description">PHP Teacher</p>
             <button class="button"><a href="6.php" style="text-decoration: none; color: white;">ပိုမိုကြည့်ရှုရန်</a></button>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="https://yt3.googleusercontent.com/ytc/AIf8zZTNiWLD2-Qw1eWFmRJkGBzfI-8oFNmYk5tBnpNurQ=s176-c-k-c0x00ffffff-no-rj" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>Harry</h2>
            <p class="description">Java Teacher</p>
             <button class="button"><a href="7.php" style="text-decoration: none; color: white;">ပိုမိုကြည့်ရှုရန်</a></button>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="https://yt3.googleusercontent.com/ytc/AIf8zZTkcyoXytE4Fyua9IUiqgdkLYpJAMhr9wCt2A3TZQ=s176-c-k-c0x00ffffff-no-rj" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>Daniel Liang</h2>
            <p class="description">Java Teacher</p>
             <button class="button"><a href="8.php" style="text-decoration: none; color: white;">ပိုမိုကြည့်ရှုရန်</a></button>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="https://yt3.googleusercontent.com/ytc/AIf8zZQJUhLAbfTEjP6QrFxNozUziJRiZL_v30aK2Xg1=s176-c-k-c0x00ffffff-no-rj" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>ProgrammingKnowledge</h2>
            <p class="description">Python Teacher</p>
             <button class="button"><a href="9.php" style="text-decoration: none; color: white;">ပိုမိုကြည့်ရှုရန်</a></button>
          </div>
        </div>
      </div>
    </div>

    <div class="swiper-button-next  swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
  </div>
<!-- instructor start -->
<!-- main courses start -->
  <h2 class="main_topic">အဓိက <span class="color">သင်ခန်းစာများ</span> </h2><br>
<div class="popular_topics">
  <div class="first_row">
    <div class="first_rowbox"><a href="phpcourse.php">PHP</a></div>
    <div class="first_rowbox"><a href="javascript.php">JavaScript</a></div>
    <div class="first_rowbox"><a href="htmlcss.php">HTML&CSS</a></div>
    <div class="first_rowbox"><a href="">Logic</a></div>
  </div>
  <div class="second_row">
    <div class="second_rowbox"><a href="">C++</a></div>
    <div class="second_rowbox"><a href="">Python</a></div>
    <div class="second_rowbox"><a href="">C#</a></div>
    <div class="second_rowbox"><a href="">Note.JS</a></div>
  </div>
</div>
<!-- main courses end -->

<!-- popular course start -->
<div class="container">

    <h1 class="heading"> လူကြိုက်များသော <span class="color"> သင်ခန်းစာများ</span></h1><br>

    <div class="box-container">

         <div class="box">
            <img src="img/web-designing.jpg" alt="">
            <h3>PHP </h3>
            <p>Hypertext Preprocessor (PHP) သည် web developmentတွင် ကျယ်ကျယ်ပြန့်ပြန့်အသုံးပြုသည့် ဘာသာစကားတစ်ခုဖြစ်သည်။</p>
            <a href="Gp4_project_Myan/phpcourse.php" class="btn">ပိုမိုလေ့လာရန်</a>
        </div>

        <div class="box">
            <img src="img/web-designing.jpg" alt="">
            <h3>Javascript  </h3>
            <p>JavaScript သည် dynamic updating အကြောင်းအရာကို ဖန်တီးနိုင်စေသော scripting language တစ်ခုဖြစ်သည်။</p>
            <a href="Gp4_project_Myan/javascript.php" class="btn">ပိုမိုလေ့လာရန်</a>
        </div>

        <div class="box">
            <img src="img/web-designing.jpg" alt="">
            <h3>HTML & CSS </h3>
            <p>HTML သည် web page ဖန်တီးရန်အတွက်  သတ်မှတ်ထားသော ဘာသာစကားဖြစ်သည်။ CSS ကို web pageတစ်ခု၏ အပြင်အဆင်ကို ပုံစံဖော်ရန် အသုံးပြုသည်။</p>
            <a href="Gp4_project_Myan/htmlcss.php" class="btn">ပိုမိုလေ့လာရန်</a>
        </div>

       

    </div>

</div>

<!-- popular cours end -->
<!-- essential topics start -->
<h1> မရှိမဖြစ်လိုအပ်သော  <span class="color">ကျွမ်းကျင်မှုများ</span></h1><br><br>
  <div class="process-wrapper">
    <div id="progress-bar-container">
      <ul>
        <li class="step step01 active">
          <div class="step-inner">ကုဒ်ရေးခြင်း</div>
        </li>

        <li class="step step02 ">
          <div class="step-inner">ဆက်ဆံရေးကောင်းခြင်း</div>
        </li>

        <li class="step step03 ">
          <div class="step-inner">ဆန်းစစ်နိုင်ခြင်း</div>
        </li>

        <li class="step step04 ">
          <div class="step-inner">စိန်ခေါ်မှုများ</div>
        </li>

        <li class="step step05 ">
          <div class="step-inner">လိုက်လျောညီထွေရှိခြင်း</div>
        </li>
      </ul>
      <div id="line">
        <div id="line-process"></div>
      </div>
    </div>
    <div id="progress-content-section">
      <div class="section-content discovery active">
        <h2>ခေတ်စားနေသော programming language များနှင့်လိုအပ်သည့်ကျွမ်းကျင်မှုများ</h2>
        <p>
          ရှင်းပါတယ်၊ အကယ်၍ သင့်မှာ ပြတ်သားတဲ့ IT ကျွမ်းကျင်မှုနဲ့ ယနေ့ခေတ်ရေပန်းအစားဆုံး coding language တွေကို ကျွမ်းကျင်မှုမရှိဘူးဆိုရင် ပရိုဂရမ်မာ ခွဲခြမ်းစိတ်ဖြာသူလောက်တော့ ရနိုင်မှာ မဟုတ်ပါဘူး။ အရည်အသွေးပြည့်မီသော ပရိုဂရမ်းမင်းဒီပလိုမာတစ်ခုသည် တံခါးပေါက်တွင် သင်၏ခြေရာကိုရရှိရန် လိုအပ်ပြီး ကောလိပ်ပြီးနောက် သင်၏ပထမရာထူးကို ရရှိရန် လိုအပ်သောကျွမ်းကျင်မှုအပေါ် အာရုံစိုက်မည်ဖြစ်သည်။ သင်ရိုးညွှန်းတမ်းသည် လက်ရှိစက်မှုလုပ်ငန်းလိုအပ်ချက်များနှင့် အံဝင်ခွင်ကျဖြစ်သင့်သည်—နည်းပညာဆိုင်ရာကျွမ်းကျင်မှုကုမ္ပဏီများသည် လက်ရှိအလုပ်ခန့်ထားမှုအသစ်တွင် အများစုအလိုရှိကြသည်။ ရာနှင့်ချီသောအလုပ်ရှင်များသည် net framework အတွင်း application များဖန်တီးနိုင်သည့်ပရိုဂရမ်မာလေ့လာဆန်းစစ်သူများကိုရှာဖွေနေကြောင်း ဆိုက်များစွာတွင်ဖော်ပြထားသည်။
        </p>
      </div>
      <div class="section-content strategy">
        <h2>လူမှုဆက်ဆံရေးကောင်းမွန်ခြင်းနှင့် အသင်းအဖွဲ့စိတ်ဓာတ်ရှိခြင်း</h2>
        <p>
          ရိုဂရမ်မာ ၊ခွဲခြမ်းစိတ်ဖြာသူများသည် တစ်ဦးတည်း အလုပ်မလုပ်သင့်ပါ၊ပြီးပြည့်စုံသော ကုဒ်‌ေရးသားခြင်းနဲ့နှင့် စမ်းသပ်ခြင်း မဟုတ်ပါ။ ဤအလုပ်၏ အဓိက အစိတ်အပိုင်းမှာ သင်လုပ်ကိုင်နေသော အဖွဲ့အစည်း၏ ထူးခြားသော လုပ်ငန်းလိုအပ်ချက်များကို ရှာဖွေခြင်းဖြစ်ပြီး ၎င်းလိုအပ်ချက်များနှင့် ကိုက်ညီစေရန် စနစ်များနှင့် အပလီကေးရှင်းများကို စိတ်ကြိုက်ပြင်ဆင်ခြင်း ဖြစ်သည်။ ၎င်းတွင် အခြားဌာနများနှင့် အဖွဲ့၀င်များနှင့် ဆက်သွယ်ခြင်း၊ သင်၏အကြံပြုချက်များကို တင်ပြခြင်းနှင့် များစွာသော လုပ်ငန်းများတွင် ပါဝင်ပါသည်။ ကိစ္စများတွင်၊ ပရိုဂရမ်အသစ်များအတွက် အသုံးပြုသူများကို လေ့ကျင့်ပေးခြင်း။ မေးခွန်းများဖြေကြားခြင်း၊ ချွတ်ယွင်းမှုများကို ကိုင်တွယ်ဖြေရှင်းခြင်းနှင့် တောင်းဆိုချက်များကို လိုက်နာခြင်းဖြင့် အသုံးပြုသူများအား မည်သည့်နည်းပညာဆိုင်ရာပြဿနာများကိုမဆို ကူညီဆောင်ရွက်ပေးရန် သင့်တွင် တာဝန်ရှိပါသည်။
        </p>
      </div>
      <div class="section-content creative">
        <h2>ပြဿနာများကို ခွဲခြမ်းစိတ်ဖြာနိုင်ခြင်းနှင့် ဖြေရှင်းနိုင်စွမ်းရှိခြင်း</h2>
        <p>
          တကယ်တော့ ဒါက မင်းအလုပ်မှာ တစ်နေ့လုံးလုပ်နေရမယ့်အရာပဲ။ ပရိုဂရမ်မာ ခွဲခြမ်းစိတ်ဖြာသူများသည် ဖောက်သည်များ၏ လိုအပ်ချက်များကို အကဲဖြတ်ကာ ဖြစ်နိုင်သည့် နည်းပညာဆိုင်ရာ ဖြေရှင်းချက်များကို သုတေသနပြုကာ အဆိုပါစနစ်များနှင့် အပလီကေးရှင်းများ—လမ်းကြောင်းတစ်လျှောက်တွင် ဖြစ်ပေါ်လာသည့် ပြဿနာများကို ဖြေရှင်းခြင်းတို့ကို ဒီဇိုင်းဆွဲကာ တီထွင်ကြသည်။ အရည်အသွေး အာမခံချက်သည် ဤအလုပ်၏ အရေးကြီးသော အစိတ်အပိုင်းတစ်ခုလည်းဖြစ်သည်။ အကောင်အထည်ဖော်ခြင်းမပြုမီ သင်သည် သင်တီထွင်သည့် သို့မဟုတ် ပြုပြင်မွမ်းမံထားသည့် မည်သည့်ဆော့ဖ်ဝဲလ်ကိုမဆို သေချာစွာစမ်းသပ်ရန် မျှော်လင့်ရပါလိမ့်မည်။
        </p>
      </div>
      <div class="section-content production">
        <h2>စီးပွားရေးဆိုင်ရာစိန်ခေါ်မှုများနှင့်ရည်မှန်းချက်များကို နားလည်နိုင်စွမ်းရှိခြင်း</h2>
        <p>
          ပရိုဂရမ်မာ ခွဲခြမ်းစိတ်ဖြာသူများသည် အိုင်တီဝန်ဆောင်မှုများ၊ အတိုင်ပင်ခံကုမ္ပဏီများအပြင် ဘဏ္ဍာရေးဝန်ဆောင်မှုများ၊ ကျန်းမာရေးစောင့်ရှောက်မှု၊ ပညာရေး၊ မီဒီယာနှင့် အစိုးရအပါအဝင် လုပ်ငန်းအမျိုးမျိုးရှိ ကုမ္ပဏီကြီးများနှင့် အလုပ်လုပ်ပါသည်။ ၎င်းတို့၏ အဓိက ရည်မှန်းချက်မှာ စီးပွားရေးလုပ်ငန်းများနှင့် အဖွဲ့အစည်းများအား ၎င်းတို့၏ ကွန်ပျူတာစနစ်များနှင့် ဆော့ဖ်ဝဲလ်များကို ပိုမိုကောင်းမွန်အောင် ချိန်ညှိခြင်းဖြင့် ပိုမိုကောင်းမွန်အောင် ကူညီပေးနိုင်ရန်ဖြစ်သည်။ ပရိုဂရမ်မာများ လေ့လာဆန်းစစ်သူများသည် လုပ်ငန်း၏ "ဘာသာစကား" ကို နားလည်သောအခါတွင် အလွန်အသုံးဝင်သည်—သို့ဖြစ်၍ ဖောက်သည်များသည် ၎င်းတို့၏ ဆက်သွယ်ရေးစိန်ခေါ်မှုများ၊ လုပ်ငန်းလည်ပတ်မှုပုံစံနှင့် တိုးတက်မှုပန်းတိုင်များအကြောင်း ပြောဆိုသောအခါတွင် အလွန်အသုံးဝင်ပါသည်။ အကဲခတ်သူသည် အဆက်မပြတ် “စကားပြော” နိုင်ပြီး ထိုလိုအပ်ချက်များကို အမှန်တကယ် နားလည်နိုင်သည်။
        </p>
      </div>
      <div class="section-content analysis">
        <h2>လိုက်လျောညီထွေနေနိုင်စွမ်းရှိခြင်း နှင့် လျင်မြန်စွာသင်ယူနိုင်စွမ်းရှိခြင်း</h2>
        <p>
         IT မှာ အားကိုးနိုင်တဲ့ အရာတစ်ခုရှိရင် အဲဒါက အပြောင်းအလဲပါပဲ။ လွန်ခဲ့သော အနှစ် 20 အတွင်း ကွန်ပျူတာစနစ်များ မည်မျှ ဝေးကွာလာသည်ကို တွေးကြည့်ရုံဖြင့် ... ဤနယ်ပယ်သည် မည်သို့သော ပုံသဏ္ဌာန်ရှိနိုင်သည်၊ ယခုမှ ဆယ်စုနှစ် သို့မဟုတ် နှစ်စုအတွင်းသာ ဖြစ်သည်။ အဖွဲ့အစည်းများသည် စနစ်နှင့် ဆော့ဖ်ဝဲလ်ဆိုင်ရာ စိန်ခေါ်မှု အမျိုးမျိုးကို ရင်ဆိုင်နေကြရပါသည်။ သင့်အသက်မွေးဝမ်းကြောင်းတစ်လျှောက်လုံးတွင် လိုက်လျောညီထွေဖြစ်အောင် ဖြေရှင်းနိုင်စေရန် မျှော်လင့်ရမည့်ပြဿနာများ။ လျင်မြန်စွာလိုက်လျောညီထွေဖြစ်စေနိုင်ပြီး ကျွမ်းကျင်မှုအသစ်များကို သင်ယူရန် ပွင့်လင်းသော ပရိုဂရမ်မာလေ့လာသုံးသပ်သူများအတွက် အာရုံစိုက်ရန် စိတ်လှုပ်ရှားဖွယ်ရာနယ်ပယ်များစွာရှိပါသည်။ စီးပွားရေးလုပ်ငန်းများနှင့် အဖွဲ့အစည်းများသည် လျင်မြန်စွာပြောင်းလဲနေသော၊ ပိုမိုရှုပ်ထွေးသော IT ကမ္ဘာကို လျှောက်လှမ်းရန်အတွက် သင်၏ကျွမ်းကျင်မှုများ လိုအပ်ပါသည်။
        </p>
      </div>
    </div>
  </div>
  <!-- essential topics end -->
<!-- main content end -->

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
    <li><a href="#">ပင်မစာမျက်နှာ</a></li>
    <li><a href="#">ဝက်ဘ်ဆိုဒ်အကြောင်း</a></li>
    <li><a href="#">သုံးသပ်ချက်များ</a></li>
    <li><a href="#">အက်ဒမင်</a></li>
    <li><a href="#"> ဆက်သွယ်ရန်</a></li>
  </ul>
  <p>MCY. Online Learning | All Rights Reversed</p>
</footer>
<!-- footer end -->

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

<!-- <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}</script>
<script src="app.js"></script> -->

<!-- instructor js link  start-->
<script type="text/javascript" src="js/swiper-bundle.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!-- instructor js link  start-->
<!-- essential topics start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/timeline.js"></script>
<!-- essential topics end  -->
</body>
</html>
