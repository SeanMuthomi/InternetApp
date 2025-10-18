<?php
require 'ClassAutoLoad.php';

$mailCnt = [
    'name_from' => 'SMuthomi',
    'mail_from' => 'sean.muthomi@strathmore.edu',
    'name_to' => 'Sean Munene',
    'mail_to' => 'blazesean357@gmail.com',
    'subject' => 'Hello From ICS B',
    'body' => 'Welcome to ICS B! <br> This is a new semester.'
];

$ObjSendMail->Send_Mail($conf, $mailCnt);