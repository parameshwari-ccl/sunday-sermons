<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- google fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

  <!-- css vender file -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- css files -->
  <link rel='stylesheet' href='styles/index.css'>
  <link rel='stylesheet' href='styles/search.css'>

</head>
<body>
  <!-- ======= header ======== -->
  <?php include('header.php'); ?>

  <!-- main -->
  <!-- background vedio -->
  <div id='vedio-div'>
    <img id='book-image' width='100%' src='https://framerusercontent.com/images/pH8DlNGW1BQprXwH0NnpNT6R68I.jpg?scale-down-to=4096'>
  </div>

  <!-- main -->
  <a id='search-page' href="/sunday.php">
    <i class="fa fa-search" ></i>
    <input type="text" placeholder="Find a Sermon">
  </a>

  <!-- footer -->
  <?php include('footer.php'); ?>

  <!-- <script src='js/index.js'></script> -->
</body>
</html>