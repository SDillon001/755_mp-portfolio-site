<!doctype html>
<html lang="en">

<!--Included head.php file -->
<?php include("head.php");?>
<title><?php echo $title ?>Portfolio</title>

<body class="text-center">

  <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

    <!--Included head.php file -->
    <?php include("header.php");?>

    <div class="content-wrap surf-stars">
      <div class="col-6 text">
        <h2>Surf Stars</h2>
        <h5>Mobile App</h5>
        <p class="program-descr">Programs Used:</p>
        <p>Adobe Photoshop, HTML, CSS, JS, jQuery UI</p> 

        <h5>What is the App About?</h5>
        <p class="about-text">Surf Stars is a surfing app fan site for surf fans to read about their favorite surfers and their exploits at competitions and surf destinations around the globe. The idea is loosely based on the World Surf League professional surfing rankings website.</p>

        <h5>What problem does it solve?</h5>
        <p class="about-text">This site provides users easy to access to information about their surfers and it’s fun to interact with. With the advent of “Fantasy Surfing”, where users put together a pretend team based on actual athletes and score points when the athletes do well, this app will help users track the accomplishments of individual surfers.</p>

        <h5>Target Audience:</h5>
        <p class="about-text">Anyone who is a fan of surfing or traveling in general. Surfing is a worldwide, multi-billion-dollar sport with throngs of fans who treat the athlete surfers life celebrities. Any minute piece of information is broadcast everywhere, everyday over social and mainstream media.</p>
      </div>

      <div class="col-6 image-grid"> <!-- Image Grid Open Div -->
        <div class="grid-wrap">
          <!-- Image Grid Row 1 -->
          <div class="image-group" data-slide="0">
            <div class="content">
              <div class="content-overlay"></div>
              <img class="image-headshot" src="images/port-grid/branding.jpg" />
              <div class="content-details">
                <h4 class="content-title">Branding</h4>
                <hr>
              </div>
            </div>
          </div>

          <div id="ben-ginsberg" class="image-group" data-slide="1">
            <div class="content">
              <div class="content-overlay"></div>
              <img class="image-headshot" src="images/port-grid/wireframes.jpg" />
              <div class="content-details">
                <h4 class="content-title">Wireframes</h4>
                <hr>
              </div>
            </div>
          </div>
        </div>

        <div class="grid-wrap">
          <!-- Image Grid Row 2 -->
          <div class="image-group" data-slide="3">
            <div class="content">
              <div class="content-overlay"></div>
              <img class="image-headshot" src="images/port-grid/branding.jpg" />
              <div class="content-details two-line">
                <h4 class="content-title">User</h4>
                <hr>
                <h4 class="content-title">Personas</h4>
              </div>
            </div>
          </div>

          <div id="ben-ginsberg" class="image-group" data-slide="4">
            <div class="content">
              <div class="content-overlay"></div>
              <img class="image-headshot" src="images/port-grid/branding.jpg" />
              <div class="content-details two-line">
                <h4 class="content-title">User</h4>
                <hr>
                <h4 class="content-title">Testing</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="grid-wrap">
          <!-- Image Grid Row 2 -->
          <div class="image-group" data-slide="3">
            <div class="content">
              <div class="content-overlay"></div>
              <img class="image-headshot" src="images/port-grid/branding.jpg" />
              <div class="content-details">
                <h4 class="content-title">Prototype</h4>
                <hr>
              </div>
            </div>
          </div>

          <div id="ben-ginsberg" class="image-group stars-link" data-slide="4">
            <div class="content">
              <div class="content-overlay"></div>
              <a href="http://stevedillon.net/surf_stars/index.html" target="_blank"><img class="image-headshot" src="images/port-grid/branding.jpg" /></a>
              <div class="content-details two-line">
                <h4 class="content-title">Project</h4>
                <hr>
                <h4 class="content-title">Link</h4>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- Image Grid Close Div -->
    </div> <!-- End Content Div -->

    <!-- Modal Code Start -->
      <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-interval="false" data-keyboard="true" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>

              <!-- Carousel -->
              <div class="carousel slide" data-interval="false" id="MyCarousel" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                  <!-- 1st Modal in Photo Grid -->
                  <div class="item active">
                    <div class="container">

                      <img class="image-headshot" src="images/web-design/surf-stars/branding.jpg" />

                    </div> <!-- End Container Div -->
                  </div> <!-- End Item -->

                  <!-- 2nd Modal in Photo Grid -->
                  <div class="item">
                    <div class="container">

                      <img class="image-headshot" src="images/web-design/surf-stars/wireframes.jpg" />

                    </div> <!-- End Container Div -->
                  </div> <!-- End Item -->

                </div> <!-- End Carousel Inner -->
              </div> <!-- End Slide Wrapper -->
            </div>
          </div>
        </div>
      </div> <!-- End of Modal -->


    <!--Included Header php file -->
    <?php include("footer-include.php");?>
  </div>

</body>
</html>