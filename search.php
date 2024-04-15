<!DOCTYPE html>
<html lang="en">
<head>

  <title>Search</title>

  <!-- css -->
  <?php require_once('css.php'); ?>
  
  
</head>
<body>
  <!-- header -->
  <?php require_once('header.php'); ?>

  <!-- background image  -->
  <div class="img-div">
  <img id='book-image' width="100%" src='https://framerusercontent.com/images/pH8DlNGW1BQprXwH0NnpNT6R68I.jpg?scale-down-to=4096'>
  </div>

  <!-- main -->
  <a id='search-page' href="/sunday_sermon.php">
    <i class="fa fa-search" ></i>
    <input type="text" placeholder="Find a Sermon">
  </a>

  <!-- footer -->
  <?php require_once('footer.php'); ?>

  <!-- script -->
  <?php require_once('script.php'); ?>

</body>
</html>