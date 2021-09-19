<?php


namespace Adapter\Classes;


use Adapter\Interfaces\Notification;

/**
 * Date: 2021-09-19
 * Class EmailNotification
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class EmailNotification implements Notification
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function send(string $title, string $message): void
    {
        mail($this->adminEmail, $title, $message);
        echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.";
    }
}