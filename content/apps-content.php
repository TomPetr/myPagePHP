<?include '../../data/page-intro/apps-data.php' ?>
<?include '../../data/page-posts/apps-posts.php' ?>
        <!--   
         ===============
         Page Intro Sections
         ===============
         -->
        <section id="page-intro">
            <!-- Page Title -->
            <div id="intro-title" class="clearfix">
                <h1><?php echo $appsTitle ?></h1>
            </div>
            <!-- intro paragraphs -->
            <div id="intro-content" class="clearfix">
                <!-- intro paragraph #1 -->
                <p>
                   <?php 
          echo $appsText[0]['text'];
          ?>
                </p>
                <!-- intro paragraph #2 -->
                <p>
                  <?php 
          echo $appsText[1]['text'];
          ?>
                </p>
            </div>
        </section>

        <!-- 
===============
Main Content Sections
===============
-->

        <main>

            <section id="posts" class="clearfix">
            <?php
foreach ($appsPosts as $post) {
    echo '<article class="codes-post">
                    <a href="../posts/apps/3_asynchronous/asynchronous.html">
                        <h2>Stopping Asynchronous Misbehavior </h2>
                        <p>If I want to display a few images on my webpage I can hardcode each image\'s position in HTML
                            and then hardcode the source of each picture. But what about if I want to display entire
                            image gallery? In that case, that case, I pulled src for each image from JSON file. And it\'s
                            when JavaScript becomes the loose cannon, it\'s when it becomes Asynchronous. </p>
                        <div class="post-info" class="clearfix"><img src="../../images/js-icon.png" alt="javascript"
                                class="no-gap">
                            <span>November 28, 2019</span>
                        </div>
                    </a>
                </article>';
}
            ?>

                <article class="codes-post">
                    <a href="../posts/apps/3_asynchronous/asynchronous.html">
                        <h2>Stopping Asynchronous Misbehavior </h2>
                        <p>If I want to display a few images on my webpage I can hardcode each image's position in HTML
                            and then hardcode the source of each picture. But what about if I want to display entire
                            image gallery? In that case, that case, I pulled src for each image from JSON file. And it's
                            when JavaScript becomes the loose cannon, it's when it becomes Asynchronous. </p>
                        <div class="post-info" class="clearfix"><img src="../../images/js-icon.png" alt="javascript"
                                class="no-gap">
                            <span>November 28, 2019</span>
                        </div>
                    </a>
                </article>
                <article class="codes-post clearfix">
                    <a href="../posts/apps/4_responsive-viewer/responsive-viewer.html">
                        <h2>Responsive Image Viewer</h2>
                        <p>This snippet shows how to deal with viewing both portrait and landscape oriented pictures in
                            the image viewer which dynamically changes its width-to-height ratio, depending on the
                            devise's screen size and orientation. All made dynamically, using vanilla javascript and
                            some CSS.</p>
                        <div class="post-info" class="clearfix"><img src="../../images/js-icon.png" alt="javascript"
                                class="no-gap">
                            <span>November 30, 2019</span>
                        </div>
                    </a>
                </article>
                <article class="codes-post clearfix">
                    <a href="../posts/apps/5_form-valid/form-valid.html">
                        <h2>Give some Form to this Form</h2>
                        <p>HTML Contact Forms are an essential part of the webpage. All serious ones should to have it.
                            If we want our viewers, potential customers, or business partners to get ahold of us, we
                            should have clear, user friendly, funcionning and intuitive Contact Form on our site. If it
                            misses any of these features, the communication may stop even before it starts. I created
                            this simple form to swhow all of it can be done with 20 lines of code. </p>
                        <div class="post-info" class="clearfix"><img src="../../images/js-icon.png" alt="javascript"
                                class="no-gap">
                            <span>December 5, 2019</span>
                        </div>
                    </a>
                </article>
            </section>
        </main>
       