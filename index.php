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

      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>

    <!-- css files -->
    <link rel='stylesheet' href='styles/index.css'>

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- ======= header ======== -->
    <?php include('header.php'); ?>

    <!-- background vedio -->
    <div id='vedio-div'>
        <video autoplay muted loop id="myVideo">
            <source src="vedio/background.mp4" type="video/mp4">
        </video>
    </div>

    <!-- main -->
    <div id='center-content'>
        <h2>Heaven and earth will pass away, but <br>my words will never pass away</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim <br> veniam, quis nostrud exercitation ullamco laboris nisi 
            ut aliquip ex ea <br> commodo consequat.
        </p>
        <a href='search.php' id='search-btn'>Search For Sermons</a>
    </div>

    <!-- footer -->
    <?php include('footer.php'); ?>

    <script src="js/index.js"></script>
</body>
</html>