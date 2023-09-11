<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="<?php echo DEFAULT_LANGUAGE; ?>">
<head>
<!-- include header -->
<?php $this->load->view('templates/header.php'); ?>
</head>

<body>
	<div class="preloader-wrapper" id="preloader">
    <div class="motion-line dark-big"></div>
    <div class="motion-line yellow-big"></div>
    <div class="motion-line dark-small"></div>
    <div class="motion-line yellow-normal"></div>
    <div class="motion-line yellow-small1"></div>
    <div class="motion-line yellow-small2"></div>
  </div>

  <!-- include header -->
  <?php $this->load->view('templates/topbar.php'); ?>

  <!-- include navbar -->
  <?php $this->load->view('templates/navbar.php'); ?>

  <!--Content -->
  <?php $this->load->view($main_content); ?>

  <!-- include footer body -->
  <?php $this->load->view('templates/footer.php'); ?>

  <!-- include js -->
  <?php $this->load->view('templates/js.php'); ?>
</body>

</html>