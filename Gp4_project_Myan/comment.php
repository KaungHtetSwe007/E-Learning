<!DOCTYPE html>
<html>
<head>
	<title>Comments</title>
	<link rel="stylesheet" type="text/css" href="cstyle.css">
	<link rel="stylesheet" type="text/css" href="commenthome.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
    <li class="hideOnMobile">
    <div class="search">
    <input type="search" name="search" id="sec" required>
    <i class="fa fa-search"></i>
    <a href="javascript:void(0)" id="clear-btn" class="clear">Clear</a>
</div>
    </li>
    <li class="hideOnMobile"><a href="home.html" class="nav_link">Home</a></li>

    <li class="hideOnMobile"><a href="contact.html" class="nav_link">Contact Us</a></li>
    <li class="hideOnMobile"><a href="#" class="nav_link">About Us</a></li>
    <li class="hideOnMobile"> <a href="Login_signup.html"class="nav_link" onclick="openForm()">Sign In/Up</a></li>
    <li class="hideOnMobile">
        <label class="lan_label">Language</label>
        <select id="language-select">
          <option value="en" selected>🇺🇸</option>
          <option value="my"> 🇲🇲</option> 
      </select>
  </li>
  </ul>
  <ul>
</nav>
</header>

	<div class="container">
		<div class="box1">	
		<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
				  Add Comments
				</button>

				<!-- Modal -->
				<form action="cinsert.php" method="POST">
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Comment</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>

				      <div class="modal-body">

				      		<div class="form-group">
				        		<label for="f_name">Username</label><br>
				        		<input type="text" name="name">
				        	</div>
				        
				        	<div class="form-group">
				        		<label for="f_name">Comment</label><br>
				        		<textarea name="ta" placeholder="Enter your comment."></textarea>
				        	</div>
				       
				      </div>
				      
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        <input type="submit" class="btn btn-success" name="add" value="Add">
				      </div>
				    </div>
				  </div>
				</div>
			</form>
		</div>
		<div id="i1">
			<?php  
				$conn=mysqli_connect("localhost","root","","gp4_project");
				if (!$conn) {
					die("Doesn't connected".mysqli_error_no());
				}
				$sql="SELECT * FROM review";
				$result=mysqli_query($conn,$sql);
				if (!$result) {
					# code...
					die("Error".mysqli_error_no());
				}else{
					while ($res=mysqli_fetch_assoc($result)) {
			?>			
						<div class="c1">
						<div class="cc1">
							<img src="https://media.tenor.com/eiMqmu0vXz8AAAAi/kiss.gif"><br>
						<p class="p3"><?php echo $res['username']?></p>
						</div>
							<div class="f3">
								<p><?php echo $res['comment']?></p>
								<button>
									<?php  
										echo "<a href='reviewupdate.php?id={$res['id']}'>Update</a>";
									?>
								</button>
							</div>
						</div>

			<?php
					}
				}
			?>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>