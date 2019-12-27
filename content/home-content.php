<?include '../../data/page-intro/home-data.php' ?>
 <!--   
         ===============
         Page Intro Sections
         ===============
         -->

<section id="page-intro">
      <!-- Page Title -->
      <div id="intro-title" class="clearfix">
        <h1><?php echo $homeTitle ?></h1>
      </div>
      <!-- intro paragraphs -->
      <div id="intro-content" class="clearfix">
        <!-- intro paragraph #1 -->
        <p>
          <?php 
          echo $homeText[0]['text'];
          ?>
        </p>
        <!-- intro paragraph #2 -->
        <p>
          <?php 
          echo $homeText[1]['text'];
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
      <!-- Page's nav thumbs-->



      <div id="columns-3-frame" class="clearfix">
        <!-- Thumb #1-->
        <a href="../../pages/codes.html" class="clearfix " title="codes page">
          <h2>codes</h2>
          <figure>
            <img src="../../images/codes.png" alt="Codes" class="lightgray" />
          </figure>
        </a>
        <!-- Thumb #2-->
        <a href="../../pages/apps.html" class="clearfix" title="apps page">
          <figure>
            <img src="../../images/apps.png" alt="Apps" />
          </figure>
          <h2>apps</h2>
        </a>
        <!-- Thumb #3-->
        <a href="../../pages/faces.html" class="clearfix" title="faces page">
          <h2>faces</h2>
          <figure>
            <img src="../../images/faces.jpg" alt="Faces" />
          </figure>
        </a>
      </div>

    </main>