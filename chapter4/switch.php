<?php
//条件が多いと、if文では見辛くなってしまう
$rank = '甲';

if ($rank == '甲'){
    print '大変良い';
} elseif ($rank == '乙') {
    print 'そこそこですね';
} elseif ($rank == '乙') {
    print '頑張りましょう';
} else {
    print '?';
}

switch($rank){
    case '甲':
        print '大変良い';
        break;
    case '乙':
        print 'そこそこですね';
        break;
    case '丙':
        print '頑張りましょう';
        break;
    default  :
        print '?';
        break;
}
//switch命令自体には処理を終える機能がないので、それぞれのcaseでbreak処理を行う

//複数の条件に合致させたい場合はわざとbreakさせずに以下のように記述することができる。
$drink = 'ビール';
switch($drink) {
    case '日本酒':
    case 'ビール':
    case 'ワイン':
        print '醸造酒です';
        break;
    case 'ブランデー':
    case 'ウイスキー':
        print '蒸留酒です';
        break;
    default:
        print '?';
        break;
}