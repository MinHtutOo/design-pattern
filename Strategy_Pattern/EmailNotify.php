<?php 

class EmailNotify implements Notify
{
    public function send()
    {
        echo "Notification send by Email";
    }
}

?>