<!doctype html>
<html lang="en">

<!--Included head.php file -->
<?php include("head.php");?>
<title><?php echo $title ?>Portfolio</title>

<body class="text-center">

  <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

    <!--Included head.php file -->
    <?php include("header.php");?>

    <div class="content-wrap about">
      <div class="col-6 image">
        <img src="images/sd-about.png" />
      </div>

      <div class="col-6 text">
        <h2>Steve Dillon</h2>
        <p class="sub-title">Web / Graphic Designer, Photographer, Motion Graphics Artist with<br> an eye for classic composition.</p>
        <p class="about-text">During my formal art training, I was captivated by drawing, painting, printmaking and photography. Learning the fundamentals of these disciplines and the advanced concepts of color theory, layout, and composition employed in the classic, non-digital arts has greatly benefited my design career. In addition to art, I also learned the complex practice of technical writing. These skills allow me to sit down with a new client and help them craft the story that is their company or project using custom imagery, content and digital assets. Whether we tell their story through custom photography that I shoot or with logos, banner ads and websites that I create, each piece is highly unique and meticulously designed to fit each individual client’s goals.</p>

        <p class="about-text">Take a look through my portfolio examples then let’s get in touch and discuss how my unique talents can benefit you and your company or next project.</p>

        <p class="credits"><strong>Clients:</strong> Highliner Boats, Surfline.com, Toshiba, Coldwell Banker</p>
        <p class="credits"><strong>Industries:</strong> Sports, Lifestyle, Travel, Social Media</p>

        <button class="resume-button" type="button" onclick='window.open("http://portfolio.stevedillon.net/steve_dillon_resume.pdf");return false;'>
        <span class="but-text">RESUME</span>
      </button>

      </div>
    </div>


    <!--Included Header php file -->
    <?php include("footer-include.php");?>
  </div>

</body>
</html>