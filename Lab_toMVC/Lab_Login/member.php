<?php

if (! isset ( $_COOKIE ["userName"] )) {
	setcookie ( "lastPage", "member.php" );
	header ( "Location: login.php" );
	exit ();
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
<?php require("script_css.php") ?>
</head>
<body>
	<div id="labPage" data-role="page" data-theme="d">
		
		<?php include("header.php"); ?>
			
		<div data-role="content">
			For member only.
		</div>

	</div>
	<!-- page -->

</body>
</html>
