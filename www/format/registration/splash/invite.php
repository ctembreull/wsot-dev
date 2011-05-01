<div style="width: 100%;">
	<b>Sign Up</b>
	<!--<p>Signup is currently by invitation only.  If you have received an invitation via email,
		enter the invitation code you were provided in the field below and click "Sign Up".</p> -->
	<form action="/register.php" method="POST">
		<div>
			<label for="invitation_id">Invitation:</label>
			<input type="text" name="invitation_id" size="24" maxlength="48">
		</div>
		<input type="submit" value="Sign Up">
	</form>
</div>