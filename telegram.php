<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;
use GuzzleHttp\Client;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$botToken = $_ENV['TELEGRAM_BOT_TOKEN'];
if (!$botToken) {
    die('Bot token not found in .env file.');
}

$telegramApiUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";

$chatId = '263696202';
$message = 'Salom! Bu PHP orqali yuborilgan xabar.';

$client = new Client();

try {
    $response = $client->post($telegramApiUrl, [
        'form_params' => [
            'chat_id' => $chatId,
            'text' => $message,
        ],
    ]);

    echo "Xabar yuborildi! Javob: " . $response->getBody();
} catch (Exception $e) {
    echo "Xatolik yuz berdi: " . $e->getMessage();
}
