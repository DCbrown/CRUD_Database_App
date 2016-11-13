<?php include "db.php"; ?>
<?php include "functions.php"; ?>

<?php include "includes/header.php"; ?>
<div class="contanier">
	<div class="col-md-offset-4 col-md-3">
		<h1 class="text-center">Read Users</h1>
		<pre>
			<?php readData(); ?>	
		</pre>
	</div>
<?php include "includes/footer.php"; ?>