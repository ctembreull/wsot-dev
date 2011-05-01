<?php
include_once('lib/core.php');

$page = array('title' => 'Create a Nomination',
              'use_forms' => true);

$header = new h2o('templates/header.html');
echo $header->render(compact('page'));

$user = UserQuery::create()->findOneByEmail($_SESSION["user"]);
if (!$user) {
	header("Location: /login.php");
}

if ($is_incoming) {
	$nom = new Nomination();
	$nom->setUserId($user->getId());
	$nom->setSalutation($inputs["salutation"]);
	$nom->setFirstName($inputs["first_name"]);
	$nom->setLastName($inputs["last_name"]);
	$nom->setGradeLevel($inputs["grade_level"]);
	$nom->setSubject($inputs["subject"]);
	$nom->setStory($inputs["story"]);
	$nom->save();
	
	$nom->getUser()->getFirstName();
	
	//$school_matches = SchoolQuery::create()->filterByState($inputs["school_state"])->filterByName($inputs["school_name"])->find();

}

$user_nominations = NominationQuery::create()->findByUserId($user->getId());
?>

<style>
	.ui-autocomplete-loading { background: white url('images/ui-anim_basic_16x16.gif') right center no-repeat; }
</style>

<div id="container">
	<?php include('shell/header.php'); ?>
	<style type="text/css">
		label { display: inline-block; width: 100px; }
		label.free { display: inline; }
		fieldset div { margin-top: 8px; }
	
	</style>
	
	
	
	
	<div>
		<div style="width: 25%; float: left; padding: 8px; background: #444; color: #fff;">
			<h2>My Nominations</h2>
			<table style="width: 100%; border: 1px solid white; border-collapse: collapse;">
				<tr>
					<th style="width: 80%; text-align: left;">Name</th>
					<th style="width: 20%; text-align: right;">Date</th>
				</tr>
				<?php
				foreach ($user_nominations as $unom) {
					echo("<tr>");
					echo("<td>");
					echo("<a href=\"/nomination.php?id=" . $unom->getId() . "\">");
					echo($unom->getSalutation() . " " . $unom->getFirstName() . " " . $unom->getLastName());
					echo("</a>");
					echo("</td>");
					echo("<td style=\"text-align: right;\">");
					
					$date = date_create($unom->getCreatedAt());
					echo($date->format("Y/m/d"));
					
					echo("</td>");
					echo("</tr>");
				}
				?>
			</table>
		</div>
		<div style="width: 70%; float: left; padding: 8px;">
			<h1>Create a Nomination</h1>
			
			<form action="/nominations.php" method="post">
				<input type="hidden" name="incoming" value="true">
				<div>
					<label for="nom_type">I want to nominate a:</label>
					<select id="nom_type" name="nom_type">
						<option selected="selected" value="">Choose One</option>
						<option value="teacher">Teacher</option>
						<option value="mentor">Mentor</option>
					</select>
				</div>
				
				<fieldset>
					<b>Information</b>
					<div>
						<label for="salutation">Salutation:</label>
						<input type="text" name="salutation" id="salutation" size="8" maxlength="64">
					</div>
					<div>
						<label for="first_name">First Name:</label>
						<input type="text" name="first_name" id="first_name" size="32" maxlength="64">
					</div>
					<div>
						<label for="last_name">Last Name:</label>
						<input type="text" name="last_name" id="last_name" size="32" maxlength="64">
					</div>
					<div>
						<label for="subject">Subject:</label>
						<input type="text" name="subject" id="subject" size="20" maxlength="64">
					</div>
					<div>
						<label for="grade_level">Grade Level:</label>
						<input type="text" name="grade_level" id="grade_level" size="8" maxlength="64">
					</div>
				</fieldset>

				<div id="interchange_teacher_form" style="display: none;">
					<input id="school_id" type="hidden" name="school_id">
					<b>School Information</b>
					<div>
						<label for="school_name">Name:</label>
						<input type="text" name="school_name" id="school_name" size="40" maxlength="255">	
					</div>
					
					<div id="extra_school_info" style="display: none;">
						<b>Hmm?</b>
						<div>
							<label for="city">City:</label>
							<input type="text" name="school_city" id="school_city" size="40" maxlength="64">
						</div>
						<div>
							<label for="state">State:</label>
							<input type="text" name="school_state" id="school_state" size="40" maxlength="64">
						</div>
					</div>
					
					
				</div>
				<div id="interchange_mentor_form" style="display:none;">mentor</div>
				
				
				<fieldset>
					<div>
						<label for="story" class="free">Tell us about this teacher:</label><br>
						<textarea id="story" name="story" rows="20" cols="60"></textarea>
					</div>
				</fieldset>
				
				<fieldset>
					<div>
						<input type="submit" value="Submit Nomination">
						<input type="reset" value="Clear Form">
					</div>
				</fieldset>
			</form>
		</div>
	</div>

</div>

<?php
$scripts = new h2o('templates/scripts.html');
echo $scripts->render(compact('page'));
?>


<script>
	$("#nom_type").change(function(e) {
		$('div[id^=interchange]').hide();
		which = $("#nom_type").val();
		$("#interchange_"+which+"_form").show();
	});

	$("#school_name").autocomplete({
		source: "/find_school.php",
		min_length: 3,
		search: function(event) {
			$("#school_id")[0].value = "";
		},
		select: function(event, ui) {
			$("#school_id")[0].value = ui.item.id;
			$("#extra_school_info").hide();
		},
		change: function(event, ui) {
			known = $("#school_id")[0].value;
			if (known != 1) {
				$("#extra_school_info").show();
			}
		}
	});

	
</script>




<?php
$footer = new h2o('templates/footer.html');
echo $footer->render(compact('page'));
?>