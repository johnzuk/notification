<?php
namespace Notification;

use Notification\Model\UserInterface;

interface MessageInterface
{
    /**
     * @return string
     */
    public function getFrom();

    /**
     * @param string $from
     */
    public function setFrom($from);

    /**
     * @return UserInterface
     */
    public function getTo();

    /**
     * @return string
     */
    public function getSubject();

    /**
     * @param string $subject
     */
    public function setSubject($subject);

    /**
     * @return string
     */
    public function getBody();

    /**
     * @param string $message
     */
    public function setBody($message);
}
