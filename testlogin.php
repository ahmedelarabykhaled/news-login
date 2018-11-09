<link rel="stylesheet" href="boot1/css/bootstrap.min.css"/>
<link rel="stylesheet" href="login_style.css"/>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">





<?php

include 'navbar.php';

$con = mysqli_connect("localhost","root","","news");

//session_start();

?>
<div class="test w-100">

<form class="w-25" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
	<p>User Name : </p>
	<input class="form-control" type="text" name="uname" autocomplete="off" />
	
	<br>
	
	<p>Password	 : </p>
	<input class="form-control" type="password" name="upass" />
	
	<input name="log" type="submit" class="btn btn-success mt-3" />
</form>
</div>
<?php 

	if(isset($_POST['log']))
	{
		$query = "select * from admins";
		$res = mysqli_query($con,$query);
		
		while($rows = $res->fetch_assoc())
		{
			if($rows['username'] == $_POST['uname'] && $rows['password'] == $_POST['upass'])
			{
				$_SESSION['loginuser'] = $_POST['uname'];
				$_SESSION['login'] = '<a class="btn btn-success mr-3" href="logout.php">logout</a>';
				header ('location:index.php');
			}
		}
	}
	
?>
<script src="boot1/js/jquery-3.3.1.min.js"></script>
		<script src="boot1/js/popper.min.js"></script>
		<script src="boot1/js/bootstrap.min.js"></script>