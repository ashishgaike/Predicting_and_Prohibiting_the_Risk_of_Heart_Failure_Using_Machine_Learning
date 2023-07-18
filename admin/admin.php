<?php
$conn = mysqli_connect('localhost','root','','subscriptionModel');
session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:../signin_up/login.php'); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Pannel </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./admin.css">
</head>

<body>
    <div class="navigation">
    <a href="#" class="logo">
    BeSure<span class="span">.</span>
  </a>
        <div class="search">
            <h1 class="adminname"> Admin Control Panel </h1> 
        </div>
        <div class="users">
            <!-- <i class="fa-solid fa-bell"></i> -->

            <button class="dropdown">
            <i class="fa-solid fa-user"></i>
            <div class="dropdown-content">
                <a href="#">Welcome <span> <?php echo $_SESSION['admin_name'] ?> </span></a>
                <a href="../signin_up/logout.php">Sign Out</a>
            </div>
    
            </button>

        </div>
        <a class="admname hero-subtitle" href="#"><h3>Welcome, <span> <?php echo $_SESSION['admin_name'] ?> </span></h3></a>  
    </div>
    <section class="container">
        <div class="sidebar">
            <a href=""><li><span><i class="fa-solid fa-gauge"></i></span><a href="admin.php">Dashboard</a></li></a>
            <!-- <a href=""><li><span><i class="fa-solid fa-graduation-cap"></i></span><a href="course.php">Courses</a></li></a> -->
            <a href=""><li><span><i class="fa-solid fa-chalkboard-user"></i></span><a href="./display_appointment.php">Appointments</a></li></a>
            <a href=""><li><span><i class="fa-solid fa-people-group"></i></span><a href="./doctor.php">Doctors</a></li></a>
            <!-- <a href=""><li><span><i class="fa-solid fa-chart-line"></i></span><a href="blogs.php">Blogs</a></li></a> -->
            <a href=""><li><span><i class="fa-sharp fa-solid fa-money-check-dollar"></i></span><a href="./filnel/BE_MajorProjectedit/InvoiceMg-PHP/index.php">Earnings</a></li></a>
            <a href=""><li><span><i class="fa-solid fa-gear"></i></span><a href="../InvoiceMg-PHP/dashboard.php">Invoice</a></li></a>
            <!-- <a href=""><li><span><i class="fa-solid fa-question"></i></span><a href="">Help</a></li></a> -->
        </div>

        


        <div class="main">
            <!-- appointments  -->
        <h3 class="headings txts" >Admin Pannel</h3>
            <br>
            <div class="main-top">
            <?php 
                    $admin = "SELECT * FROM registration WHERE acc_type = 'admin'";
                    $sql = mysqli_query($conn, $admin);
                    $total_admin= mysqli_num_rows($sql);
                ?>
                <div class="item">
                    <div class="content">
                        <h2 class="number"><?php echo $total_admin; ?></h2>
                        <p class="category">Total Admins</p>
                    </div>
                    <div class="icon">
                            <i class="fa-solid fa-user-tie"></i>
                    </div>
                </div>

                <?php 
                    $subscriber = "SELECT * FROM registration WHERE acc_type = 'admin'";
                    $sql = mysqli_query($conn, $subscriber);
                    $total_subscriber= mysqli_num_rows($sql);
                ?>
                <div class="item">
                    <div class="content">
                        <h2 class="number"><?php echo $total_subscriber; ?></h2>
                        <p class="category">Subscribers</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                </div>

                <?php 

                    //ADDING NEW VISITORS
                    $visitor_ip = $_SERVER['REMOTE_ADDR'];

                    //CHECKING IF VISITOR IS UNIQUE
                    $query = "SELECT * FROM counter WHERE ip_address='$visitor_ip'" ;
                    $result = mysqli_query($conn, $query);

                    if(!$result){
                        die("Retriving Query Error <br>" .$query);
                    }
                    $total_visitors= mysqli_num_rows($result);
                    if ($total_visitors<1){
                        $query = "INSERT INTO counter (ip_address) VALUES('$visitor_ip')" ;
                        $result = mysqli_query($conn, $query);
                    }

                    $query = "SELECT * FROM counter";
                    $result = mysqli_query($conn, $query);

                    if(!$result){
                        die("Retriving Query Error <br>" .$query);
                    }
                    $total_visitors= mysqli_num_rows($result);
                ?>
                <div class="item">
                    <div class="content">
                        <h2 class="number"><?php echo $total_visitors; ?></h2>
                        <p class="category">Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <h2 class="number">₹ 100</h2>
                        <p class="category">Earnings</p>
                    </div>
                    <div class="icon">
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                    </div>
                </div>
            </div>
            
            <!-- courses -->
            <h3 class="headings txts" >Courses</h3>
            <br>
            <div class="main-top">
            <?php 
                    $course = "SELECT * FROM course";
                    $sql3 = mysqli_query($conn, $course);
                    $total_course= mysqli_num_rows($sql3);
                ?>
                <div class="item">
                    <div class="content">
                        <h2 class="number"><?php echo $total_course; ?></h2>
                        <p class="category">Total Course</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <h2 class="number">42</h2>
                        <p class="category">Subscribers</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <h2 class="number"><?php echo $total_visitors; ?></h2>
                        <p class="category">Viewers </p>
                    </div>
                    <div class="icon">
                            <i class="fa-solid fa-eye"></i>
                    </div>
                </div>
            </div>


            <!-- appointments  -->
            <h3 class="headings txts" >Appointments</h3>
            <br>
            <div class="main-top">
            <?php 
                    $appointment = "SELECT * FROM appointment ";
                    $sql1 = mysqli_query($conn, $appointment);
                    $total_appointment= mysqli_num_rows($sql1);
                ?>
                <div class="item">
                    <div class="content">
                        <h2 class="number"><?php echo $total_appointment; ?></h2>
                        <p class="category">Total Appointments</p>
                    </div>
                    <div class="icon">
                    <i class="fa-regular fa-calendar-check"></i>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <h2 class="number">42</h2>
                        <p class="category">In Watting</p>
                    </div>
                    <div class="icon">
                    <i class="fa-solid fa-file-word"></i>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <h2 class="number"><?php echo $total_visitors; ?></h2>
                        <p class="category">Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                </div>
            </div>

            <!-- Doctor's -->
            <h3 class="headings txts" >Doctor's</h3>
            <br>
            <div class="main-top">
            <?php 
                    $doctor = "SELECT * FROM doctor ";
                    $sql2 = mysqli_query($conn, $doctor);
                    $total_doctor = mysqli_num_rows($sql2);
                ?>
                <div class="item">
                    <div class="content">
                        <h2 class="number"><?php echo $total_doctor; ?></h2>
                        <p class="category">Total Doctors</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                </div>


                <div class="item">
                    <div class="content">
                        <h2 class="number">42</h2>
                        <p class="category">Available</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-user-doctor"></i>
                    </div>
                </div>
            </div>


            <!-- blogs's -->
            <h3 class="headings txts" >Blogs's</h3>
            <br>
            <div class="main-top">
                <div class="item">
                    <div class="content">
                        <h2 class="number">1224</h2>
                        <p class="category">Total blogs</p>
                    </div>
                    <div class="icon">
                    <i class="fa-solid fa-blog"></i>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <h2 class="number">42</h2>
                        <p class="category">Live Blog</p>
                    </div>
                    <div class="icon">
                    <i class="fa-solid fa-square-rss"></i>
                    </div>
                </div>
            </div>

            









        </div>
    </section>

    
</body>

</html>
