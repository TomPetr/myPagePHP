<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- description -->
    <title>Squared Theme</title>
    <!-- stylesheets -->
    <link rel="stylesheet" href="../../css/squares-style.css" />
    <link rel="icon" href="../../favicon.ico" type="image/ico" sizes="16x16" />
    <!-- BootStrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=BioRhyme+Expanded|Share+Tech+Mono&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">



</head>


<body class="bg-dark text-light">


    <div id="page-wrapper" class="mb-5">
        <!--   
        ===============
        Header Sections
        ===============
        -->
       
<?php include('./header.php'); ?>
        <!--   
        ===============
        Page Intro Sections
        ===============
        -->

        
<?php include('./home-intro.php'); ?>

        <!-- 
        ===============
        Main Content Sections
        ===============
        -->

<?php include('./home-main.php'); ?>

        

        <!-- 
        ===============
        Footer Sections
        ===============
        -->
        <?php include('./footer.php'); ?>
    </div>
    <script src="../../scripts/main.js"></script>
</body>

</html>