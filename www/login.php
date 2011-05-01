<?php
require_once('lib/core.php');

$title = "Log In";

if ($is_incoming) {
	$input_email    = sanitize($inputs["email"], 'text');
	$input_password = sanitize($inputs["password"], 'text');

	$requested_user = UserQuery::create()->findOneByEmail($input_email);
	
	$auth_result = User::authenticate($requested_user->getEmail(), $input_password);
	
	if ($auth_result) {
		$_SESSION["authenticated"] = true;
		$_SESSION["user"] = $requested_user->getEmail();
	} else {
		die("Nope, login failure");
	}
}

if ($_SESSION["authenticated"]) {
	header("Location: /home.php");
}

include('shell/start.php');
include('format/login/splash/open.php');
include('shell/end.php');
?>