<?php
for ($i = 1; $i<6; $i++){
    print "${i}番目のループです。<br />";
}

//, カンマで区切ることで初期化式、ループ継続条件、増減式を複数設定できる。
for ($j = 1; $j<6; print "${j}番目のループです。<br />", $j++);

for ($k = 1, $l = 1; $result = $k * $l, $k < 6; $k ++, $l++){
    print "${k}✖︎${l}✖ = ${result}<br />";
}
?>