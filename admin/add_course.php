<?php
@include '../signin_up/db_connection.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    if($_FILES["image"]["error"] === 4){
        echo
        "<script> alert('Please upload image'); </script>";
    }else{
        $filename = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png', 'svg'];
        $imageExtension = explode('.',$filename);
        $imageExtension = strtolower(end($imageExtension));

        if(! in_array($imageExtension, $validImageExtension)){
            echo
        "<script> alert('Invalid image extension'); </script>";
        }
        else if($fileSize > 1000000){
            echo
        "<script> alert('Image size too large'); </script>";
        }
        else{
            $newImageName = uniqid();
            $newImageName = '.' . $imageExtension;

            move_uploaded_file($tmpName, 'img/'. $newImageName);
            $insert = "INSERT INTO course(image, title, description) values('$newImageName', '$title',  '$description' )";
            $query = mysqli_query($conn, $insert);
            header('location: course.php');
        }
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
    <title>Add Couse</title>
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
        <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">

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
                <span>Image :</span>
                <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png, .svg" >
            </div>

            <div class="inputBox">
                <span>Title:</span>
                <input type="text" name="title" placeholder="Please enter title">
            </div>

            <div class="inputBox">
                <span> Description :</span>
                <input type="text" name="description" placeholder="Please enter description">
            </div>

            <button class="submit-btn"><a href="./admin.php">Back</a></button>
            <input type="submit" name="submit" value="Submit" class="submit-btn">

        </form>

        </div>
    </body>

</html>
