<?php
@include '../signin_up/db_connection.php';

$id = $_GET['updateid'];

$select = "SELECT * FROM doctor where id=$id";
$query = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($query);
$name = $row['name'];
$email = $row['email'];
$department = $row['department'];
$pnum = $row['pnum'];
$address = $row['address'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $pnum = mysqli_real_escape_string($conn, $_POST['pnum']);
    $address = $_POST['address'];

    $update = "UPDATE doctor SET id = $id, name = '$name', email = '$email', department = '$department', pnum = '$pnum', address = '$address' where id = $id";
    $result = mysqli_query($conn, $update);
    if ($result) {
        header('location: doctor.php');
    } else {
        $error[] = "Unable to update the records";
    }

}
;

?>


<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Doctor</title>
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
                <input type="text" name="name"  value = "<?php echo $row['name']; ?>" placeholder="Please enter doctor's name">
            </div>

            <div class="inputBox">
                <span>Email:</span>
                <input type="email" name="email" value = "<?php echo $row['email']; ?>" placeholder="Please enter doctor's email">
            </div>

            <div class="inputBox">
                <label for="department">Choose Deparment</label>
				<select required id="deparment" name="department"  placeholder="Choose Deparment" onclick="enableDoctor(this)">
                    <option value = "" >Choose Department</option>
                    <option value="cardiologist">Cardiologist</option>
					<option value="nutritionist">Nutritionist/Dietician</option>
				</select>
            </div>

            <div class="inputBox">
                <span> Phone Number :</span>
                <input type="text" name="pnum" value = "<?php echo $row['pnum']; ?>" placeholder="Please enter doctor's Phone No.">
            </div>

            <div class="inputBox">
                <span> Address :</span>
                <input type="text" name="address" value = "<?php echo $row['address']; ?>" value = <?php echo $name; ?> placeholder="Please enter doctor's address">
            </div>

            <button class="submit-btn"><a href="./admin.php">Back</a></button>
            <input type="submit" name="submit" value="Submit" class="submit-btn">

        </form>

        </div>
    </body>

</html>
