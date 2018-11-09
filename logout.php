<link rel="stylesheet" href="boot1/css/bootstrap.min.css" />
<link rel="stylesheet" href="logout_style.css" />

<?php
include 'navbar.php';
//session_start();
?>

<div class="all text-center">
	<div class="inall">
<h2>Hi <?php echo $_SESSION['loginuser'] ?></h2>
	
	<h3>Do You Want To LogOut</h3>
	<form method="get" action="<?php $_SERVER['PHP_SELF'] ?>">

		<input class="btn btn-warning" name="logout" type="submit" />
		</form>
	</div>
	</div>

<?php 
	if(isset($_GET['logout']))
	{
		session_destroy();
header ('location:index.php');
	}
	?>