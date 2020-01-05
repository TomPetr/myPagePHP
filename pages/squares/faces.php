<?include '../../data/page-intro/faces-intro.php' ?>
<?include '../../data/page-posts/faces-posts.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- description -->
    <title>Webpage Themes | Tomas Petr</title>
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
<style>

</style>
</head>

<body class="bg-dark text-light">


    <div id="page-wrapper" class="mb-5">
        <!--   
        ===============
        Header Sections
        ===============
        -->
        <header class="d-md-flex flex-md-column m-0 p-0 col-12 bg-grey-dark">

            <!-- Logo -->

            <a id="brand-logo-frame" href="../../index.php"
                class="col-12 col-md-9 mr-1  p-1 text-md-right order-md-2 ml-auto">
                <img src="../../images/logo.png" alt="logo" id="brand-logo-img" class="img-fluid" />
            </a>


            <!-- Top Navigation -->
            <nav id="nav-main"
                class="col-12 d-flex navbar navbar-expand-md navbar-dark justify-content-between p-0 order-md-1">
                <!-- Brand img -->
                <a class="navbar-brand col-6 col-md-3 m-0 p-0" href="./index.php"><img
                        src="../../images/my_photo.jpg" id="brand-face-img" class="filtered img-fluid"
                        alt="My Photo" /></a>
                <button class="navbar-toggler mr-2 col-5" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="align-self-start collapse navbar-collapse col-6 col-md-9 ml-0 p-0 " id="collapsibleNavbar">
                    <ul id="nav-main-menu"
                        class="navbar-nav col-12 nav-justified text-uppercase font-weight-bold letter-spacing-3 border-bottom border-light pr-0">
                        <li class="nav-item active border-right border-light">
                            <a class="nav-link" href="./index.php">home</a>
                        </li>
                        <li class="nav-item border-right border-light">
                            <a class="nav-link" href="./codes.php">codes</a>
                        </li>
                        <li class="nav-item border-right border-light">
                            <a class="nav-link" href="./apps.php">apps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./faces.php">faces</a>
                        </li>
                    </ul>
                </div>
            </nav>


        </header>
        <!--   
        ===============
        Page Intro Sections
        ===============
        -->

        <section id="page-intro" class="container col-12 col-md-10">
            <!-- Page Title -->
            <div id="brand-title" class="row col-12 text-center">
                <h1><?php echo $facesTitle ?></h1>
            </div>
            <!-- intro paragraphs -->
            <div id="intro-content" class="d-flex flex-column justify-content-center mb-3">
                <!-- intro paragraph #1 -->
                <p class="col-md-8 bg-danger font-weight-bold lead p-2 text-justify flex-grow-1 flex-shrink-1">
                    <?php 
                      echo $facesText[0]['text'];
                    ?>
                </p>
                <!-- intro paragraph #2 -->
                <p class="col-md-8 bg-warning ml-auto font-weight-bold lead p-2 text-justify flex-grow-1 flex-shrink-1">
                    <?php 
                      echo $facesText[1]['text'];
                    ?>
                </p>
            </div>

        </section>
        <!-- 
        ===============
        Main Content Sections
        ===============
        -->



        <main id="main-section" class="mb-3 col-12">
            <!-- Page's nav thumbs-->


            <section id="posts" class="d-flex flex-column justify-content-between">
              <?php
               foreach ($facesPosts as $post) { 
                   
                   if($post['title'] == "B&W Theme" || $post['title'] == "Funky Theme") { ?>
                      
                    <a href="../../pages/faces.php?item=<?php echo $post['item']; ?>" target="_self" class="d-flex flex-row flex-wrap  align-items-start mt-0 mb-2 col-12  bg-info nav-link text-light border border-dark align-self-stretch" title="<?php echo $post['title'] ?>">
                        <h2 class="text-uppercase col-lg-12 align-self-start order-1"><?php echo $post['title'] ?></h2>
                        <figure class="no-gap col-lg-6 order-2">
                            <img src="../../images/<?php echo $post['face']; ?>" alt="<?php $post['title']; ?>" title="<?php echo $post['title']; ?>" class="img-fluid border border-dark" />
                        </figure>
                        <p class="col-lg-6 order-3 align-self-start">
                            <?php echo $post['text']; ?>
                        </p>
                    </a>
                
              <?php
                   } elseif($post['title'] == "Squared Theme") { ?>
                
                    <a href="./faces.php" target="_self" class="d-flex flex-row flex-wrap  align-items-start mt-0 mb-2 col-12  bg-info nav-link text-light border border-dark align-self-stretch" title="<?php echo $post['title'] ?>">
                        <h2 class="text-uppercase col-lg-12 align-self-start order-1"><?php echo $post['title'] ?></h2>
                        <figure class="no-gap col-lg-6 order-2">
                            <img src="../../images/<?php echo $post['face']; ?>" alt="<?php $post['title']; ?>" title="<?php echo $post['title']; ?>" class="img-fluid border border-dark" />
                        </figure>
                        <p class="col-lg-6 order-3 align-self-start">
                            <?php echo $post['text']; ?>
                        </p>
                    </a>
                
                <?php
                   }
               }
            ?>   
                
                

            
                
                
                
            </section>
        </main>

        <!-- 
        ===============
        Footer Sections
        ===============
        -->
        <footer id="footer-section" class="container d-md-flex d-flex-md-column ml-0 mr-0 pl-0 pr-0 mb-5 col-12 ">
            <!-- Left Column -->
            <div id="footer-left"
                class="container col-12 col-md-6 bg-light d-flex-column text-secondary align-self-md-stretch mb-3 mb-md-0">
                <h2 class="col-12 text-center text-uppercase">Contact</h2>

                <form action="/action_page.php" method="POST" target="_self" name="contact-form" id="contact-form"
                width="100%" onsubmit="validateFormFx(event)">
                    <fieldset>
                        <legend>Hire Me!</legend>

                        <input type="text" name="first-name" id="first-name" placeholder="Your First Name..."
                            class="req" />
                        <label for="first-name">*</label>
                        <br /><br />
                        <input type="text" name="last-name" id="last-name" placeholder="Your Last Name..."
                            class="req" />
                        <label for="last-name">*</label>
                        <br /><br />
                        <input type="email" name="email" id="email" placeholder="Your Email..." class="req" />
                        <label for="email">*</label>
                        <br /><br />
                        <input type="tel" name="phone" id="phone" placeholder="000-000-0000"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="req" />
                        <label for="phone">*</label>
                        <br /><br />
                        <input type="text" name="subject" id="subject" placeholder="Subject..." class="req" />
                        <label for="subject">*</label>
                        <br /><br />

                        <textarea name="message" id="message" rows="5" class="req"
                            placeholder="Write me a message.."></textarea>
                        <label for="message" style="display:inline-block;vertical-align: top;">*</label>



                        <fieldset>
                            <legend>I Prefer To Communicate Via:</legend>
                            <select name="com" id="com">
                                <option value="phone-call">Phone Calls</option>
                                <option value="text-mes">Text Messages</option>
                                <option value="emails" Emails>Emails</option>
                                <option value="Skype">Skype</option>
                                <option value="WatsApp">WhatsApp</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Hangouts">Hangouts</option>
                                <option value="person" selected>In Person</option>
                            </select>
                        </fieldset>
                        <input type="radio" name="news" id="news" />
                        <span>Please send me the newsletter by email.</span>
                        <input type="submit" name="submit" id="submit" value="Submit!" />
                    </fieldset>
                </form>
            </div>
            <!-- Right Column-->
            <div id="footer-right"
                class="container col-12 col-md-6 bg-secondary d-flex-column text-light align-self-md-stretch">
                <div id="credentials">
                    <h2 class="col-12 text-center text-uppercase">My tools</h2>
                    <ul id="footer-tools" class="container list-unstyled d-flex flex-wrap">
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">PHP</p>
                                <figure class="col-12"><img src="../../images/php-icon.png" alt="php"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">JavaScript</p>
                                <figure class="col-12"><img src="../../images/js-icon.png" alt="javascript"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">MySQL</p>
                                <figure class="col-12"><img src="../../images/mysql-icon.png" alt="mySql"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">BootStrap</p>
                                <figure class="col-12"><img src="../../images/bootstrap-icon.png" alt="BootStrap"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">VS Code</p>
                                <figure class="col-12">
                                    <img src="../../images/vcode-icon.png" alt="Visual Studio Code"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">GitHub</p>
                                <figure class="col-12"><img src="../../images/git_hub-icon.png" alt="GitHub"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">AffinityPhoto</p>
                                <figure class="col-12">
                                    <img src="../../images/affinity_photo-icon.png" alt="AffinityPhoto"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                                </p>
                            </a>
                        </li>
                        <li class="container col-6 p-0">
                            <a href="" class="col-12 d-flex-colums nav-link text-light">
                                <p class="col-12">AffinityDesigner</p>
                                <figure class="col-12">
                                    <img src="../../images/affinity_designer-icon.png" alt="AffinityDesigner"
                                        class="img-fluid filtered col-6 img-thumbnail" /></figure>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="copyright" class="text-dark text-center text-md-right">Copyright © <span id="year"></span>
                    Tomas Petr</div>
            </div>
        </footer>
    </div>
    <script src="../../scripts/main.js"></script>
</body>

</html>