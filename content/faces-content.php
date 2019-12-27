<?include '../../data/page-intro/faces-data.php' ?>
        <!--   
         ===============
         Page Intro Sections
         ===============
         -->
        <section id="page-intro">
            <!-- Page Title -->
            <div id="intro-title" class="clearfix">
                <h1><?php echo $facesTitle ?></h1>
            </div>
            <!-- intro paragraphs -->
            <div id="intro-content" class="clearfix">
                <!-- intro paragraph #1 -->
                <p>
                   <?php 
          echo $facesText[0]['text'];
          ?> 
                </p>
                <!-- intro paragraph #2 -->
                <p>
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

        <main>
            <section class="face-posts-wrapper" class="clearfix">
                <article class="face-post" class="clearfix">
                    <a href="../../faces/b&w/index.php" target="_self" class="face-description clearfix">
                        <h2 class="clearfix">B&W Theme</h2>
                        <figure class="no-gap">
                            <img src="../../images/b&w.jpg" alt="B&W Theme" title="B&W Theme" class="face-img" />
                        </figure>
                        <p>
                            I created this theme because I like clean and minimalist Web
                            Design. I believe the good look can be achieved even with less
                            graphics and without compromising on page's functionality. The
                            less means an user can focus more on content of the web page. For layout I primarily
                            used CSS Flexbox. The theme is fully responsive.
                        </p>
                    </a>
                </article>
                <article class="face-post" class="clearfix">
                    <a href="../../faces/squares/index.php" target="_self" class="face-description clearfix">
                        <h2>Squared Theme</h2>
                        <figure class="no-gap">
                            <img src=" ../../images/squared.jpg" alt="Squared Theme" title="Funky Theme"
                                class="face-img" />
                        </figure>
                        <p>
                            Creating this theme I experimented how much can be achieved by only using text, couple
                            of images, a few different colors, and Font Awesome icons. For responsive web design I
                            used a Bootstrap CSS framework.
                        </p>
                    </a>
                </article>
                <article class="face-post" class="clearfix">
                    <a href="../../faces/funky/index.php" target="_self" class="face-description clearfix">
                        <h2>Funky Theme</h2>
                        <figure class="no-gap">
                            <img src="../../images/funky.jpg" alt="Funky Theme" title="Funky Theme" class="face-img" />
                        </figure>
                        <p>
                            I have chosen my Funky theme as my main showcase because it... funky. I really enjoyed
                            working on this theme, not only because I let my imagination run wild with the colors
                            and layout, but also because I wanted to be free of any CSS frameworks or more advanced
                            CSS positioning techniques. Old good positions, float and clear, margins and paddings,
                            and Z-index
                            were my best friends while moving the elements to their desired spots. This theme is
                            mobile-friendly.
                        </p>
                    </a>
                </article>
            </section>
        </main>

        