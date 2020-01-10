<?php include('../../data/tools.php'); ?>
<?php include('../../scripts/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>


<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!-- description -->
  <title>Tomas Petr | Web of Creativity- Home</title>

  <!-- stylesheets -->
        <!-- #1 -->
  <link rel="stylesheet" href="../../css/funky-style.css" />
        <!-- #2 -->
  <link rel="stylesheet" href="" />
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
    
<header class="clearfix">
    <!-- header -->
            <!-- Top Navigation  -->
            <nav id="nav-main" class="clearfix">
                <ul id="nav-main-menu">
            <li><a href="index.php?item=funky">home</a></li>
        
           <li><a href="codes.php?item=funky">codes</a></li>
        
           <li><a href="apps.php?item=funky">apps</a></li>
        
           <li><a href="faces.php?item=funky">faces</a></li>
        
   
    
    
</ul>
            </nav>

            <!-- Logo -->

            <a id="brand-logo-frame" class="clearfix" href="../../index.php">
                <img src="../../images/logo.png" alt="logo" id="brand-logo-img" />
            </a>

            <!-- Brand img -->
            <figure id="brand-face-frame">
                <img src="../../images/my_photo.jpg" id="brand-face-img" alt="My Photo" />
            </figure>
        </header>   
    <!-- *** HOME PAGE CONTENT *** -->

    

 <!--   
         ===============
         Page Intro Sections
         ===============
         -->

<section id="page-intro">
      <!-- Page Title -->
      <div id="intro-title" class="clearfix">
        <h1>Tomas' Web of Creativity</h1>
      </div>
      <!-- intro paragraphs -->
      <div id="intro-content" class="clearfix">
        <!-- intro paragraph #1 -->
        <p>
          Hello, my name is Tomas Petr. My interests include web app
          development, photography, creating Photoshop fantasies, and
          observing human behavior to better understand people. I strive
          to describe such behaviors in the short stories I write.        </p>
        <!-- intro paragraph #2 -->
        <p>
          I live in Salt Lake City now. Prior to migrating to the U.S.
          from my native Czech Republic, I studied mechanical engineering.
          I’m currently studying web development at Salt Lake Community
          College. I want to learn how to build modern Websites using
          HTLM5, CSS, and JavaScript.        </p>
      </div>
    </section>
        <!-- 
===============
Main Content Sections
===============
-->
<main id="main-section">
      <!-- Page's nav thumbs-->



      <div id="columns-3-frame" class="clearfix">
        
        <!-- Thumb #1-->
        <a href="./codes.php?item=funky" class="clearfix " title="codes page">
          <h2>codes</h2>
          <figure>
            <img src="../../images/codes.png" alt="Codes" class="lightgray" />
          </figure>
        </a>
        <!-- Thumb #2-->
        <a href="./apps.php?item=funky" class="clearfix" title="apps page">
          <figure>
            <img src="../../images/apps.png" alt="Apps" />
          </figure>
          <h2>apps</h2>
        </a>
        <!-- Thumb #3-->
        <a href="./faces.php?item=funky" class="clearfix" title="faces page">
          <h2>faces</h2>
          <figure>
            <img src="../../images/faces.jpg" alt="Faces" />
          </figure>
        </a>
      </div>

    </main>   
    <!-- 
     ===============
     Footer Sections
     ===============
    -->
    <footer id="footer-section" class="clearfix">
        <!-- Left Column -->
        <div id="footer-left">
            <h2>Contact</h2>
            <form action="/action_page.php" method="POST" target="_self" name="contact-form" id="contact-form"
                width="100%" onsubmit="validateFormFx(event)">
                <fieldset>
                    <legend>Hire Me!</legend>

                    <input type="text" name="first-name" id="first-name" placeholder="Your First Name..." class="req" />
                    <label for="first-name">*</label>
                    <br /><br />
                    <input type="text" name="last-name" id="last-name" placeholder="Your Last Name..." class="req" />
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
                    <label for="message">*</label>



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
        <div id="footer-right">
            <div id="credentials">
                <h2>My tools</h2>
                <ul id="footer-tools">
                    
                    <!-- <li>
                        
                            <p>PHP</p>
                            <p><img src="../../images/php-icon.png" alt="php" /></p>
                        
                    </li>
                    <li>
                        
                            <p>JavaScript</p>
                            <p><img src="../../images/js-icon.png" alt="javascript" /></p>
                        
                    </li>
                    <li>
                        
                            <p>MySQL</p>
                            <p><img src="../../images/mysql-icon.png" alt="mySql" /></p>
                        
                    </li>
                    <li>
                        
                            <p>BootStrap</p>
                            <p><img src="../../images/bootstrap-icon.png" alt="BootStrap" /></p>
                        
                    </li>
                    <li>
                        
                            <p>VS Code</p>
                            <p>
                                <img src="../../images/vcode-icon.png" alt="Visual Studio Code" />
                            </p>
                        
                    </li>
                    <li>
                        
                            <p>GitHub</p>
                            <p><img src="../../images/git_hub-icon.png" alt="GitHub" /></p>
                        
                    </li>
                    <li>
                            <p>AffinityPhoto</p>
                            <p>
                                <img src="../../images/affinity_photo-icon.png" alt="AffinityPhoto" />
                            </p>
                                            </li>
                    <li>
                        
                            <p>AffinityDesigner</p>
                            <p>
                                <img src="../../images/affinity_designer-icon.png" alt="AffinityDesigner" />
                            </p>
                        
                    </li> -->
                    <?php myToolls($myTools); ?>
                </ul>
            </div>
            <div id="copyright">Copyright © <span id="year"></span> Tomas Petr</div>
            <!-- </div> -->
    </footer>    
  </div>
  <script src="../../scripts/main.js"></script>

</body>

</html>