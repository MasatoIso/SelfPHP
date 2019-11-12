<?php 
//switchは　==　で比較するため、データ型を厳密には比較しない。
$exp = 'X';

switch($exp){
    case 0:
        print '変数expはゼロです';
        break;
    case 'X':
        print '変数expはエックスです';
        break;
    default:
        print '?';
        break;
}