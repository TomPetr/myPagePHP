
<header class="clearfix">
    <!-- header -->
            <!-- Top Navigation  -->
            <nav id="nav-main" class="clearfix">
                <ul id="nav-main-menu">
    <?php

    foreach($navItems as $nav => $item) { ?>
        <li><a href="<?php echo $item['slug']; ?>?item=<?php echo $nav; ?>"><?php echo $item['title']; ?></a></li>
        
   <?php  } ?>

    
    
</ul>
            </nav>

            <!-- Logo -->

            <a id="brand-logo-frame" class="clearfix" href="../index.php">
                <img src="../images/logo.png" alt="logo" id="brand-logo-img" />
            </a>

            <!-- Brand img -->
            <figure id="brand-face-frame">
                <img src="../images/my_photo.jpg" id="brand-face-img" alt="My Photo" />
            </figure>
        </header>