<?php 
	$first_name = "";
	$last_name = "";
	$email = "";

	if ($invitation) {
		$invitation_id = $invitation->getHash();
		$first_name = $invitation->getFirstName();
		$last_name = $invitation->getLastName();
		$email = $invitation->getEmail();
	}
?>

<div id="container">
	<header>

    </header>
    
    <div id="main">
		<form action="/register.php" method="post">
			<input type="hidden" name="incoming" value="true">
			<input type="hidden" name="invitation_id" value="<?php echo($invitation_id) ?>">
			<b>Register</b><br>
			<div>
				<label for="email">Email Address:</label>
				<input type="text" name="email" size="24" maxlength="48" value="<?php echo($email) ?>">
			</div>
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" size="24" maxlength="24">
			</div>
			<div>
				<label for="password_repeat">Confirm Password:</label>
				<input type="password" name="password_repeat" size="24" maxlenght="24">
			</div>
			<div>
				<label for="firstName">First Name:</label>
				<input type="text" name="firstName" size="24" maxlength="" value="<?php echo($first_name) ?>">
			</div>
			<div>
				<label for="lastName">Last Name:</label>
				<input type="text" name="lastName" size="24" maxlength="" value="<?php echo($last_name) ?>">
			</div>		
			<input type="submit" value="Register">
		</form>
    </div>

    <footer>

    </footer>
</div>