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
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@600&display=swap"
      rel="stylesheet">
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
                <a href="admin.php">Welcome <span> <?php echo $_SESSION['admin_name'] ?> </span></a>
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
                        <h2 class="number">3</h2>
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
                        <h2 class="number">67</h2>
                        <p class="category">viewers</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                </div>
            </div>
            <div class="main-bottom">
                <div class="headings">
                    <h5> Course's Dashboard </h5>
                    <button class="viewBtn">View All </button>
                </div>
                <div class="bottom-content">
                    <table>
                        <tr>
                            <td>Courses available</td>
                            <td></td>
                            <td>Action's</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Women’s Course</td>
                            <td><button class="viewBtn1"><strong>Edit</strong> </button></td>
                            <td><button class="viewBtn2"><strong>Remove </strong></button></td>
                            <td><button class="viewBtn3"><strong>Delete<strong></button></td>
                        </tr>
                        <tr>
                            <td>Basic Course</td>
                            <td><button class="viewBtn1"><strong>Edit</strong> </button></td>
                            <td><button class="viewBtn2"><strong>Remove </strong></button></td>
                            <td><button class="viewBtn3"><strong>Delete<strong></button></td>
                        </tr>
                        <tr>
                            <td>Men’s Course</td>
                            <td><button class="viewBtn1"><strong>Edit</strong> </button></td>
                            <td><button class="viewBtn2"><strong>Remove </strong></button></td>
                            <td><button class="viewBtn3"><strong>Delete<strong></button></td>
                        </tr>                        
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Responsive Admin Dashboard Design by Raju Webdev -->
</body>

</html>
