<?php
$error = $_SESSION["flash"];
?>


<?php if ($error) { ?>
<div style="border: 1px solid red;">
	<?php echo($error) ?>
</div>

<?php } ?>

<form action="/invite.php" method="post">
	<input type="hidden" name="incoming" value="true">
	<b>Send Invitation</b>
	<div>
		<label for="firstName">First Name:</label>
		<input type="text" name="first_name" size="24" maxlength="24">
	</div>
	<div>
		<label for="lastName">Last Name:</label>
		<input type="text" name="last_name" size="24" maxlength="24">
	</div>
	<div>
		<label for="email">Email Address:</label>
		<input type="text" name="email" size="24" maxlength="48">
	</div>
	<input type="submit" value="Send Invitation">
</form>