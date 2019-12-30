<?include '../../data/page-intro/faces-data.php' ?>
<?include '../../data/page-posts/faces-posts.php' ?>
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
            <?php
                foreach ($facesPosts as $post) { ?>





                    <article class="face-post" class="clearfix">
                    <a href="../../faces/<?php echo $post['slug']; ?>" target="_self" class="face-description clearfix">
                        <h2 class="clearfix"><?php echo $post['title']; ?></h2>
                        <figure class="no-gap">
                            <img src="../../images/<?php echo $post['face']; ?>" alt="<?php $post['title']; ?>" title="<?php echo $post['title']; ?>" class="face-img" />
                        </figure>
                        <p>
                            <?php echo $post['text']; ?>
                        </p>
                    </a>
                </article>";
                <?php
                }
                ?>
                
            </section>
        </main>