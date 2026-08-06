<?php
// api.php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// 1. Hier deine echte n8n Webhook-URL eintragen:
$n8n_url = 'https://deine-echte-n8n-domain.de/webhook/deine-webhook-id';

$ch = curl_init($n8n_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, file_get_contents('php://input'));

// 2. Header anpassen (Content-Type + dein geheimer API-Key für n8n)
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'X-API-KEY: DEIN_GEHEIMES_PASSWORT' // <-- Selbes Passwort wie im n8n Webhook Node!
]);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
