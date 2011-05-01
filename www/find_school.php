<?php
require_once('lib/core.php');

$search_str = $inputs["val"];

//$schools = SchoolQuery::create()->filterByName("%".$search_str."%")->find();
$schools = SchoolQuery::create()->where("School.Name like ?", "%".$search_str."%")->find();

$found = array();
foreach ($schools as $school) {
	$id = $school->getId();
	$label = $school->getName() . ", " . $school->getCity() . " " . $school->getState();
	$value = $label;
	
	
	$s = array("id" => $id, "label" => $label, "value" => $value);
	array_push($found, $s);
}



echo json_encode($found);


