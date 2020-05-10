<hr>

<a href="index.php">A főoldal</a>
<?php if(!IsUserLoggedIn()) : ?>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=login">Bejelentkezés</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=register">Regisztráció</a>
<?php else : ?>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=test">Permission test</a>

	<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] >= 1) : ?>
		<span> &nbsp; || &nbsp; </span>
		<a href="index.php?P=users">User list</a>
		<span> &nbsp; | &nbsp; </span>
		<a href="index.php?P=list_worker">List workers</a>
		<span> &nbsp; | &nbsp; </span>
		<a href="index.php?P=add_worker">Add worker</a>
		<span> &nbsp; | &nbsp; </span>
		<a href="index.php?P=upload">Upload image</a>
		<span> &nbsp; || &nbsp; </span>
	<?php else : ?>
		<span> &nbsp; | &nbsp; </span>
	<?php endif; ?>

	<a href="index.php?P=logout">Logout</a>
<?php endif; ?>

<hr>