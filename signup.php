<link rel="stylesheet" href="boot1/css/bootstrap.min.css" />
<link rel="stylesheet" href="sign_style.css" />
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


<?php include 'navbar.php' ;
$not = "";
?>


<div class="ttt">
<form id="sign" class="w-50 mt-5" method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
	<div class="w-100 text-center">
	<h2 class="text-center mb-5">Welcom There</h2>
	<div class="w-75 mx-auto text-left">
		
				<p class="pt-3">user name : </p>
		
				<input type="text" name="usname" class="form-control" autocomplete="off" />
		
				<p class="pt-3">Password : </p>
		
				<input type="password" name="uspass" class="form-control" />
		
				<p class="pt-3">Retype Password : </p>
				<?php echo $not ?>
		
				<input type="password" name="reuspass" class="form-control " />
		
	<div class="text-center mt-4">
	<input name="sign" class="btn btn-success w-25" type="submit"/>
		</div>
		
		</div>
	</div>
</form>
</div>
<?php
	
	$connect = mysqli_connect("localhost","root","","news");

	
	if(isset($_POST['sign']))
	{
		$not = "";
		if($_POST['usname'] != "" && $_POST['uspass'] != '' && $_POST['reuspass'] != '')
		{
			if($_POST['uspass'] == $_POST['reuspass'])
			{
			$name = $_POST['usname'];
		$pass = $_POST['uspass'];
		
		$q = "insert into admins (username,password) values ('$name','$pass')";
		$result = mysqli_query($connect,$q);
				$_SESSION['loginuser'] = $_POST['usname'];
				$_SESSION['login'] = '<a class="btn btn-success mr-3" href="logout.php">logout</a>';
				header ("location:index.php");
			}
			else
			{
				$not = '<p>Please Enter The Same Password</p>';
			}
		}
		else
		{
			echo '<script type="text/javascript">alert("please fill in all fields");</script>';
		}	
	}
?>



<script src="boot1/js/jquery-3.3.1.min.js"></script>
		<script src="boot1/js/popper.min.js"></script>
		<script src="boot1/js/bootstrap.min.js"></script>