<?php

$groqKey = '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';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.groq.com/openai/v1/chat/completions");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $groqKey
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
    'model'    => 'llama-3.1-8b-instant',
    'messages' => [
        ['role' => 'user', 'content' => 'Say only: Groq is working!']
    ],
    'max_tokens' => 20
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

$data = json_decode($response, true);

echo "HTTP Code: {$httpCode}\n";

if ($httpCode === 200) {
    echo "✅ SUCCESS\n";
    echo "Response: " . $data['choices'][0]['message']['content'] . "\n";
} else {
    echo "❌ FAILED\n";
    echo "Error: " . ($data['error']['message'] ?? $response) . "\n";
}