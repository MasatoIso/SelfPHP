<?php
//1
$sum = 0;

for ($i = 1; $i <= 100; $i++){
    if($i % 2 === 0){continue;}
    $sum += $i;
}

print "奇数の合計値は${sum}です。<br />";

//2
$i = 0;
$sum = 0;
while($i <= 100){
    $sum += $i;
    $i++;
    if($sum > 1000){break;}
}

print "合計が1000を超えるのは、1~${i}を加算したときです。";
print "${sum}<br />";

//3

$data = [10, 25, 50];
foreach($data as &$item){ $item *= 1.5;}
print_r($data);

//4
echo "<br />";

$languages = ["PHP", "JSP", "ASP", "JavaScript", "VBScript"];

foreach ($languages as $language){
    switch ($language) {
        case "PHP":
        case "JSP":
        case "ASP":
            print "サーバーサイド技術<br />";
            break;
        case "JavaScript":
        case "VBScript":
            print "クライアントサイド技術 <br />";
            break;
        default :
        print "知らん技術";
        break;
    }
}

//5
foreach ($languages as $language){
    if ($language == "PHP"){
        print "サーバーサイド技術<br />";
    }elseif($language == "JSP"){
        print "サーバーサイド技術<br />";
    }elseif($language == "ASP"){
        print "サーバーサイド技術<br />";
    }elseif($language == "JavaScript"){
        print "クライアントサイド技術<br />";
    }elseif($language == "VBScript"){
        print "クライアントサイド技術<br />";
    }
}

?>