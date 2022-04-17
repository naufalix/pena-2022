<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("views/includes/head.php")?>
</head>
<body>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <?php include("views/includes/header.php")?>
  </header>
  <!-- End Header -->

  <?php if($page=="home"){ include("views/includes/hero.php"); } ?>

  <!-- Main -->
  <main id="main">
    <?php include("views/$page.php"); ?>
  </main>

  <!-- Footer -->
  <?php include("views/includes/footer.php")?>

  <!-- Back to top -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- JS Files -->
  <?php include("views/includes/script.php")?>

</body>

</html>