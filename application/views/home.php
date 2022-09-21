<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	h2 {
		border-bottom: 1px solid black;
		padding-bottom: 10px;
	}
</style>
<body>
	<div align="center">
		<h2>các biến mảng</h2>
		<?php foreach ($name_user as $key): ?>
			<li><?php echo $key; ?></li>
		<?php endforeach ?>
	</div>
</body>
