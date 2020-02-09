<?php

require_once 'MyMail.php';

$m = new MyMail();
$m->to = 'masato@example.com';
$m->subject = 'テストメール';
$m->message = 'こんん一はMyMailクラスです';

$m->From = 'masato@exmaple.com';
$m->X_Mailer = 'MyMail 1.0';
$m->X_Priority = 1;
$m->X_MSMail_Priority = 'High';
$m->send();