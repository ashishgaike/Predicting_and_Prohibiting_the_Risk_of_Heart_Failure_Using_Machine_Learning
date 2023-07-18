<?php
@include 'db_connection.php';

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
    <link rel="stylesheet" href="admin.css">
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
            <a href=""><li><span><i class="fa-solid fa-graduation-cap"></i></span><a href="course.php">Courses</a></li></a>
            <a href=""><li><span><i class="fa-solid fa-chalkboard-user"></i></span><a href="appointments.php">Appointments</a></li></a>
            <a href=""><li><span><i class="fa-solid fa-people-group"></i></span><a href="doctors.php">Doctors</a></li></a>
            <a href=""><li><span><i class="fa-solid fa-chart-line"></i></span><a href="blogs.php">Blogs</a></li></a>
            <a href=""><li><span><i class="fa-sharp fa-solid fa-money-check-dollar"></i></span><a href="earnings.php">Earnings</a></li></a>
            <a href=""><li><span><i class="fa-solid fa-gear"></i></span><a href="">Settings</a></li></a>
            <a href=""><li><span><i class="fa-solid fa-question"></i></span><a href="">Help</a></li></a>
        </div>
        <div class="main">
            <div class="main-top">
                <div class="item">
                    <div class="content">
                        <h2 class="number">1224</h2>
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
                        <h2 class="number">67</h2>
                        <p class="category">Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                </div>
            </div>
            <div class="main-bottom">
                <div class="headings">
                    <h5> Recent Apppointments </h5>
                    <button class="viewBtn">View All </button>
                </div>
                <div class="bottom-content">
                    <table>
                        <tr>
                            <td>Appointee's Name</td>
                            <td>Doctor's Name</td>
                            <td>Date</td>
                            <td>Time</td>
                        </tr>
                        <tr>
                            <td>Manoj</td>
                            <td>Dr. ABC</td>
                            <td>27-04-2-23</td>
                            <td> <span class="done"> 10:00 AM </span> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> <span class="pending"></span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> <span class="pending"></span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> <span class="done"></span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Responsive Admin Dashboard Design by Raju Webdev -->
</body>

</html>
