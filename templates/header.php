<?php 
$uri = $_SERVER['REQUEST_URI'];
 // gets URI
?>
<header class="clearfix">
    <!-- header -->
            <!-- Top Navigation  -->
            <nav id="nav-main" class="clearfix">
                <ul id="nav-main-menu">
    <?php

    foreach($navItems as $nav => $item) { ?>
        <li><a href="<?php echo $item['slug']; ?>?item=<?php echo $navItem ?>"><?php echo $item['title']; ?></a></li>
        
   <?php  } ?>

    
    
</ul>
            </nav>

            <!-- Logo -->

            <a id="brand-logo-frame" class="clearfix" href="../index.php">
                <img src="../images/logo.png" alt="logo" id="brand-logo-img" />
            </a>

            <!-- Brand img -->
            <figure id="brand-face-frame">
            <?php 
             if(strpos($uri, "index")){
                 $brandImg = "my_photo.jpg";
             }
             if(strpos($uri, "codes")){
                $brandImg = "codes_brand.jpg";
            }
            if(strpos($uri, "apps")){
                $brandImg = "apps_brand.jpg";
            }
            if(strpos($uri, "faces")){
                $brandImg = "faces_brand.jpg";
            }
            ?>
                <img src="../images/<?php echo $brandImg; ?>" id="brand-face-img" alt="My Photo" />
            </figure>
        </header>