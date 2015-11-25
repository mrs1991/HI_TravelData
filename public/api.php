<?php

// REMOVE before deployment!
error_reporting(E_ALL);
ini_set('display_errors', 1);

$ilike = "biscuits";

$somePhpDogVariable = array("likes" => $ilike, "goes" => "woof");

echo json_encode($somePhpDogVariable);

?>
