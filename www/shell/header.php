<?php
	$full_name = "Not Logged In";
	$links = array();
	
	if ($_SESSION["authenticated"] == true) {
		$user = UserQuery::create()->findOneByEmail($_SESSION["user"]);
		$profile = ProfileQuery::create()->findOneByUserId($user->getId());	
		$full_name = $profile->getFirstName() . " " . $profile->getLastName();
		$links["Logout"] = "/logout.php";
		$links["Profile"] = "/profile.php";
		$links["Invite"] = "/invite.php";
	} else {
		$links["Log In"] = "/login.php";
		$links["Register"] = "/register.php";
	}
	
	
?>

<header>
	<div id="header-container">
		<div id="userinfo-container">
			<div id="userinfo">userinfo</div>
		</div>
		<div id="navigation">
			<a href="/home.php">Home</a>
			<a href="/nominations.php">Nominations</a>
		</div>
	</div>
</header>
