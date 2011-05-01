<?php
include('lib/core.php');

$user = UserQuery::create()->findOneByEmail($_SESSION["user"]);
if (!$user) {
	header("Location: /login.php");
}

if ($is_incoming) {
	$first_name = sanitize($inputs["first_name"], 'string');
	$last_name  = sanitize($inputs["last_name"], 'string');
	$email      = sanitize($inputs["email"], 'string');
	$hash       = sha1($email . date("YmdHis"));

	// CHECK THAT THE EMAIL ADDRESS HAS NOT ALREADY BEEN INVITED.
	$existing_invitation = InvitationQuery::create()->findOneByEmail($email);
	if ($existing_invitation) {
		$_SESSION["flash"] = "A user with that email address has already been invited";
		include('shell/start.php');
		include('format/invite/form.php');
		include('shell/end.php');
		exit();
	}
	
	// CHECK THAT THE USER DOES NOT ALREADY EXIST.
	$existing_user = UserQuery::create()->findOneByEmail($email);
	if ($existing_user) {
		$_SESSION["flash"] = "A user with that email address already exists";
		include('shell/start.php');
		include('format/invite/form.php');
		include('shell/end.php');
		exit();
	}
	
	$invite = new Invitation();
	$invite->setUserId($user->getId());
	$invite->setFirstName($first_name);
	$invite->setLastName($last_name);
	$invite->setEmail($email);
	$invite->setHash($hash);
	//$invite->setCreatedAt("now()");
	//$invite->setModifiedAt("now()");
	$invite->save();
	
	$_SESSION["flash"] = "Invitation successful.";
	include('shell/start.php');
	include('format/invite/form.php');
	include('shell/end.php');
	exit();
}
include('shell/start.php');
include('format/invite/form.php');
include('shell/end.php');

?>
