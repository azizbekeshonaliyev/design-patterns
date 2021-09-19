<?php


namespace Adapter\Interfaces;


/**
 * Date: 2021-09-19
 * Class Notification
 * @author Azizbek Eshonaliyev <1996azizbekeshonaliyev@gmail.com>
 */
interface Notification
{
    public function send(string $title, string $message);
}