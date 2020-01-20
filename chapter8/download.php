<?php
header('Content-Type: application/octet-stream');
heaer('Content-Disposition: attachment; filename = "flower.jpg" ');
print file_get_contents('./doc/flower.jpg');