<?php


namespace Adapter\Classes;


use Adapter\Classes\Slack\SlackApi;
use Adapter\Interfaces\Notification;

/**
 * Date: 2021-09-19
 * Class SlackNotification
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
class SlackNotification implements Notification
{
    private $slack;
    private $chatId;

    public function __construct(SlackApi $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }

    /**
     * An Adapter is not only capable of adapting interfaces, but it can also
     * convert incoming data to the format required by the Adaptee.
     */
    public function send(string $title, string $message): void
    {
        $slackMessage = "#" . $title . "# " . strip_tags($message);
        $this->slack->logIn();
        $this->slack->sendMessage($this->chatId, $slackMessage);
    }
}