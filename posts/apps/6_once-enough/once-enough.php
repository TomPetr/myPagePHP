<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- description -->
    <title>Once is Enough | Tomas Petr</title>
    <!-- stylesheets -->
    <link rel="stylesheet" href="../../../css/post.css">
    <link rel="stylesheet" href="./form-validate.css">
    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Raleway+Dots&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" href="../../../favicon.ico" type="image/ico" sizes="16x16" />

</head>

<body>
    <div class="page-wrapper">
        <!--   
        ===============
        Header Sections
        ===============
        -->
        <header class="clearfix">
            <a href="../../../index.php">
                <img src="../../../images/logo.png" alt="logo">
                <p>Web Development</p>
            </a>
        </header>
        <!--   
         ===============
         Page Intro Sections
         ===============
         -->
        <section id="page-intro">
            <!-- Page Title -->
            <div id="intro-title" class="clearfix">
                <h1>Contact Form</h1>
                <h2>Prevent a Form from Resubmitting </h2>
            </div>
    </div>
    </section>


    <!-- 
===============
Main Content Sections
===============
-->
<?php  // create table
require_once("config.php"); ?>

    <main id="main-content-wrapper">
        <!-- Page's nav thumbs-->
        <section id="post">
            <p>
                Contact Form.
            </p>

            <section id="app">

            <?php 
            if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM tp_MyGuests WHERE  id = '$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<p style='color: red; font-size: 1.5rem'>Hello ".$row["firstname"].". Thank you for contacting me. I received your message:<br><b><em>\"".$row["msg"]."\"</b></em><br>I'll get ahold of you shortly.</p>";
    }
} else {
    echo "0 results";
}
            
            } else  { ?>

<form action="./redirect_1.php" method="POST" target="_self" name="my-form" id="my-form" width="100%"
                    onsubmit="validateFormFx(event)">
                    <fieldset>
                        <legend>Hire Me!</legend>

                        <input type="text" name="first-name" id="first-name" placeholder="Your First Name..."
                            class="req imp-el" />
                        <label for="first-name">*</label>
                        <br /><br />
                        <input type="text" name="last-name" id="last-name" placeholder="Your Last Name..."
                            class="req" />
                        <label for="last-name">*</label>
                        <br /><br />
                        <input type="email" name="email" id="email" placeholder="Your Email..." class="req imp-el" />
                        <label for="email">*</label>
                        <br /><br />
                        <input type="tel" name="phone" id="phone" placeholder="000-000-0000"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" />
                        <label for="phone"></label>
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
                        <input type="submit" name="submit-form" id="submit" value="Submit!" />
                    </fieldset>
                </form>


          <?php 

            } ?>

                


            </section>
            
          <!-- <p>The whole PHP code looks like this:</p>
                <article class="snippet">
                    <script src="https://gist.github.com/TomPetr/edec21d0741e934005dc7a9f5d9c8f26.js"></script>
                </article> -->

        </section>
    </main>
    <!-- 
     ===============
     Footer Sections
     ===============
    -->
    <footer id="footer-section" class="clearfix">

        <div id="copyright">Copyright © <span id="year"></span> Tomas Petr</div>

    </footer>
    </div>
    <script src="../../../scripts/main.js"></script>
    <!-- <script src="./form-valid.js"></script> -->

</body>

</html>