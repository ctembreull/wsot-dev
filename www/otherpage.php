<?php
require('lib/core.php');

$pw = $inputs["pw"];
$cr = User::encrypt_password($pw);

echo($cr);