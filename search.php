<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search</title>
  
  <!-- css -->
  <?php require_once('css.php'); ?>
</head>
<body>
  <!-- main -->

  <div class="book-image">
    <!-- header -->
    <?php require_once('header.php'); ?>

    <div href="/filter-results.php" class="search-btn">
      <div class="btn-div">
          <div class="search-bar">
            <i class="fa fa-search" ></i>
            <input type="text" placeholder="Find a Sermon">
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