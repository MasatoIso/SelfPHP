<?php
print strtolower("WINGSプロジェクト<br />");
print strtoupper("wingsプロジェクト<br />");
print lcfirst("WINGS PROJECT<br />");
print ucfirst("wings project<br />");
print ucwords("wings project");

mb_internal_encoding('UTF-8');
//マルチバイト文字は変換できない
print strtolower('ＷＩＮＧＳプロジェクト');
print mb_strtolower('WINGSプロジェクト');
?>