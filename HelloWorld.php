<?php
    $val1 = 100;
    $val2 = 200;

    if ($val1 < $val2) {
        // $val2が$val1よりも大きい場合に実行される
        echo $val1 . "よりも" . $val2 . "のほうが大きいです。" . PHP_EOL;
    } elseif ($val1 == $val2) {
        // $val1と$val2が同じ値の場合のみ実行される
        echo "同じ値です。" . PHP_EOL;
    } else {
        // 上記の条件に当てはまらない場合に実行される 今回は$val1 > $val2 の場合
        echo "どの条件文にも当てはまりませんでした。" . PHP_EOL;
    }
?>