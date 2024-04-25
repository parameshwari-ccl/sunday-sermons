<!DOCTYPE html>
<html lang="en">
<head>

    <title>index</title>
    <?php require_once 'css.php';?>

</head>
<body>
    <div class="holder">

        <!-- header -->
        <?php require_once('header.php'); ?>
        <!-- background video -->
        <div class="video-wrapper">
            <video autoplay muted loop class="my-video">
                <source src="video/background.mp4" type="video/mp4">
            </video>
        </div>

        <!-- main -->
        <div class='center-content'>
            <div class="center-detail">
                <h2>Heaven and earth will pass away, but my words will never pass away</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                    ut aliquip ex ea commodo consequat.
                </p>
                <a href='search.php' id='search-btn'>Search For Sermons</a>
            </div>
        </div>

        <!-- footer -->
        <?php require_once('footer.php'); ?>

        <!-- script -->
        <?php require_once('script.php'); ?>
        
    </div>
</body>
</html>