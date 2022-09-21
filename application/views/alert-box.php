<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url();?>/CSS/alert-box.css">
	<title>Document</title>
</head>
<body>
	<div id="hellobar-bar" class="regular closable">
    <div class="hb-content-wrapper">
        <div class="hb-text-wrapper">
            <div class="hb-headline-text">
                <p><span><?php echo $alert; ?></span></p>
            </div>
        </div>
    </div>
    <div class="hb-close-wrapper">
        <a href="javascript:void(0);" class="icon-close" onclick="$('#hellobar-bar').fadeOut()">&#10006;</a>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>