<!DOCTYPE html>
<html lang="en">
<head>

    <title>index</title>
    <?php require_once 'css.php';?>

</head>
<body>

    <!-- header -->
    <?php require_once('header.php'); ?>

    <!-- background vedio -->
    <video autoplay muted loop id="myVideo">
        <source src="vedio/background.mp4" type="video/mp4">
    </video>

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
    <?php require_once('footer.php'); ?>

    <!-- script -->
    <?php require_once('script.php'); ?>

</body>
</html>