<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/CSS/user_quanli.css">
	<title>Document</title>
	 <script>
  		window.console = window.console || function(t) {};
	</script>
	<script>
  		if (document.location.search.match(/type=embed/gi)) {
    	window.parent.postMessage("resize", "*");
  		}
	</script>
</head>

<body>
	  <nav>
	   <a href="#first"><i class="far fa-user"></i></a>
	   <a href="#second"><i class="fas fa-briefcase"></i></a>
	   <a href="#third"><i class="far fa-file"></i></a>
	   <a href="log_out"><i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i></a>
	 </nav>
	  
	<div class= 'container'> 

	  <section id= 'first'>
	   	<form action="" align="center">
	   		<h1>CÀI ĐẶT TÀI KHOẢN CHUNG</h1>
	   		<hr style="border-width: 3px; background-color: black;">
	   		<div class="form_acc">
		   		<div class="name_account">
		   			<div class="con1">
			   			<a><h2> Tên người dùng: <?php if (isset($_SESSION['name'])) {
			   				echo $_SESSION['name'];
			   			} ?></h2></a>
		   			</div>
		   			<div class="con2">
		   				<a href="#"><h2 style="color: rgb(62, 148, 247);">chỉnh Sửa</h2></a>
		   			</div>
		   			<br>
		   		</div>
		   		<br>
		   		<br>
		   		<br>
		   		<hr style="border-width: 2px;">
		   		<div class="name_account">
		   			<div class="con1">
			   			<a><h2> Tên tài khoản: <?php if (isset($_SESSION['acc'])) {
			   				echo $_SESSION['acc'];
			   			} ?></h2></a>
		   			</div>
		   			<div class="con2">
		   				<a href="#"><h2 style="color: rgb(62, 148, 247);">chỉnh Sửa</h2></a>
		   			</div>
		   			<br>
		   		</div>
		   		<br>
		   		<br>
		   		<br>
		   		<hr style="border-width: 2px;">
		   		<div class="name_account">
		   			<div class="con1">
			   			<a><h2> Mật khẩu: <?php if (isset($_SESSION['pass'])) {
			   				echo $_SESSION['pass'];
			   			} ?></h2></a>
		   			</div>
		   			<div class="con2">
		   				<a href="#"><h2 style="color: rgb(62, 148, 247);">chỉnh Sửa</h2></a>
		   			</div>
		   			<br>
		   		</div>
	   		</div>
	   		<br>
	   		<br>
	   		<hr style="border-width: 3px; background-color: black; margin-top: 50px;">
	   	</form>
	  </section>
	  
	  <section id= 'second'>
	    <form action="" >
	    	<input type="text" name="sua_acc">
	    	<label for="sua_acc"> 2</label>
	    </form>
	  </section>
	  
	 <section id= 'third'>
	   <form action="" >
	    	<input type="text" name="sua_acc">
	    	<label for="sua_acc"> 3</label>
	    </form>
	  </section>
	  
	</div>

</body>
</html>