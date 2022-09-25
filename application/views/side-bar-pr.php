<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url();?>/CSS/side-bar-product.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a80a9def81.js" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body translate="no" >
  <nav class="sidenav">
    <ul class="main-buttons">
      <li>
        <i class="fa fa-circle fa-2x"></i>
        <a href="noithat" style="color: white; text-decoration: none;t">Home</a> 
      </li>
      <li>
        <i class="fa fa-circle fa-2x"></i>
        Dolor Sit
        <ul class="hidden">
          <li>Dark</li>
          <li>Wings</li>
          <li>Dark</li>
          <li>Words</li>
          <li>John SNUUW</li>
        </ul>
      </li>
      <li>
        <i class="fa fa-circle fa-2x"></i>
         Consectetur
         <ul class="hidden">
          <li>Lorem</li>
          <li>Ipsum</li>
          <li>Dolor</li>
        </ul>
      </li>
      <li id='login'>
        <a style='color:white; text-decoration: none;'
        <?php
            if(!isset($_SESSION)) { 
              session_start(); 
            } 
            if (!isset($_SESSION['name'])) {
            ?> href='dang_ky' 
            <?php } else { ?> 
              href='user_quanli' <?php } ?>
              ><i class='fa-solid fa-user'><?php 
              if (isset($_SESSION['name'])) {
                echo ' ' . $_SESSION['name'];
              }
            ?></i></a>

      </li>
    </ul>
	</nav>
 
  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</body>

</html>