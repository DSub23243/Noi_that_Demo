<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" content="Sahil Kumar" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Tabbed Style Login & Registration Form Using CSS3 & jQuery</title>
    <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&amp;subset=latin,latin-ext'>
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/signin_signup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/CSS/alert-box.css">
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script type="text/javascript" src="<?php echo base_url();?>/JS/login-function.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body translate="no" >

    

  <div class="materialContainer">
    <form action="login_data" method="post">
       <div class="box">

          <div class="title">LOGIN</div>

          <div class="input">
             <label for="name">Username</label>
             <input type="text" name="acc" id="name" required>
             <span class="spin"></span>
          </div>

          <div class="input">
             <label for="pass">Password</label>
             <input type="password" name="pass" id="pass" required>
             <span class="spin"></span>
          </div>

          <div class="button login">
             <button type="submit" name="btn-submit"><span>GO</span> <i class="fa fa-check"></i></button>
          </div>

          <a href="" class="pass-forgot">Forgot your password?</a>

       </div>
    </form>
    <form action="insert_data" method="post">
       <div class="overbox">
          <div class="material-button alt-2" ><span class="shape"></span></div>

          <div class="title">REGISTER</div>

          <div class="input">
             <label for="reacc-name">Username</label>
             <input type="text" name="name" id="reacc-name">
             <span class="spin"></span>
          </div>

          <div class="input">
             <label for="regname">Email</label>
             <input type="text" name="reacc" id="regname">
             <span class="spin"></span>
          </div>

          <div class="input">
             <label for="regpass">Password</label>
             <input type="password" name="repass" id="regpass">
             <span class="spin"></span>
          </div>

          <div class="input">
             <label for="reregpass">Repeat Password</label>
             <input type="password" name="rerepass" id="reregpass">
             <span class="spin"></span>
          </div>

          <div class="button">
             <button type="submit" name="btn-submit-re"><span>GO</span></button>
          </div>
    </form>

       </div>
    </div>
</body>
</html>