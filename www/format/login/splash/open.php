<?php
$style = "";
if ($_SESSION[""] == "login_failed") {
	$style = "border: 2px solid red;";
}
?>

<b>Log In</b>
<form action="/login.php" method="post" style="<?php $style ?>">
	<input type="hidden" name="incoming" value="true">
	<div>
		<label for="username">Email:</label>
		<input type="text" name="email" size="24" maxlength="64">
	</div>
	<div>
		<label for="password">Password:</label>
		<input type="password" name="password" size="24" maxlength="24">
	</div>
	<input type="submit" value="Log In">
</form>