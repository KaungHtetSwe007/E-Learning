<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="css/reviewstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
         .container button{
            border: none;
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
                        $sql="SELECT * FROM contact";
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
                        <div class="cardName">Contacts</div>
                    </div>

                    <div class="iconBx">
                        <i class="fa-solid fa-id-card"></i>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <table>

                        <thead>
                        <tr>
                            <td>Id</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>Ph-no</td>
                            <td>Message</td>
                            <td>Delete</td>
                        </tr>
                        </thead>
                         <?php  
                            while ($res=mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $res['id']?></td>
                            <td style="text-align: center;"><?php echo $res['first_name']?></td>
                            <td><?php echo $res['email']?></td>
                            <td><?php echo $res['ph_no']?></td>
                            <td class="m"><?php echo $res['message']?></td>
                            <td>
                                <button>
                                    <?php  
                                        echo "<a href='contactdelete.php?id={$res['id']}'>Delete</a>";
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