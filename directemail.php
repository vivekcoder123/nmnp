<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;
if($_POST){
  $email=trim($_POST['email']);
  $name=trim($_POST['name']);
  $message=trim($_POST['message']);
    $mgClient = new Mailgun('b237ef24e538e7bd8ee44bbcb46f322f-47317c98-cb5291ba');
    $domain = "sandboxfaefdf01ce8d4d7c909401fe3d1e30b4.mailgun.org";


    $result = $mgClient->sendMessage($domain, array(
        'from'    => $email,
        'to'      => 'vivekrautela000@gmail.com',
        'subject' => 'Contact query',
        'text'    => 'Hello,I am '.$name.' '.$message,

    ));


}

 ?>
