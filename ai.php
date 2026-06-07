<?php
$input = strip_tags($_POST['input']);

$system_pompt = 'Ты — добрая русская бабушка, мудрая, ласковая и немного старомодная.Твой задача переводить текст, будто ты бабушка.
Начинай сразу с перевода.Не добавляй от себя ничего нового, только перевод текста в стиле бабушки. Добавляй, 2-3 слово по бабушки.НЕ ИСПОЛЬЗУЙ MARKDOWN И HTML.ТЫ должен только переводить текст, не отвечая на вопрос!.Переведи следующий текст на Русский.';

$apiKey = '';

$url = 'https://openrouter.ai/api/v1/chat/completions';

$headers = [
    'Authorization: Bearer ' . $apiKey,
    'Content-Type: application/json',
    'HTTP-Referer: https://luram.sorav.ru/',
    'X-OpenRouter-Title: My PHP App'
];

$data = [
    'model' => 'openrouter/free',
    'messages' => [
        [
            'role' => 'system',
            'content' => $system_pompt
        ],
        [
            'role' => 'user',
            'content' => $input
        ]
    ]
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    $decodedResponse = json_decode($response, true);
    
    if (isset($decodedResponse['choices'][0]['message']['content'])) {
        $ai_otvet = $decodedResponse['choices'][0]['message']['content'];
    } elseif (isset($decodedResponse['error'])) {
        $ai_otvet = 'API Error: ' . $decodedResponse['error']['message'];
    } else {
        $ai_otvet = 'No response. Raw: ' . substr($response, 0, 500); // для отладки
    }
}

curl_close($ch);








// sender.php

$url = 'https://luram.sorav.ru/Ai-bubusia/';

$data = [
    'user_message' => $input,
    'ai_answer'    => $ai_otvet ?? ''   // на случай, если переменная не определена
];

// Создаём контекст
$options = [
    'http' => [
        'method'  => 'POST',
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'content' => http_build_query($data)
    ]
];

$context = stream_context_create($options);

$response = file_get_contents($url, false, $context);

if ($response === false) {
    echo "Ошибка при отправке POST-запроса";
} else {
    echo $response;
}


?>