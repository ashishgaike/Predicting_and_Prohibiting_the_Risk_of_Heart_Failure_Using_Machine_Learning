<?php
@include '../signin_up/db_connection.php';
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
    <title>Admin Pannel | Doctors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@600&display=swap"
      rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./doctors.css">

    </head>

<header>
<div class="navigation">
    <a href="#" class="logo">
    BeSure<span class="span">.</span>
  </a>
        <div class="search">
            <h1 class="adminname"> Admin Panel | Courses</h1>
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
</header>

    <body>
    
        <div class="container">
        <span class="sidebar">
            <a href=""><li><span><i class="fa-solid fa-gauge"></i></span><a href="admin.php">Dashboard</a></li></a>
            <!-- <a href=""><li><span><i class="fa-solid fa-graduation-cap"></i></span><a href="course.php">Courses</a></li></a> -->
            <a href=""><li><span><i class="fa-solid fa-chalkboard-user"></i></span><a href="./display_appointment.php">Appointments</a></li></a>
            <a href=""><li><span><i class="fa-solid fa-people-group"></i></span><a href="doctors.php">Doctors</a></li></a>
            <!-- <a href=""><li><span><i class="fa-solid fa-chart-line"></i></span><a href="blogs.php">Blogs</a></li></a> -->
            <a href=""><li><span><i class="fa-sharp fa-solid fa-money-check-dollar"></i></span><a href="./earnings.php">Earnings</a></li></a>
            <a href=""><li><span><i class="fa-solid fa-gear"></i></span><a href="../InvoiceMg-PHP/dashboard.php">Invoice</a></li></a>
            <!-- <a href=""><li><span><i class="fa-solid fa-question"></i></span><a href="">Help</a></li></a> -->
    </span>
    
        <div class="btn">
            <button class = "add_btn"><a href="./add_course.php" >Add Course</a></button>
        </div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">S. No.</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql = "SELECT * FROM course";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $image = $row['image'];
        $title = $row['title'];
        $description = $row['description'];
        echo '<tr>
        <th scope="row">' . $id . '</th>
        <td>' . $image . '</td>
        <td>' . $title . '</td>
        <td>' . $descriptiom . '</td>
        <td>
            <button class = "add_btn"><a href="./update_doctor.php?updateid=' . $id . '">Update</a></button>
            <button class = "add_btn"><a href="./delete_doctor.php?deleteid=' . $id . '">Delete</a></button>
        </td>
      </tr>';
    }
}
?>

  </tbody>
</table>
</div>
    </body>
</html>
