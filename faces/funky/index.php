<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php include('../../data/nav.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('../../templates/head.php'); ?>
</head>

  


<body>
  <div class="page-wrapper">
    <!--   
        ===============
        Header Sections
        ===============
        -->
    <?php include('../../templates/header.php'); ?>
   
    <!-- *** HOME PAGE CONTENT *** -->

    <?php include('../../content/home-content.php'); ?>
   
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