
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
  font-size: 17px;
  padding-top: 33px;
  margin-left: 20px;
 
}
  .input-style{
 padding: 10px;
  border: 2px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  color: #555;
  outline: none;
  width: 50%;
}
.input-style:focus {
  border-color: #007bff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.animated-button {
  position: relative;
  display: inline-block;
  padding: 16px 32px;
  border: none;
  background-color: #2196F3;
  color: #fff;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600;
  cursor: pointer;
  border-radius: 8px;
  overflow: hidden;
  transition: all 0.8s cubic-bezier(0.23, 1, 0.320, 1);
  height: 50px;
  justify-content: center;
  text-align: center;
  align-items: center;
}

.animated-button:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 120%;
  height: 120%;
  background-color: #fff;
  opacity: 0;
  transition: all 0.8s cubic-bezier(0.23, 1, 0.320, 1);
}

.animated-button span {
  position: relative;
  z-index: 1;
}

.animated-button:hover {
  color: #2196F3;
  background-color: #fff;
  box-shadow: 0 0 20px hsla(263, 77%, 31%, 0);
}

.animated-button:active {
  scale: 0.9;
}

.animated-button:hover:before {
  transform: translate(-50%, -50%) rotate(45deg);
  opacity: 1;
}

.sub_title>#mcy{
  font-weight: 100;
  font-size: 18px;
  color: #3586ff;
}
.sub_title>#mcyl{
   font-weight: 200;
  font-size: 20px;
  color: #000;
}
#search{
  margin-top: 0%;
}
@media only screen and (max-width: 480px) {
  #search{
    text-align: center;
    justify-content: center;
    align-items: center;
    margin-top: 27%;
  }
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
    <a href="#">Python</a>
    <a href="#">C++</a>
    <a href="#">C#</a>
  </div>

    </li>
    <!-- dropdown end -->
    
    <li class="hideOnMobile"><a href="home.php" class="nav_link">Home</a></li>

    <li class="hideOnMobile"><a href="usercontact.php" class="nav_link">ContactUs</a></li>
    <li class="hideOnMobile"><a href="aboutus.php" class="nav_link">AboutUs</a></li>
    <li class="hideOnMobile"> <a href="commentmain.php"class="nav_link">Reviews</a></li>
    <li class="hideOnMobile"> <a href="mhome.php"class="nav_link">Language(MM)</a></li>
        
  <li class="hideOnMobile"><a href="amin.php" class="nav_link">Admin</a></li>

  </ul>
  <ul>
</nav>
</header>
<!-- header end -->

<!-- main content -->
<div class="main_page">
  <div>
    <p class="slogan" id="textContent">Million Chances For Youths</p>
    <p class="sub_title" id="tc1">We’re a nonprofit with the mission to provide a free,<br>world-class education for anyone, anywhere.</p><br> 
    <div class="for_mark"><img src="img/mk.png" width="20px" height="20px" class="mark"><p>Explore to achieve your next level of success</p></div> 
    <div class="for_mark"><img src="img/mk.png" width="20px" height="20px" class="mark"><p>Ignite your passion for programming</p></div> 
    <div class="for_mark"><img src="img/mk.png" width="20px" height="20px" class="mark"><p>Empower your programming journey</p></div> 
     <br>
    <button type="submit" class="sub_btn" id="btn" > <a href="Login_signup.php" onclick="openForm()">Sign In,Up</a></button><br><br>
  </div>

  <div class="image"><img src="img/mp3.svg" width="50%" height="400px"></div>
</div>

    <div id="search">
      <form action="search.php" method="post">
        <input type="text" name="st" class="input-style" placeholder="Enter file name you want to search">
        <button class="animated-button" type="submit" name="search"><span>Search</span></button>
      </form>
    </div>
