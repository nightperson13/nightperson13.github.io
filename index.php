<?php

$ composer require telegram-bot/api

$token = "781982351:AAFSaQXvZ4bfSJvaOhNfoWbQcWJHh7yomJk";
$bot = new \TelegramBot\Api\Client\($token);

$bot->command('start', function ($message) use ($bot){
    $answer = 'Welcome';
    $bot->sendMessage($message->getChat()->getId(), $answer);
})


?>