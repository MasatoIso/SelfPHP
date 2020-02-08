<?php
require_once './BussinessPerson.php';

$bp = new BussinessPerson('太郎', '山田');
$bp->work();
$bp->show();