<hr>
<br>
<!-- instructor start -->
<h2 class="instr_topic">Instructors<span> Profiles</span></h2>
<div class="swiper slide-container">
    <div class="slide-content">
      <div class="card-wrapper swiper-wrapper">

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
             <button class="button"><a href="5.php" style="text-decoration: none; color: white;">View More</a></button>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="img/ip4evo4.jpg" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>SimonThuta</h2>
            <p class="description">Python Teacher</p>
             <button class="button"><a href="4.php" style="text-decoration: none; color: white;">View More</a></button>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="img/ip1.jpg" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>Apna College</h2>
            <p class="description">Ex-Microsoft Software Engineer</p>
            <button class="button"><a href="1.php" style="text-decoration: none; color: white;">View More</a></button>
          </div>        
        </div>

        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="img/ip2.jpg" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>Mosh</h2>
            <p class="description">C++ Teacher</p>
             <button class="button"><a href="2.php" style="text-decoration: none; color: white;">View More</a></button>
          </div>
        </div>

        <div class="card swiper-slide">
          <div class="image-content">
            <span class="overlay"></span>
            <div class="card-image">
              <img src="img/ip3.jpg" alt="" class="card-img">
            </div>
          </div>
          <div class="card-content">
            <h2>SuperSimpleDev</h2>
            <p class="description">Javascript Teacher</p>
             <button class="button"><a href="3.php" style="text-decoration: none; color: white;">View More</a></button>
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
             <button class="button"><a href="6.php" style="text-decoration: none; color: white;">View More</a></button>
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
             <button class="button"><a href="7.php" style="text-decoration: none; color: white;">View More</a></button>
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
             <button class="button"><a href="8.php" style="text-decoration: none; color: white;">View More</a></button>
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
             <button class="button"><a href="9.php" style="text-decoration: none; color: white;">View More</a></button>
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
  <h2 class="main_topic">Main <span>Courses</span> </h2>
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

    <h1 class="heading">Popular<span> Courses</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="img/web-designing.jpg" alt="">
            <h3>PHP  </h3>
            <p>Hypertext Preprocessor (PHP) is an open-source, free server-side scripting language widely used in web development.</p>
            <a href="phpcourse.php" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="img/web-designing.jpg" alt="">
            <h3>Javascript  </h3>
            <p>JavaScript is a scripting language that enables you to create dynamically updating content.</p>
            <a href="javascript.php" class="btn">read more</a>
        </div>

        <div class="box">
            <img src="img/web-designing.jpg" alt="">
            <h3>HTML & CSS  </h3>
            <p>HTML is the standard markup language for creating Web pages· CSS is used to format the layout of a webpage.</p>
            <a href="htmlcss.php" class="btn">read more</a>
        </div>

       

    </div>

</div>

<!-- popular cours end -->
<!-- essential topics start -->
<h1>Essential  <span>Skills</span></h1><br>
  <div class="process-wrapper">
    <div id="progress-bar-container">
      <ul>
        <li class="step step01 active">
          <div class="step-inner">Coding</div>
        </li>

        <li class="step step02 ">
          <div class="step-inner">Relation</div>
        </li>

        <li class="step step03 ">
          <div class="step-inner">Analysis</div>
        </li>

        <li class="step step04 ">
          <div class="step-inner">Challenges</div>
        </li>

        <li class="step step05 ">
          <div class="step-inner">Adaptive</div>
        </li>
      </ul>
      <div id="line">
        <div id="line-process"></div>
      </div>
    </div>
    <div id="progress-content-section">
      <div class="section-content discovery active">
        <h2>MOST-WANTED TECHNICAL SKILLS & CODING LANGUAGES</h2>
        <p>
          Obviously, you won't get far as a programmer analyst if you don't have razor-sharp IT skills and mastery of today's most popular coding languages. A quality programming diploma will focus on the skillset you need to get your foot in the door and land your first position after college. The curriculum should be tailored to current industry needs—the technical skills companies want most in new hires right now.Hundreds of job postings across multiple sites show employers are looking for programmer analysts who can develop applications within the net framework.
        </p>
      </div>
      <div class="section-content strategy">
        <h2>COMMUNICATION & TEAMWORK</h2>
        <p>
          Programmer analysts don't work alone, producing and testing code in complete isolation. A key part of this job is figuring out the unique business needs of the organization you're working with, and then customizing systems and applications to fit those needs.This involves communicating with other departments and team members, presenting your recommendations, and in many cases, training users on new programs.You may also be responsible for helping users with any technical issues by answering questions, dealing with bugs, and following up on requests.
        </p>
      </div>
      <div class="section-content creative">
        <h2> ANALYSIS & PROBLEM SOLVING</h2>
        <p>
          Essentially, this is what you'll be doing all day at work. Programmer analysts assess client needs, research possible technical solutions, and then design and develop those systems and applications—solving problems that come up along the way.Quality assurance is an important part of this job as well. You'll be expected to thoroughly test any software you develop or modify, and take care of any bugs, before implementation.
        </p>
      </div>
      <div class="section-content production">
        <h2>UNDERSTANDING BUSINESS CHALLENGES AND GOALS</h2>
        <p>
          Programmer analysts work with IT services and consulting firms as well as large companies across various industries—including financial services, healthcare, education, media, and government. Their main goal is to help businesses and organizations run better by optimizing and customizing their computer systems and software.It's very helpful when programmer analysts understand the "language" of business—so when clients talk about their communication challenges, operational structure, and growth goals, the analyst can keep up, "talk the talk," and really understand those needs.
        </p>
      </div>
      <div class="section-content analysis">
        <h2>BEING ADAPTIVE AND A QUICK LEARNER</h2>
        <p>
          If there's one thing you can count on in IT, it's change. Just think about how far computer systems have come in the last 20 years...and what this field might look like, just a decade or two from now.Organizations are facing all kinds of system and software challenges; problems you'll be expected to adapt to and solve throughout your career.There are so many exciting areas to focus on for programmer analysts who can adapt quickly and are open to learning new skills. Businesses and organizations need your expertise to navigate the fast-changing, increasingly complex world of IT.
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
    <li><a href="home.php">Home</a></li>
    <li><a href="usercontactus.php">Contactus</a></li>
    <li><a href="aboutus.php">Aboutus</a></li>
    <li><a href="commentmain.php">Review</a></li>
    <li><a href="admin.php">Admin</a></li>
    
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
