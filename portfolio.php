<!doctype html>
<html lang="en">

<!--Included head.php file -->
<?php include("head.php");?>
<title><?php echo $title ?>Portfolio</title>

<body class="text-center">

  <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

    <!--Included head.php file -->
    <?php include("header.php");?>

    <div class="content-wrap">
      <div class="flex-container">
        <div class="flex-item">
          <a href="/web-design.php"><img src="images/port-grid/web-design.jpg" alt="web-design"></a>
          <h5><a href="/web-design.php">Web Design</a></h5>
        </div>

        <div class="flex-item">
          <a href="/motion-graphics.php"><img src="images/port-grid/motion.jpg" alt="motion-graphics"></a>
          <h5><a href="/motion-graphics.php">Motion Graphics</a></h5>
        </div>
      </div>

    <div class="flex-container">
        <div class="flex-item">
          <a href="/infographics.php"><img src="images/port-grid/infographics.jpg" alt="infographics"></a>
          <h5><a href="/infographics.php">Infographics</a></h5>
        </div>

        <div class="flex-item">
          <a href="/photo-video.php"><img src="images/port-grid/photo-video.jpg" alt="photo-video"></a>
          <h5><a href="/photo-video.php">Photo</a></h5>
        </div>
      </div>
    </div>


    <!--Included Header php file -->
    <?php include("footer-include.php");?>
  </div>

</body>
</html>