<?php
/**
 * User: wu chi fung
 * Date: Sun5/1/14
 * Time: 4:03 PM
 *
 * THIS CLASS IS USE FOR SENDING EMAIL THROUGH OUR SERVER BY USING SMTP
 */

class mail {
    public  $to,
            $subject,
            $message,
            $header;
//          For function sendRegisterAuthMail

    function sendRegisterAuthMail($to,$ramdomKey)
    {
        mail($to,$subject,$message,$header);
    }

    function sendEventConfirmation($eventDetailArray)
    {

    }

    function sendGroupConfirmation($groupName,$group)
    {

    }

    function sendNewsLetter($message)
    {

    }

} 