<!doctype html>
<html lang="en">

<!--Included head.php file -->
<?php include("head.php");?>
<title><?php echo $title ?>Portfolio</title>

<body class="text-center">

  <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

    <!--Included head.php file -->
    <?php include("header.php");?>

    <div class="content-wrap proj-cat">
      <div class="proj-title">
        <h2>Web Design</h2>
      </div>
    </div>

  <div class="content-wrap proj-cat content">
      <div class="flex-container">
        <div class="flex-item proj-cat">
          <a href="/web-design.php"><img src="images/port-grid/web-design.jpg" alt="web-design"></a>
          <h5><a href="/web-design.php">Nalu.Live</a></h5>
        </div>

        <div class="flex-item proj-cat">
          <a href="/motion-graphics.php"><img src="images/port-grid/motion.jpg" alt="motion-graphics"></a>
          <h5><a href="/motion-graphics.php">Stockpile.com</a></h5>
        </div>

        <div class="flex-item proj-cat">
          <a href="/infographics.php"><img src="images/port-grid/infographics.jpg" alt="infographics"></a>
          <h5><a href="/infographics.php">Surf Stars App</a></h5>
        </div>
    </div>
  </div>


    <!--Included Header php file -->
    <?php include("footer-include.php");?>
  </div>

</body>
</html>