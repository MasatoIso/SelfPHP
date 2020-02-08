<?php

require_once './EliteBussinessPerson.php';

$ebp = new EliteBussinessPerson('リオ', '山田');
$ebp->work();
$ebp->show();