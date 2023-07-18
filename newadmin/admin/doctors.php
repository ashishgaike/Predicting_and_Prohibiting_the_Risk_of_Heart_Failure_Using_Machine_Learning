<?php
@include './signin_up/db_connection.php';

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
    <link rel="stylesheet" href="./doctors.css">
    
    </head>




    <body>
        <div class="container">

      
        <div class="btn">
            <button class = "add_btn"><a href="./add_doctor.php" >Add Doctor</a></button>
        </div>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">S. No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Department</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sql = "SELECT * FROM doctor";
  $result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $department = $row['department'];
        $pnum = $row['pnum'];
        $address = $row['address'];
        echo '<tr>
        <th scope="row">' . $id . '</th>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $department . '</td>
        <td>' . $pnum . '</td>
        <td>' . $address . '</td>
        <td>
            <button class = "add_btn"><a href="./update_doctor.php?updateid=' . $id . '">Update</a></button>
            <button class = "table_btn"><a href="./delete_doctor.php?deleteid=' . $id . '">Delete</a></button>
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
