<?php
$data = 'リオとニンザブロウとナミとリンリン';

//指定された文字で文字列を分割して配列に格納する　どの文字で区切るか, 対象文字列, 何個の要素にに分割するか
print_r(explode('と', $data, 3));
?>