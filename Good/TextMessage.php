<?php
include_once('Message.php');

class TextMessage extends Message
{
    public function send(): void
    {
        echo $this->msgservice->msgSender($this->sender);
        echo $this->msgservice->msgReceiver($this->receiver);
        echo $this->msgservice->sendTextMessage($this->msgcontent);
        echo "<br>";
    }
}
