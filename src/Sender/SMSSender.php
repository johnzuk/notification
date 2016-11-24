<?php
namespace Notification\Sender;

use Notification\MessageInterface;

final class SMSSender implements SenderInterface
{
    /**
     * @var MessageInterface
     */
    protected $message;

    public function send(MessageInterface $message)
    {
        $this->message = $message;
        //send via SMS
        //eg.:
        //$SMSAPI->setTo($this->getUserPhone())->setMessage($message->getBody())->setFrom($message->getFrom());
    }

    /**
     * @return string
     */
    protected function getUserPhone()
    {
        return $this->message->getTo()->getPhone();
    }
}
