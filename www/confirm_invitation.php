<?php
require_once('lib/core.php');

$invitation_id = sanitize($inputs["invitation_id"], 'string');

$invite = InvitationQuery::search()->findOneByHash($invitationId);
if ($invite) {
	header("Location: /register.php");
} else {
	header("Location: /index.php");
}

?>