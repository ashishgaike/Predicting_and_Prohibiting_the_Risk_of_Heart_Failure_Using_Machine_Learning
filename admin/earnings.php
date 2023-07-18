<?php
@include 'db_connection.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:../signin_up/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Pannel | Earnings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./earnings.css">
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
            <a href=""><li><span><i class="fa-solid fa-gauge"></i></span><a href="./admin.php">Dashboard</a></li></a>
            <!-- <a href=""><li><span><i class="fa-solid fa-graduation-cap"></i></span><a href="course.php">Courses</a></li></a> -->
            <a href=""><li><span><i class="fa-solid fa-chalkboard-user"></i></span><a href="./display_appointment.php">Appointments</a></li></a>
            <a href=""><li><span><i class="fa-solid fa-people-group"></i></span><a href="./doctor.php">Doctors</a></li></a>
            <!-- <a href=""><li><span><i class="fa-solid fa-chart-line"></i></span><a href="blogs.php">Blogs</a></li></a> -->
            <a href=""><li><span><i class="fa-sharp fa-solid fa-money-check-dollar"></i></span><a href="earnings.php">Earnings</a></li></a>
            <a href=""><li><span><i class="fa-solid fa-gear"></i></span><a href="../InvoiceMg-PHP/dashboard.php">Invoice</a></li></a>
            <!-- <a href=""><li><span><i class="fa-solid fa-question"></i></span><a href="">Help</a></li></a> -->
        </div>




        <div class="main">
            <!-- Digital Invoice  -->
        <h3 class="headings txts" >Digital Invoice</h3>
            <br>
            <div class="main-top">
                <button class="item" onclick="window.location.href='invoicr-master/Primium course.php';">
                    <div class="content">
                        <a class="category" ><strong>Premium Subscription</strong></a>
                    </div>
                    <div class="icon">
                    <i class="fa-solid fa-crown"></i>
                    </div>
                </button>

                <button class="item" onclick="window.location.href='invoicr-master/Basic course.php';">
                    <div class="content">
                        <a class="category" ><strong>Basic Subscription</strong></a>
                    </div>
                    <div class="icon">
                    <i class="fa-solid fa-image-portrait"></i>
                    </div>
                </button>
                <button class="item" onclick="window.location.href='invoicr-master/Mens Course.php';">
                    <div class="content">
                        <a class="category" ><strong>Men course</strong></a>
                    </div>
                    <div class="icon">
                    <i class="fa-solid fa-person"></i>
                    </div>
                </button>
                <button class="item" onclick="window.location.href='invoicr-master/Woman Course.php';">
                    <div class="content">
                        <a class="category" ><strong>Woman course</strong></a>
                    </div>
                    <div class="icon">
                    <i class="fa-sharp fa-solid fa-person-dress"></i>
                    </div>
                </button>
            </div>
            <div class="main-bottom">
                <div class="headings">
                    <h5>Payment Details</h5>
                    <button class="viewBtn">View All </button>
                </div>
                <div class="bottom-content">
                    <table>
                        <tr>
                            <td>User Name</td>
                            <td>Date</td>
                            <td>Time</td>
                            <td>Payment Status</td>
                        </tr>
                        <tr>
                            <td>Ram</td>
                            <td>2023-05-01</td>
                            <td>10:00 AM </td>
                            <td> <span class="done" style="color:black">Successful</span> </td>
                        </tr>
                        <tr>
                            <td>Sham</td>
                            <td>2023-05-02</td>
                            <td>10:30 AM</td>
                            <td> <span class="pending">pending</span></td>
                        </tr>
                        <tr>
                            <td>Lakhan</td>
                            <td>2023-05-02</td>
                            <td>11:00 AM</td>
                            <td> <span class="pend"style="color:black">Failed</span></td>
                        </tr>
                        <tr>
                            <td>Sita</td>
                            <td>2023-05-05</td>
                            <td>10:00 PM</td>
                            <td> <span class="done">Successful</span></td>
                        </tr>
                    </table>
                </div>
            </div>











        </div>
    </section>

    
</body>

</html>
