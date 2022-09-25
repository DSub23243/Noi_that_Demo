    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/style1.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/search-btn.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/a80a9def81.js" crossorigin="anonymous"></script>


<div class="menu">
  <header>
    <ul>
      <li><a href="noithat">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="Product_pages">Products</a></li>
      <li><a href="#">Contact</a></li>
      <li>
        <div class="search">
          <form id="form_search" >
            <input class="btn_menu" type="search" required>
            <i class="fa fa-search"></i>
          </form>
      </li>
      <li>
        <div class="shopping-btn">
          <form id="form_shopping">
            <a href="" class="shopping_btn"></a><i class="fa fa-shopping-cart"></i></a>
          </form>
        </div>
      </li>
      <li id='login'>
        <a <?php
            if(!isset($_SESSION)) { 
              session_start(); 
            } 
            if (!isset($_SESSION['name'])) {
            ?> href='dang_ky' 
            <?php } else { ?> 
              href='user_quanli' <?php } ?>
              ><i class='fa-solid fa-user'><?php 
              if (isset($_SESSION['name'])) {
                echo $_SESSION['name'];
              }
            ?></i></a>

      </li>

    </ul>
  </header>

</div>