<?php
include_once('TextMessage.php');
include_once('MultiMediaMessage.php');
include_once('WhatsappService.php');
include_once('LineService.php');

function clientCode(Message $message)
{
    $message->send();
}



$waService = new WhatsAppService();
$textMessage = new TextMessage("Chandler", "Austin", "How Are You Austin?", $waService);
clientCode($textMessage);


$mediaMessage = new MultiMediaMessage("Chandler", "Austin", "Look What I've Found!", "1.jpg", $waService);
clientCode($mediaMessage, "Hello via Email!");


$line = new lineService();
$textMessage = new TextMessage("Chandler", "Austin", "You Good?", $line);
clientCode($textMessage);
