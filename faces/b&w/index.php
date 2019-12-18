<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- description -->
    <title>B&W Theme</title>
    <!-- stylesheets -->
    <link rel="stylesheet" href="../../css/b&w-style.css" />
    <link rel="icon" href="../../favicon.ico" type="image/ico" sizes="16x16" />
    <link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded|Share+Tech+Mono&display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="page-wrapper">
        <!--   
        ===============
        Header Sections
        ===============
        -->
        <?php
        include('../../templates/header.php');
        ?>
        <!--   
         ===============
         Page Intro Sections
         ===============
         -->
        <?php include('../../templates/home-intro.php'); ?>


        <!-- 
        ===============
        Main Content Sections
        ===============
        -->

        <?php include('../../templates/home-main.php'); ?>

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