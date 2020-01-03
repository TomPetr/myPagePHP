<?include '../data/page-intro/faces-intro.php' ?>
<?include '../data/page-posts/faces-posts.php' ?>
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

        <main id="main-section">
            <section class="face-posts-wrapper" class="clearfix">
            <?php
            
               foreach ($facesPosts as $post) { 
                   
                   if($post['title'] == "B&W Theme" || $post['title'] == "Funky Theme") { ?>
                      <article class="face-post" class="clearfix">
                    <a href="../pages/faces.php?item=<?php echo $post['item']; ?>" target="_self" class="face-description clearfix">
                        <h2 class="clearfix"><?php echo $post['title']; ?></h2>
                        <figure class="no-gap">
                            <img src="../images/<?php echo $post['face']; ?>" alt="<?php $post['title']; ?>" title="<?php echo $post['title']; ?>" class="face-img" />
                        </figure>
                        <p>
                            <?php echo $post['text']; ?>
                        </p>
                    </a>
                </article>
            <?php
                   } elseif($post['title'] == "Squared Theme") { ?>
                <article class="face-post" class="clearfix">
                    <a href="../pages/squares/index.php" target="_self" class="face-description clearfix">
                        <h2 class="clearfix"><?php echo $post['title']; ?></h2>
                        <figure class="no-gap">
                            <img src="../images/<?php echo $post['face']; ?>" alt="<?php $post['title']; ?>" title="<?php echo $post['title']; ?>" class="face-img" />
                        </figure>
                        <p>
                            <?php echo $post['text']; ?>
                        </p>
                    </a>
                </article>
                <?php
                   }
               }
            ?>   
            
                
            </section>
        </main>