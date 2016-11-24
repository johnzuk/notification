<?php
namespace Notification\Sender;

use Notification\MessageInterface;

final class MailSender implements SenderInterface
{
    /**
     * @var MessageInterface
     */
    protected $message;

    public function send(MessageInterface $message)
    {
        $this->message = $message;
        //send message via mail
        //eg.:
        /*$mailer->setTo($this->getUserEmail())
            ->setSubject($message->getSubject())
            ->setBody($message->setBody())
            ->send();
        */
    }

    /**
     * @return string
     */
    protected function getUserEmail()
    {
        return $this->message->getTo()->getEmail();
    }
}
