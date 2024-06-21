<?php
include_once('Message.php');

class MultiMediaMessage extends Message
{
    private string $mediaUrl;

    public function __construct(string $sender, string $receiver, string $msgcontent, string $mediaUrl, MsgService $service)
    {
        parent::__construct($sender, $receiver, $msgcontent, $service);
        $this->mediaUrl = $mediaUrl;
    }

    public function send(): void
    {
        echo $this->msgservice->msgSender($this->sender);
        echo $this->msgservice->msgReceiver($this->receiver);
        echo $this->msgservice->sendMultiMediaMessage($this->msgcontent, $this->mediaUrl);
        echo "<br>";
    }
}
