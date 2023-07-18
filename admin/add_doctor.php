<?php
@include '../signin_up/db_connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $pnum = mysqli_real_escape_string($conn, $_POST['pnum']);
    $address = $_POST['address'];

    $select = " SELECT * FROM doctor WHERE email = '$email' && pnum = '$pnum'";

    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) > 0) {
        $error[] = 'Doctor already registered';
    } else {
        if ($name != "" && $email != "" && $department != "" && $pnum != "" && $address != "") {
            $insert = "INSERT INTO doctor(name, email,  department, pnum, address) values('$name', '$email',  '$department', '$pnum', '$address')";
            $query = mysqli_query($conn, $insert);
            header('location: doctor.php');
        } else {
            $error[] = 'Please fill all the fields';
        }
        ;
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
    <title>Add Doctor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@600&display=swap"
      rel="stylesheet">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="./add_doctor.css">
    </head>

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
            <div class="inputBox">
                <span>Name :</span>
                <input type="text" name="name" placeholder="Please enter doctor's name">
            </div>

            <div class="inputBox">
                <span>Email:</span>
                <input type="email" name="email" placeholder="Please enter doctor's email">
            </div>

            <div class="inputBox">
                <label for="department">Choose Deparment</label>
				<select required id="deparment" name="department" placeholder="Choose Deparment" onclick="enableDoctor(this)">
                    <option value="">Choose Department</option>
                    <option value="cardiologist">Cardiologist</option>
					<option value="nutritionist">Nutritionist/Dietician</option>
				</select>
            </div>

            <div class="inputBox">
                <span> Phone Number :</span>
                <input type="text" name="pnum" placeholder="Please enter doctor's Phone No.">
            </div>

            <div class="inputBox">
                <span> Address :</span>
                <input type="text" name="address" placeholder="Please enter doctor's address">
            </div>

            <button class="submit-btn"><a href="./admin.php">Back</a></button>
            <input type="submit" name="submit" value="Submit" class="submit-btn">

        </form>

        </div>
    </body>

</html>
