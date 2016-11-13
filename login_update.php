<?php include "db.php"; ?>
<?php include "functions.php"; ?>  	
<?php UpdateTable(); ?>

<?php include "includes/header.php"; ?>
<div class="contanier">
	<div class="col-sm-6">
		<h1 class="text-center">Update Users</h1>
		<form action="login_update.php" method="post">
			<div class="form-group">
				<label for="username">username</label>
				<input type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="password">password</label>
				<input type="password" class="form-control" name="password">
			</div>
			<div class="form-group">
				<select name="id" id="">
					<?php
						showAllData();
					?>			
				</select>
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
		</form>
	</div>
<?php include "includes/footer.php"; ?>