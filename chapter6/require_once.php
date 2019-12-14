<?php 
//requireはファイルが存在しない時に、Fatal errorを出すが、 includeはエラーを出さない
require_once 'included.php';

$area = getTriangleArea(8, 10);
print "三角形の面積は${area}です。";