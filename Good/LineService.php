<?php
include_once('MsgService.php');

class LineService implements MsgService
{
    public function msgSender(string $sender)
    {
        return "From : " . $sender . "<br>";
    }

    public function msgReceiver(string $receiver)
    {
        return "To : " . $receiver . "<br>";
    }

    public function sendTextMessage($msgcontent)
    {
        return "Sending <span style='color:#06c755;'>Line</span>  Text Message : " . $msgcontent . "<br>";
    }

    public function sendMultiMediaMessage($msgcontent, $mediaUrl)
    {
        return "Sending <span style='color:#06c755;'>Line</span>  Message : " . $msgcontent . "<br>" . "With Media : " . $mediaUrl . "<br>";
    }
}
