<?php
require_once('lib/core.php');

// LOGGED-IN USERS SHOULDN'T BE HERE
if ($_SESSION["authenticated"]) {
	//header("Location: /home.php");
}

// if an invite code is required but none is supplied...
if ($_PREFS->getRegistration() == "invite" && !$inputs["invitation_id"]) {
	// give them a form to enter it.
	include_once('shell/start.php');
	include_once('format/registration/register/invitation.php');
	include_once('shell/end.php');
	exit();
}

if ($inputs["invitation_id"]) {
	$invitation = InvitationQuery::create()->filterByRedeemed(false)->findOneByHash(sanitize($inputs["invitation_id"], 'text'));
	if (!$invitation) {
		include_once('shell/start.php');
		include_once('format/registration/register/invitation.php');
		include_once('shell/end.php');
		exit();
	}
}


// otherwise, if we're not in incoming mode...
if (($_PREFS->getRegistration() == "invite" && $inputs["invitation_id"]) || $_PREFS->getRegistration() == "open") {
	// give them the reg form
	include_once('shell/start.php');
	include_once('format/registration/register/form.php');
	include_once('shell/end.php');
}

// should only get here if a required invite code is entered or registration is open.
if ($is_incoming) {

	$result = true;
	// run a few tests and create the user
	// do the passwords match?
	if ($inputs["password"] != $inputs["password_repeat"]) {
		$result = false;
	}
	
	// do we already have a user with that email?
	$matchingUser = UserQuery::create()->findOneByEmail(sanitize($inputs["email"], 'text'));
	if ($matchingUser) {
		$result = false;
	}
	
	if ($result) {
		$pw = sanitize($inputs["password"], "text");
		//echo ("ENTERED PASSWORD: " . $pw);
		$cr = User::encrypt_password(sanitize($inputs["password"], "text"));
		//echo("ENCRYPTED PASSWORD: " . $cr);
		
		$user = new User();
		$user->setEmail(sanitize($inputs["email"], "text"));
		$user->setPassword(User::encrypt_password(sanitize($inputs["password"], 'text')));
		// temporary...
		$user->setVerified(true);
		$user->setActive(true);
		$user->setTermsAccepted(true);
		$result = $user->save();
		$user_id = $user->getId();
	}
	
	// redeem the invitation
	if($invitation) {
		$invitation->setRedeemed(true);
		$invitation->save();
	}
	
	// create the profile and prefs
	if ($result) {
		$profile = new Profile();
		$profile->setUserId($user_id);
		$result = $profile->save();

		$prefs = new Preference();
		$prefs->setUserId($user_id);
		$result = $prefs->save();
	}
	
	// take them to the login page
	header("Location: /login.php");
}
?>

