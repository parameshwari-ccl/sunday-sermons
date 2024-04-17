<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bible Study</title>
    <?php require_once 'css.php';?>

    <!-- css -->
    <link rel='stylesheet' href='styles/sermon.css'>
    
</head>
<body>
    <?php
    $items = [
        (object)[
            'name' => 'Judah shall go up ',
            'date' => 'February 11,2024',
            'value' => 'Pastor Anison Samual'
        ],
        (object)[
            'name' => 'Judah shall go up ',
            'date' => 'February 11,2024',
            'value' => 'Pastor Anison Samual'
        ],
        (object)[
            'name' => 'Judah shall go up ',
            'date' => 'February 11,2024',
            'value' => 'Pastor Anison Samual'
        ],
        (object)[
            'name' => 'Judah shall go up ',
            'date' => 'February 11,2024',
            'value' => 'Pastor Anison Samual'
        ],
        (object)[
            'name' => 'Judah shall go up ',
            'date' => 'February 11,2024',
            'value' => 'Pastor Anison Samual'
        ],
    ];
    ?>
    <!-- header -->
    <?php require_once('header.php'); ?>

    <!-- main -->
    <div class="sermon-div">
        <div class="row left-div" >
            <h1>Bible Study</h1>
            <div class="col-sm-4 align-col">
                <div class="row">
                    <div class="col">
                        <h4>SEARCH BY TITLE OR WORD</h4>
                        <div class='search-title'>
                            <i class="fa fa-search" ></i>
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <h4>FILTER BY SERIES</h4>
                        <select class='search-speaker'>
                            <option value="" disabled selected hidden>Select Series</option>
                            <option value="">Keywords from the scripture</option>
                            <option value="">The Bridge</option>
                            <option value="">Realm of the Holy spirit</option>
                            <option value="">Books of Acts</option>
                            <option value="">Jerusalem</option>
                        </select>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <h4>FILTER BY DATE</h4>
                        <select class='search-speaker'>
                            <option value="" disabled selected hidden>Select Year</option>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="w-100"></div>
                    <div class="col">
                        <select class='search-speaker'>
                            <option value="" disabled selected hidden>Select Month</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 align-right-col">
                <div class="row list-pagination">
                    <div class="col-sm pagin-display">
                        <p>Displaying 1 to 20 of 150 results</p>
                    </div>
                    <div class="col-sm">
                        <ul class="pagination">
                            <li>&lsaquo;</li>
                            <li><a class="num-high-light"> 1 </a></li>
                            <li><a> 2 </a></li>
                            <li><a> 3 </a></li>
                            <li>&rsaquo;</li>
                        </ul>
                    </div>
                </div>
                <?php foreach ($items as $index =>  $item){ ?>
                    <div class="row task-list">
                        <div class="col-sm-8">
                            <div class="task-title">
                                <h5><?php echo $item->name . ' ' . $index; ?> |</h5>
                                <p>Pastor Anison Samual</p>
                            </div>
                            <p class="sermon-date">February 11,2024</p>
                        </div>
                        <div class="col-sm-4">
                            <div class="icon-media">
                                <a href="details-page.php" class="media-icon-div"><img  src="https://framerusercontent.com/images/YoSCdIpsYJmjLIg2oT86l2QBCoM.svg" alt=""></a>
                                <a href="details-page.php" class="media-icon-div"><img  src="https://framerusercontent.com/images/nIl4ryB9oqqPpxe2uK8mUAytc.svg" alt=""></a>
                                <a href="details-page.php" class="media-icon-div"><img  src="https://framerusercontent.com/images/8p0D8DXyIULV6txomlMRq0RnxF8.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                <?php } 
                ?>
            </div>


        </div>
        <div class="bottom-pagination">
            <ul class="pagination">
                <li>&lsaquo;</li>
                <li><a class="num-high-light"> 1 </a></li>
                <li><a> 2 </a></li>
                <li><a> 3 </a></li>
                <li>&rsaquo;</li>
            </ul>
        </div>
    </div>

   <!-- background image  -->
    <div class='search-screen-img'>
        <img id='book-image' width='100%' src='img/sunday-background.png'>
    </div>

    <!-- footer -->
    <?php require_once('footer.php'); ?>

    <!-- script -->
    <?php require_once('script.php'); ?>
</body>
</html>