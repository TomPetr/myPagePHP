<?include '../data/page-intro/apps-intro.php' ?>
<?include '../data/page-posts/apps-posts.php' ?>
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
                    echo "<article class=\"codes-post\">
                            <a href=\"../posts/apps/$post[slug]\">
                               <h2>$post[title]</h2>
                               <p>$post[text]</p>
                               <div class=\"post-info clearfix\"><img src=\"../../images/$post[img]\" alt=\"$post[categories]\"
                                class=\"no-gap\">
                                   <span>$post[date]</span>
                               </div>
                            </a>
                         </article>";
}
            ?>       
             </section>
        </main>
       