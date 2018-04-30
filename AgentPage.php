<html>
<head>
	<title>Agent Page</title>
	<?php include("Head.php"); ?>
</head>
<body>
<?php include("Header.php"); ?>

<div class="dez-col-100 no-shadow">
	<h1 class="text-center">Branch Details</h1>
	<form method="post" action="#">
		<center>
			<input type="text" placeholder="Branch Name" required class="dez-input-60 dez-input-edit " />
			<input type="text" placeholder="Manager Name" required class="dez-input-60 dez-input-maleuser" />
			<input type="email" placeholder="Email" required class="dez-input-60 dez-input-message" />
			<input type="number" placeholder="Contact Number" required class="dez-input-60 dez-input-phone" />
			<textarea class="dez-input-60 no-shadow dez-input-typing" placeholder="Address..."></textarea><br>
			<input type="submit" value="submit" class="dez-input-20 dez-input-send dez-icon-send" />
			<input type="reset" value="Reset" class="dez-input-20 dez-input-refresh dez-icon-refresh" />
			<input type="button" value="Delete" class="dez-input-20 dez-input-unchecked dez-icon-unchecked" />
			<input type="text" placeholder="Detail Search" required class="dez-input-60 dez-input-search" />
		</center>
	</form>
</div>

<?php include("Footer.php"); ?>
</body>
</html>