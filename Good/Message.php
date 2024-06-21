<?php
abstract class Message
{
    protected string $sender;
    protected string $receiver;
    protected string $msgcontent;
    protected MsgService $msgservice;

    public function __construct(string $sender, string $receiver, string $msgcontent, MsgService $service)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->msgcontent = $msgcontent;
        $this->msgservice = $service;
    }

    abstract public function send(): void;
}
