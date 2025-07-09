<?php
// zapier-proxy.php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// Get JSON input
$data = json_decode(file_get_contents("php://input"), true);

// Validate input
if (!$data || !isset($data['name']) || !isset($data['email']) || !isset($data['phone'])) {
    http_response_code(400);
    echo json_encode(["error" => "Missing required fields"]);
    exit;
}

// ✅ DB connection details (replace with your actual values)
/*$db_host = "ls-1d02acfdcb5cf01ec38a089ccf0d4bb678e23f1f.cfm66se44mq6.ap-south-1.rds.amazonaws.com";
$db_user = "dbmasteruser";
$db_pass = "nOyc+F0p!MJXWT3Tgh|>WijFzoq3mlqD"; // 🔁 replace this
$db_name = "runo";               // 🔁 your database name
$table   = "leads";   // 🔁 your table name

// ✅ Connect to MySQL (procedural)
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit;
}

// Prepare and insert
$name  = mysqli_real_escape_string($conn, $data['name']);
$email = mysqli_real_escape_string($conn, $data['email']);
$phone = mysqli_real_escape_string($conn, $data['phone']);

$sql = "INSERT INTO `$table` (name, email, phone, added_on) VALUES ('$name', '$email', '$phone', NOW())";

if (!mysqli_query($conn, $sql)) {
    error_log("DB Insert Error: " . mysqli_error($conn));
    // Continue even if DB insert fails
}

mysqli_close($conn);
*/
// ✅ Send to Zapier webhook
$zapierWebhook = "https://hooks.zapier.com/hooks/catch/23699764/u3s0v08/";

$ch = curl_init($zapierWebhook);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// ✅ Return Zapier response to frontend
http_response_code($httpCode);
echo $response;
