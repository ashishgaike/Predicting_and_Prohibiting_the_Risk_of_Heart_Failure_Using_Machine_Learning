<?php
@include '../signin_up/db_connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $category = $_POST['category'];
    $utr = $_POST['utr'];
    $screenshot = $_POST['screenshot'];

    if ($name != "" && $email != "" && $address != "" && $city != "" && $state != "" && $zip_code != "" && $category != "" && $utr != "" && $screenshot != "") {
        $insert = "INSERT INTO payment(name, email, address, city, state, zip_code, category, utr, screenshot) values('$name', '$email', '$address', '$city', '$state', '$zip_code', '$category', '$utr', '$screenshot')";
        $query = mysqli_query($conn, $insert);
        header('location: .\paymentImg\succ.php');
    } else {
        $error[] = 'Please fill all the fields';
    }
}

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

    <!--<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@600&display=swap"
      rel="stylesheet">-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"
    />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/checkout.css">

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

    <div class="flip-card">
      <div class="flip-card-inner">

        <div class="flip-card-front">
          <img src="./paymentImg/card1.png" />
          <h3>UPI Payments</h3>

        </div>

        <div class="flip-card-back">
          <img src="./paymentImg/QRcode.png" />
          <h2>Scan the above QR Code</h2>
          <h3>Bank Verified Name : Ashish Gaike</h3>
          <h3>UPI id : 8888534360@paytm </h3>
          <h3> Phone No. : 8888534360</h3>

        </div>

      </div>
    </div>
    <div class="form">
      <form action="#" method="POST">
<?php
if (isset($error)) {
    foreach ($error as $error) {
        echo '<span class="error-mssg">' . $error . '</span>';
    }
    ;
}
;
?>
        <h3>Please provide the details below after payment?</h3>

        <div class="inputBox">
                    <label for="name">User name :</label>
                    <input type="text" name="name" placeholder="Enter Name">
                </div>

                <div class="inputBox">
                    <label for="email">email :</label>
                    <input type="text" name="email"  placeholder="Enter Your Email">
                </div>

                <div class="inputBox">
                    <label for="address">address :</label>
                    <input type="text" name="address"  placeholder="room - street - locality">
                </div>

                <div class="flex">
                <div class="inputBox">
                    <label for="city">city :</label>
                    <input type="text"  name="city" placeholder="Enter City">
                </div>


                    <div class="inputBox">
                        <label for="state">state :</label>
                        <input type="text"  name="state" placeholder="Enter State">
                    </div>
                    </div>

                    <div class="flex">
                    <div class="inputBox">
                        <label for="zip_code">zip code :</label>
                        <input type="text"  name="zip_code" placeholder="Enter Zip Code">
                    </div>



                <div class="inputBox">
                    <span>Category :

                    <select name="category" id="category">
						            <option value="subscription">Subscription</option>
						            <option value="appointment">Appointment</option>
					          </select>
                    </span>

                </div>
                </div>
                <div class="inputBox">
                    <label for="utr">Transaction id/UTR No. :</label>
                    <input type="text"  name="utr" placeholder="Enter the Utr No./Transaction Id">
                </div>

                <div class="inputBox">
                    <label for="screenshot">Please attach the screenshot of transaction :</label>
                    <input type="file"  name="screenshot" placeholder="attach the screenshot of transaction">
                </div>

                <input type="submit" name="submit" value="Submit" class="submit-btn">
                <br><br><a href="../FaQ/faq.php" style="text-align: center;">Need Help? Read FAQ!</a>
      </form>

    </div>

</div>

    <div class="flip-card">
      <div class="flip-card-inner">

        <div class="flip-card-front">
        <img src="./paymentImg/card2.png" />
          <h3>Bank Transfer</h3>

        </div>

        <div class="flip-card-back">
          <h2>Beneficiary Details - </h2>
          <h3>Bank Verified Name : Ashish Gaike</h3>
          <h3>Account No. : 918888534360</h3>
          <h3>IFSC Code : PATM123456</h3>
          <h3> Phone No. : 9404887179</h3>

        </div>
      </div>
    </div>
</body>
</html>
