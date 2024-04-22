<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sunday Sermons</title>
    <?php require_once 'css.php';?>

    <link rel='stylesheet' href='styles/sermon.css'>
</head>
<body>
    <!-- object -->
    <?php
    $items = [
        (object)[
            'name' => 'Judah shall go up Judah  shall go up',
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


    <!-- main -->
    <div class="sermon-div">
        <!-- header -->
        <?php require_once('header.php'); ?>

        <!-- content -->
        <div class="row left-div" >
            <h1>Sunday Sermons</h1>
            <div class="col-lg-4 col-md-4 align-col">
                <div class="row">
                    <div class="filter-item">
                        <h4>SEARCH BY TITLE OR WORD</h4>
                        <div class='search-title'>
                            <i class="fa fa-search" ></i>
                            <input type="text" placeholder="Search">
                        </div>
                    </div>
                    <div class="filter-item">
                        <h4>FILTER BY SPEAKER</h4>
                        <select class='search-speaker'>
                            <option value="" disabled selected hidden>Select Speaker</option>
                            <option value="">Paster Anison Samual</option>
                        </select>
                    </div>
                    <div class="filter-item">
                        <h4>FILTER BY DATE</h4>
                        <select class='search-speaker'>
                            <option value="" disabled selected hidden>Select Year</option>
                            <option value="">2024</option>
                            <option value="">2023</option>
                            <option value="">2022</option>
                            <option value="">2021</option>
                            <option value="">2020</option>
                            <option value="">2019</option>
                        </select>
                    </div>
                    <div class="filter-item align-items-end d-flex">
                        <select class='search-speaker'>
                            <option value="" disabled selected hidden>Select Month</option>
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                            <option value="">April</option>
                            <option value="">May</option>
                            <option value="">June</option>
                            <option value="">July</option>
                            <option value="">August</option>
                            <option value="">September</option>
                            <option value="">Octomber</option>
                            <option value="">Nevember</option>
                            <option value="">December</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 align-right-col">
                <nav class="d-flex justify-items-center justify-content-between">
                    <div class="d-flex justify-content-between flex-fill d-sm-none">
                        <ul class="pagination">

                            <li class="page-item disabled" aria-disabled="true">
                                <span class="page-link">&laquo; Previous</span>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="http://localhost:8000/test?page=2" rel="next">Next &raquo;</a>
                            </li>
                        </ul>
                    </div>

                    <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
                        <div>
                            <p class="small text-muted">
                                Showing
                                <span class="fw-semibold">1</span>
                                to
                                <span class="fw-semibold">1</span>
                                of
                                <span class="fw-semibold">17</span>
                                results
                            </p>
                        </div>

                        <div>
                            <ul class="pagination">

                                <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                </li>

                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="http://localhost:8000/test?page=2">2</a></li>
                                <li class="page-item"><a class="page-link" href="http://localhost:8000/test?page=3">3</a></li>
                                <li class="page-item"><a class="page-link" href="http://localhost:8000/test?page=4">4</a></li>

                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>

                                <li class="page-item"><a class="page-link" href="http://localhost:8000/test?page=16">16</a></li>
                                <li class="page-item"><a class="page-link" href="http://localhost:8000/test?page=17">17</a></li>

                                <li class="page-item">
                                    <a class="page-link" href="http://localhost:8000/test?page=2" rel="next"
                                        aria-label="Next &raquo;">&rsaquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <?php foreach ($items as $index =>  $item){ ?>
                    <div class="row task-list">
                        <div class="col-sm-8">
                            <div class="task-title">
                                <h5><?php echo $item->name . ' ' . $index; ?> </h5>
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
                <?php } ?>
            </div>


        </div>
        <div class="bottom-pagination">
            <nav class="d-flex justify-items-center justify-content-between">
                    <div>
                        <ul class="pagination">

                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                                <span class="page-link" aria-hidden="true">&lsaquo;</span>
                            </li>

                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="http://localhost:8000/test?page=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="http://localhost:8000/test?page=3">3</a></li>

                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>

                            <li class="page-item"><a class="page-link" href="http://localhost:8000/test?page=17">17</a></li>

                            <li class="page-item">
                                <a class="page-link" href="http://localhost:8000/test?page=2" rel="next"
                                    aria-label="Next &raquo;">&rsaquo;</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </div>

    <!-- footer -->
    <?php require_once('footer.php'); ?>

    <!-- script -->
    <?php require_once('script.php'); ?>
    
</body>
</html>