<?include '../../data/page-intro/codes-data.php' ?>
        <!--   
         ===============
         Page Intro Sections
         ===============
         -->
        <section id="page-intro">
            <!-- Page Title -->
            <div id="intro-title" class="clearfix">
                <h1><?php echo $codesTitle ?></h1>
            </div>
            <!-- intro paragraphs -->
            <div id="intro-content" class="clearfix">
                <!-- intro paragraph #1 -->
                <p>
                    <?php 
          echo $codesText[0]['text'];
          ?>
                </p>
                <!-- intro paragraph #2 -->
                <p>
                  <?php 
          echo $codesText[1]['text'];
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
                <article class="codes-post clearfix">
                    <a href="../posts/codes/1_equal-height/eqial-height.html">
                        <h2>Equal Height Opportunity</h2>
                        <p>Do you have on your website the columns with different length of their content? Do you want
                            them all to take the same
                            height because it looks much nicer? Do you want to want to use javascript instead of CSS to
                            control them, because
                            it's more fun and more controlling? There's how I made it.</p>
                        <div class="post-info" class="clearfix"><img src="../../images/js-icon.png" alt="javascript"
                                class="no-gap">
                            <span>November 17, 2019</span>
                        </div>
                    </a>
                </article>
                <article class="codes-post">
                    <a href="../posts/codes/2_not-cropped-thumbnails/not-cropped.html">
                        <h2>Not Cropped Thumbnails</h2>
                        <p>This very simple code snipped shows how to display the whole beauty of images in thumbnails
                            gallery. All thumbnails have the same sizes, and width-to-height ratio, but the images
                            don’t. I don’t want let anything to retouch my images in the gallery, I don’t want my images
                            to be cropped.</p>
                        <div class="post-info" class="clearfix"><img src="../../images/js-icon.png" alt="javascript"
                                class="no-gap">
                            <span>November 18, 2019</span>
                        </div>
                    </a>
                </article>
            </section>
        </main>
        