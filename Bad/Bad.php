<?php

abstract class Message
{
    protected string $sender;
    protected string $receiver;
    protected string $msgContent;
    protected string $serviceType;

    public function __construct(string $sender, string $receiver, string $msgContent, string $serviceType)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->msgContent = $msgContent;
        $this->serviceType = $serviceType;
    }

    abstract public function send(): void;
}

class TextMessage extends Message
{
    public function send(): void
    {
        if ($this->serviceType == "Whatsapp") {
            echo "From: " . $this->sender . "<br>";
            echo "To: " . $this->receiver . "<br>";
            echo "Sending <span style='color:#25D366;'>Whatsapp</span> Text Message: " . $this->msgContent . "<br>";
            echo "<br>";
        } else if ($this->serviceType == "Line") {
            echo "From: " . $this->sender . "<br>";
            echo "To: " . $this->receiver . "<br>";
            echo "Sending <span style='color:#06c755;'>Line</span> Text Message: " . $this->msgContent . "<br>";
            echo "<br>";
        } else {
            echo "From: " . $this->sender . "<br>";
            echo "To: " . $this->receiver . "<br>";
            echo "Sending Text Message: " . $this->msgContent . "<br>";
            echo "<br>";
        }
    }
}

class MultiMediaMessage extends Message
{
    private string $mediaUrl;

    public function __construct(string $sender, string $receiver, string $msgContent, string $mediaUrl, string $serviceType)
    {
        parent::__construct($sender, $receiver, $msgContent, $serviceType);
        $this->mediaUrl = $mediaUrl;
    }

    public function send(): void
    {
        if ($this->serviceType == "Whatsapp") {
            echo "From: " . $this->sender . "<br>";
            echo "To: " . $this->receiver . "<br>";
            echo "Sending <span style='color:#25D366;'>Whatsapp</span> Text Message: " . $this->msgContent . "<br>";
            echo "Media : " . $this->mediaUrl . "<br>";
            echo "<br>";
        } else if ($this->serviceType == "Line") {
            echo "From: " . $this->sender . "<br>";
            echo "To: " . $this->receiver . "<br>";
            echo "Sending <span style='color:#25D366;'>Line</span> Text Message: " . $this->msgContent . "<br>";
            echo "Media : " . $this->mediaUrl . "<br>";
            echo "<br>";
        } else {
            echo "From: " . $this->sender . "<br>";
            echo "To: " . $this->receiver . "<br>";
            echo "Sending <span style='color:#25D366;'>Whatsapp</span> Text Message: " . $this->msgContent . "<br>";
            echo "Media : " . $this->mediaUrl . "<br>";
            echo "<br>";
        }
    }
}


$textMessage = new TextMessage("Chandler", "Austin", "How Are You Austin?", "Whatsapp");
$textMessage->send();

$multiMediaMessage = new MultiMediaMessage("Chandler", "Austin", "Look at this cool photo!", "photo.jpg", "Line");
$multiMediaMessage->send();
