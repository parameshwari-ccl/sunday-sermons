<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sunday Sermon</title>    

    <!-- head -->
    <?php require_once('css.php'); ?>

    <!-- css -->
    <link rel='stylesheet' href='styles/sunday.css'>

</head>
<body>
    <!-- header -->
    <?php require_once('header.php'); ?>

    <!-- background image -->
    <div class='search-screen-img'>
        <img id='book-image' width='100%' src='img/sunday-background.png'>
    </div>

    <!-- main -->
    <div class="container">
        <h1>Sunday Sermons</h1>
        <div class="row" >
            <div class="col-sm-4">
            <div class="row" >
                <div class="col">
                    <h4>SEARCH BY TITLE OR WORD</h4>
                    <div id='search-title'>
                        <i class="fa fa-search" ></i>
                        <input type="text" placeholder="Find a Sermon">
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <h4>FILTER BY SPEAKER</h4>
                    <select class='search-speaker'>
                        <option></option>
                    </select>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <h4>FILTER BY DATE</h4>
                    <select class='search-speaker'>
                        <option></option>
                    </select>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <select class='search-speaker'>
                        <option></option>
                    </select>
                </div>
            </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm">
                        <p>Displaying 1 to 20 of 150 results</p>
                    </div>
                    <div class="col-sm">
                        <ul class="pagination">
                            <li><img src="https://framerusercontent.com/images/bH6M26DipZzvwrdMtXVlZEiglM.svg?scale-down-to=512" alt=""></li>
                            <li><a class="num-high-light"> 1 </a></li>
                            <li><a> 2 </a></li>
                            <li><a> 3 </a></li>
                            <li><img class="rotate-img" src="https://framerusercontent.com/images/bH6M26DipZzvwrdMtXVlZEiglM.svg?scale-down-to=512" alt=""></li>
                        </ul>
                    </div>
                </div>
               <div class="sermon-list">
                    <div class="row">
                        <div id="title-date" class="col-sm">
                            <h5>Judah shall go up |</h5>
                            <p>February 11,2024</p>
                        </div>
                        <div class="col-sm">
                            <p class="author">Pastor Anison Samual</p>
                        </div>
                        <div class="col-sm">
                            <div class="icon-media">
                                <div class="media-icon-div"><img  src="https://framerusercontent.com/images/YoSCdIpsYJmjLIg2oT86l2QBCoM.svg" alt=""></div>
                                <div class="media-icon-div"><img  src="https://framerusercontent.com/images/nIl4ryB9oqqPpxe2uK8mUAytc.svg" alt=""></div>
                                <div class="media-icon-div"><img  src="https://framerusercontent.com/images/8p0D8DXyIULV6txomlMRq0RnxF8.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php require_once('footer.php'); ?>

    <!-- script -->
    <?php require_once('script.php'); ?>

</body>
</html>