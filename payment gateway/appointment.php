<?php
@include '../signin_up/db_connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $department = $_POST['department'];
    $cardiologist = $_POST['cardiologist'];
    $nutritionist = $_POST['nutritionist'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $reason = $_POST['reason'];

    if ($name != "" && $email != "" && $address != "" && $city != "" && $state != "" && $zip_code != "" && $department != "" && $date != "" && $time != "" && $reason != "") {
      if($department == "cardiologist"){
        $insert = "INSERT INTO appointment(name, email, address, city, state, zip_code, department, cardiologist,  date, time, reason) values('$name', '$email', '$address', '$city', '$state', '$zip_code', '$department', '$cardiologist', '$date', '$time', '$reason')";
        $query = mysqli_query($conn, $insert);
        echo "Inserted in cardio";
        header('location: checkout.php');
      }
      else{
        $insert1 = "INSERT INTO appointment(name, email, address, city, state, zip_code, department, cardiologist,  date, time, reason) values('$name', '$email', '$address', '$city', '$state', '$zip_code', '$department', '$cardiologist', '$date', '$time', '$reason')";
        $query1 = mysqli_query($conn, $insert1);
        echo "Inserted in nutri";
        header('location: checkout.php');
      }
    } else {
        $error[] = 'Please fill all the fields';
    }
    ;
}
;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="D:\BE_MajorProject\images\TitleLogo.png"
      type="image/svg+xml">

    <link rel="stylesheet" href="../navBar/nav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@600&display=swap"
      rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/appointment.css">



</head>

<header class="header">

  <a href="#" class="logo">
    BeSure<span class="span">.</span>
  </a>

  <nav class="navbar" data-navbar>


    <ul class="navbar-list">

      <li class="navbar-item">
        <a href="#home" class="navbar-link" data-nav-link>Home</a>
      </li>

      <li class="navbar-item">
        <a href="#about" class="navbar-link" data-nav-link>About Us</a>
      </li>

      <li class="navbar-item">
        <a href="#course" class="navbar-link" data-nav-link>All Course</a>
      </li>

      <li class="navbar-item">
        <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
      </li>

      <li class="navbar-item">
        <a href="#" class="navbar-link" data-nav-link>Contact</a>
      </li>

    </ul>

  </nav>
</header>

<body>

<div class="container">

    <form action="" method="POST">

    <?php
if (isset($error)) {
    foreach ($error as $error) {
        echo '<span class="error-mssg">' . $error . '</span>';
    }
    ;
}
;
?>

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="name" placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" placeholder="mumbai">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="state" placeholder="india">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="zip_code" placeholder="123 456">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">appointment details</h3>

                <!--<div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>-->
                <div class="inputBox">
                <label for="department">Choose Deparment</label>
					      <select required id="deparment" name="department"  onchange="enableDoctor(this)">
                  <option value="" disabled selected>Choose Department</option>
                  <option value="cardiologist">Cardiologist</option>
						      <option value="nutritionist">Nutritionist/Dietician</option>
					      </select>
                </div>

                <?php

                  $sql = "SELECT * FROM doctor WHERE department = 'cardiologist' ";
                  $result = mysqli_query($conn, $sql);
                  
                ?>

                <div class="dropdown">
					      <select required id="cardio" name="cardiologist" class="display" >
                  <option value="" disabled selected>Choose Cardiologist</option>
                  <?php while($row = mysqli_fetch_array($result)):;?>
						      <option value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
						      <?php endwhile; ?>
					      </select>
                </div>

                <?php
                $sql1 = "SELECT * FROM doctor WHERE department = 'nutritionist' ";
                $result1 = mysqli_query($conn, $sql1);
                ?>
                <div class="dropdown">
					      <select required id="nutri" name="nutritionist" class="display" >
                  <option value="" disabled selected>Choose Nutritionist</option>
                  <?php while($row1 = mysqli_fetch_array($result1)):;?>
						      <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
						      <?php endwhile; ?>
					      </select>
                </div>
               

                <div class="inputBox">
                    <span>Date of Appointment :</span>
                    <input type="date" name="date" placeholder="1111-2222-3333-4444">
                </div>

                <div class="inputBox">
                    <span>Time of Appointment:</span>
                    <input type="time" name="time" placeholder="january">
                </div>


                <div class="inputBox">
                  <span>Reason of Visit :</span>
                  <input type="Text" name="reason" placeholder="Enter the reason of visit">
                </div>

            </div>

        </div>

        <button class="submit-btn"><a href="">Back</a></button>
        <input type="submit" name="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>

</body>

<script type = "text/javascript">
  function enableDoctor(answer){
    console.log(answer.value);
    if(answer.value == "cardiologist"){
      document.getElementById('cardio').classList.remove('display');

    }else if(answer.value == "nutritionist"){
      document.getElementById('nutri').classList.remove('display');

    }else{
      document.getElementById('cardilogist').classList.add('display');
      document.getElementById('nutritionist').classList.add('display');

    }
  };

</script>
</html>
