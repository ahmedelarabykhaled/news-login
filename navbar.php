<link rel="stylesheet" href="nav_style.css" />

<?php 
session_start();


if(!isset($_SESSION['login']))
{
	$_SESSION['login'] = '<a class="btn btn-success mr-3" href="testlogin.php">login</a>';
}

if(isset($_SESSION['loginuser']) )
{
	$user = $_SESSION['loginuser'];
//	session_destroy();
}

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">El<span>A</span>raby <span>N</span>ews</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
		<?php 
		if(isset($user))
		{
			echo '<P class="n">HI '.$user.'</p>';
		}
		echo $_SESSION['login'];
		?>
      
      <a class="btn btn-success" href="signup.php">sign up</a>
    </form>
  </div>
</nav>