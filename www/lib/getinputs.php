<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$inputs = $_POST;
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$inputs = $_GET;
}

$is_incoming = false;
if (isset($inputs["incoming"])) {
	$is_incoming = true;
}