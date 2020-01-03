<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1); ?>

<?php include('data/front-nav.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/front.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Raleway+Dots&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" href="favicon.ico" type="image/ico" sizes="16x16" />

    <title>Tomas Petr | Web of Creativity- Home</title>
    <!-- <meta http-equiv="refresh"
        content="0; URL='http://www.ptomas.slccwebdev.com/posts/apps/5_form-valid/form-valid.html'" /> -->
</head>

<body>
    <main id="hero">
        <img src="./images/logo.png" alt="Tomas Petr Logo" id="logo-front">
        <nav id=nav>
            <i id="bars" class="fas fa-bars"></i>
            <div id="menu">
                <?php foreach($frontNav as $nav => $item) { ?>
                    <a href="./pages/index.php?item=<?php echo $nav; ?>"><img src="./images/<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>"></a>
                       <?php } ?>
              
                <a href="./pages/squares/index.php"><img src="./images/squared.jpg" alt="square theme"></a>


            </div>
        </nav>
        <p class="welcome">Web Development</p>
    </main>
    <script src="./scripts/front.js"></script>
</body>

</html>