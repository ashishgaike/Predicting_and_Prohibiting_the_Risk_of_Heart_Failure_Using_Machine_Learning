<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>BRB</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
   

<meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="./load.css">

</head>

<body>
<!-- partial:index.partial.html -->
<!-- Canvas -->
<canvas class="orb-canvas"></canvas>
<!-- Overlay -->
<div class="overlay">
  <!-- Overlay inner wrapper -->
  <div class="overlay__inner">
    <!-- Title -->
    <h1 class="overlay__title">
      Your Payment is successfull !
      <span class="text-gradient">Welcome to the family...</span> 
    </h1>
    <!-- Description -->
    <p class="overlay__description">
      For the time being predict your heart health    
      <strong>You can do it by pressing the "Predict Risk" button below.</strong>
    </p>
    <!-- Buttons -->
    <div class="overlay__btns">

      <button class="overlay__btn overlay__btn--transparent">
        <a href="http://localhost/filnel/BE_MajorProjectedit/BE_MajorProject/afterlogin.php">
          Go Back
        </a>
      </button>

      <button class="overlay__btn overlay__btn--colors">
        <span><a href="http://127.0.0.1:5000/" style="color: white;">Predict Risk</a> </span>
        <span class="overlay__btn-emoji">🎨</span>
      </button>
    </div>
  </div>
</div>
<!-- partial -->
  <script type="module" src="./load.js"></script>

</body>
</html>