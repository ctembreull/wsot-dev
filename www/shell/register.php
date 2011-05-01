<?php
include('../lib/core.php');

if ($_SERVER["REQUEST_METHOD"] != "POST") {
	die("CRITICAL ERROR: improper access");
}

