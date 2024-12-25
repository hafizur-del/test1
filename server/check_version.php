<?php
$current_version = 3;
header('Content-Type: application/json');
echo json_encode(['version' => $current_version]);
?>