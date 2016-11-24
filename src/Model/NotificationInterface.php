<?php
namespace Notification\Model;

use Notification\Sender\SenderInterface;

interface NotificationInterface
{
    /**
     * @return SenderInterface[]
     */
    public function getNotifications();

    /**
     * @param array SenderInterface[]
     */
    public function setNotifications(array $notifications);
}