<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/filestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--popupform-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!--popupform-->
   

    <style type="text/css">
        .tcolor{
            color: #3586ff;
        }
        .but button{
            background-color: #3586ff;
            color: white;
            border: none;
            width: 100px;
            height: 60px;
            border-radius: 10px;
            margin-left: 270%;
        }
        .but button:hover{
            background-color: rgba(0,0,0,0.2);
            color: #3586ff;
        }
        .container button{
            border: none;
        }

        .show-btn{
  background: #fff;
  padding: 10px 20px;
  font-size: 20px;
  font-weight: 500;
  color: #3498db;
  cursor: pointer;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  margin-left:30%;
  margin-top: -60px;
}
.show-btn, .container1{
  position: absolute;
  top: 50%;
  left: 50%;

}

input[type="checkbox"]{
  display: none;
}
.container1{
  display: none;
  background: #fff;
  width: 410px;
  padding: 30px;
  box-shadow: 0 0 8px rgba(0,0,0,0.7);
  margin-top: -80px;
  margin-left: -150px;
  z-index: 1000;
  border-radius: 30px;
}
#show:checked ~ .container1{
  display: block;
}
.container1 .close-btn{
  position: absolute;
  right: 20px;
  top: 15px;
  font-size: 18px;
  cursor: pointer;
}
.container1 .close-btn:hover{
  color: #3498db;
}
.container1 .text{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
}
.container1 form{
  margin-top: -20px;
  z-index: 1000;
}
.container1 form .data{
  height: 45px;
  width: 100%;
  margin: 40px 0;
}
form .data label{
  font-size: 18px;
}
form .data input{
  height: 100%;
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  border: 1px solid silver;
}
form .data input:focus{
  border-color: #3498db;
  border-bottom-width: 2px;
}
form .forgot-pass{
  margin-top: -8px;
}
form .forgot-pass a{
  color: #3498db;
  text-decoration: none;
}
form .forgot-pass a:hover{
  text-decoration: underline;
}
form .btn{
  margin: 30px 0;
  height: 45px;
  width: 100%;
  position: relative;
  overflow: hidden;
}
form .btn .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  z-index: -1;
 
  transition: all 0.4s;
}
form .btn:hover .inner{
  left: 0;
}
form .btn button{
  height: 100%;
  width: 100%;
  background: none;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
}
form .signup-link{
  text-align: center;
}
form .signup-link a{
  color: #3498db;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}
#but{
    margin-left: 20%;
}
</style>

</head>

<body>
    <!-- =============== Navigation ================ -->
      <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <span class="icon">
                            <i class="fa-solid fa-user-group"></i>
                        </span>
                        <span class="title">Million Chances For Youth</span>
                    </a>
                </li>

                <li>
                    <a href="files.php">
                        <span class="icon">
                            <i class="fa-solid fa-file-import"></i>
                        </span>
                        <span class="title">Files</span>
                    </a>
                </li>

                <li>
                    <a href="review.php">
                        <span class="icon">
                            <i class="fa-solid fa-message"></i>
                        </span>
                       
                        <span class="title">Review</span>
                    </a>
                </li>
                <li>
                    <a href="preview.php">
                        <span class="icon">
                            <i class="fa-regular fa-message"></i>
                        </span>
                       
                        <span class="title">Permit Review</span>
                    </a>
                </li>

                <li>
                    <a href="contact.php">
                        <span class="icon">
                            <i class="fa-solid fa-id-card"></i>
                        </span>
                        <span class="title">Contact</span>
                    </a>
                </li>

                <li>
                    <a href="account.php">
                         <span class="icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="title">Account</span>
                    </a>
                </li>

               
                <li>
                    <a href="adminlogout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>


        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
               
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                
                 <?php  
                        $conn=mysqli_connect("localhost","root","","gp4_project");
                         if (!$conn) {
                            die("Doesn't connected".mysqli_error_no());
                        }
                        $sql="SELECT * FROM files";
                        $result=mysqli_query($conn,$sql);
                        if (!$result) {
                             # code...
                            die("Error".mysqli_error_no());
                        }else{
                        $num=mysqli_num_rows($result);
                        ?>  
                <div class="card">
                    <div>
                        <div class="numbers"><?php echo $num;?></div>
                        <div class="cardName">Files</div>
                    </div>
                    <div class="iconBx">
                        <i class="fa-solid fa-file-import"></i>
                    </div>
                </div>


                <div id="but">
         <input type="checkbox" id="show">
         <label for="show" class="show-btn" style="border-radius: 10px; font-family: 'Poppins', sans-serif;">Add File</label>
         <div class="container1" >
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <div class="text">
               Add Files
            </div>
            <form action="phpbasicupload.php" method="post" enctype="multipart/form-data">
               <div class="data">
                  <label>Name</label>
                  <input type="text" name="name" required>
               </div>
               <div class="data">
                  <label>Type</label>
                  <input type="text" name="type" required>
               </div>
               <div class="data">
                  <label>File</label>
                  <input type="file" name="pdf" required>
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" name="submit" style="color: black; background-color:rgba(0,0,0,0.3); ">Upload</button>
               </div>
            </form>
         </div>
    </div>


               </div>


                


            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <table>

                        <thead>
                        <tr>
                            <td class="tcolor">Id</td>
                            <td class="tcolor">Name</td>
                            <td class="tcolor">File</td>
                            <td class="tcolor">Type</td>
                            <th class="tcolor">Delete</th>
                        </tr>
                        </thead>
                         <?php  
                            while ($res=mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $res['id']?></td>
                            <td style="text-align: center;"><?php echo $res['name']?></td>
                            <td><?php echo $res['file']?></td>
                            <td><?php echo $res['type']?></td>
                            <td>
                                <button>
                                    <?php  
                                        echo "<a href='filedelete.php?id={$res['id']}'>Delete</a>";
                                    ?>
                                </button>
                            </td>
                        </tr>
                    
                    <?php
                    }
                }
            ?>
            </table>
                </div>

                <!-- ================= New Customers ================ -->
                
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>