<?php
$score = 75;

//ifで記述
if ($score >= 90) {
    print '優';
} elseif ($score >= 70) {
    print '良';
} elseif ($score >= 50) {
    print '可';
} else {
    print '不可';
}

echo '<br />';

//switchで記述
switch($score){
    case $score >=90:
        print '優';
        break;
    case $score >=70:
        print '良';
        break;
    case $score >=50:
        print '可';
        break;
    default:
        print '不可';
        break;
}
?>