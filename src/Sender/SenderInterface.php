<?php
namespace Notification\Sender;

use Notification\MessageInterface;

interface SenderInterface
{
    public function send(MessageInterface $message);
}