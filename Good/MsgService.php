<?php
interface MsgService
{
    public function msgSender(string $sender);
    public function msgReceiver(string $receiver);
    public function sendTextMessage(string $msgcontent);
    public function sendMultiMediaMessage(string $msgcontent, string $mediaUrl);
}
