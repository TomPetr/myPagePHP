<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php include('../../data/nav.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- description -->
  <title>Tomas Petr | Web of Creativity- Home</title>

  <!-- stylesheets -->
  <link rel="stylesheet" href="../../css/funky-style.css" />
  <!-- favicon -->
  <link rel="icon" href="../../favicon.ico" type="image/ico" sizes="16x16" />


</head>

<body>
  <div class="page-wrapper">
    <!--   
        ===============
        Header Sections
        ===============
        -->
    <?php include('../../templates/header.php'); ?>
   
    <!-- *** CODES PAGE CONTENT *** -->

<?php include('../../content/apps-content.php'); ?>
   
    <!-- 
     ===============
     Footer Sections
     ===============
    -->
    <?php include('../../templates/footer.php'); ?>
    
  </div>
  <script src="../../scripts/main.js"></script>

</body>

</html>