<?php
include 'libs/load.php'
?>


<!doctype html>
<html>

<head>

  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/"> -->



  <!-- Bootstrap core CSS -->
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <style> -->

  <link
    href="css/<?php print(basename($_SERVER['PHP_SELF'], '.php'))?>.css"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body>
  <?php load('_signup');
?>
</body>

</html>