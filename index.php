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

        <div class="video-wrapper">
            <!-- background video -->
            <video autoplay muted loop class="my-video">
                <source src="video/background.mp4" type="video/mp4">
            </video>
            <!-- main -->
            <div class='center-content d-flex justify-content-center'>
                <div class="center-detail">
                    <h2 class="text-center">Heaven and earth will pass away, but my words will never pass away</h2>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi 
                        ut aliquip ex ea commodo consequat.
                    </p>
                    <a href='filter-results.php' id='search-btn'>Search For Sermons</a>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php require_once('footer.php'); ?>

        <!-- script -->
        <?php require_once('script.php'); ?>
        
    </div>
</body>
</html>