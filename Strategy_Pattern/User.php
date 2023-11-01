<?php

require_once("Notify.php");
require_once("EmailNotify.php");
require_once("PhoneNotify.php");
require_once("SMSNotify.php");
require_once("Notifier.php");
require_once("PhoneUser.php");
require_once("EmailUser.php");

class User
{
    public function __construct()
    {
        $obj = new EmailUser();
        $obj->changeNotiType(new PhoneNotify());
        $obj->sendNow();
    }
}

new User();


?>