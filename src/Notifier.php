<?php
namespace Notification;

use Notification\Model\User;

class Notifier
{
    /**
     * @var string
     */
    protected $body;

    /**
     * @var string
     */
    protected $subject;

    /**
     * @var string
     */
    protected $from;

    /**
     * @var User
     */
    protected $user;

    /**
     * Notifier constructor.
     * @param string $body
     * @param string $subject
     * @param string $from
     */
    public function __construct($body, $subject, $from)
    {
        $this->body = $body;
        $this->subject = $subject;
        $this->from = $from;
    }

    public static function getInstance($body, $subject, $from)
    {
        return new self($body, $subject, $from);
    }

    public function notifyUser(User $user)
    {
        $this->user = $user;
        $message = $this->prepareMessage();

        foreach ($user->getNotifications() as $notification) {
            $notification->send($message);
        }
    }

    /**
     * @return Message
     */
    protected function prepareMessage()
    {
        $message = new Message($this->user);
        $message->setBody($this->body);
        $message->setSubject($this->subject);
        $message->setFrom($this->from);

        return $message;
    }
}