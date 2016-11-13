<?php include "db.php"; ?>
<?php include "functions.php"; ?>  	
<?php deleteRows(); ?>
<?php include "includes/header.php"; ?>
<div class="contanier">
	<div class="col-sm-6">
		<h1 class="text-center">Delete Users</h1>
		<form action="login_delete.php" method="post">
			<div class="form-group">
				<label for="username">username</label>
				<input type="text" class="form-control" name="username" placeholder="Disabled Delete Only..." disabled>
			</div>
			<div class="form-group">
				<label for="password">password</label>
				<input type="password" class="form-control" name="password" placeholder="Disabled Delete Only..." disabled>
			</div>
			<div class="form-group">
				<label for="select">select key</label>
				<select name="id" id="">
					<?php
						showAllData();
					?>			
				</select>
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="DELETE">
		</form>
	</div>
<?php include "includes/footer.php"; ?>