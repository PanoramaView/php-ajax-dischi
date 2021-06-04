<?php

$response = [
  "success" => true,
  "response" => rand(1,9)
];

header("Content-type: application/json");

echo json_encode($response);