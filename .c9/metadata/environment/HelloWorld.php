{"filter":false,"title":"HelloWorld.php","tooltip":"/HelloWorld.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":3,"column":0},"action":"remove","lines":["<?php","    echo 'HelloWorld !' . PHP_EOL;","?>",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":8,"column":2},"action":"insert","lines":["<?php","    $str = \"文字列です。\"; // $strはstring（文字列）型","    $int_number = 4; // $int_numberはinteger（整数）型","    $arr = array(1,2,3,4); // $arrはarray（配列）型","","    echo gettype($str) . PHP_EOL;","    echo gettype($int_number) . PHP_EOL;","    echo gettype($arr) . PHP_EOL;","?>"]}],[{"start":{"row":5,"column":23},"end":{"row":5,"column":32},"action":"remove","lines":[". PHP_EOL"],"id":3}],[{"start":{"row":5,"column":22},"end":{"row":5,"column":23},"action":"remove","lines":[" "],"id":4}],[{"start":{"row":0,"column":0},"end":{"row":8,"column":2},"action":"remove","lines":["<?php","    $str = \"文字列です。\"; // $strはstring（文字列）型","    $int_number = 4; // $int_numberはinteger（整数）型","    $arr = array(1,2,3,4); // $arrはarray（配列）型","","    echo gettype($str);","    echo gettype($int_number) . PHP_EOL;","    echo gettype($arr) . PHP_EOL;","?>"],"id":5},{"start":{"row":0,"column":0},"end":{"row":14,"column":2},"action":"insert","lines":["<?php","    $val1 = 100;","    $val2 = 200;","","    if ($val1 < $val2) {","        // $val2が$val1よりも大きい場合に実行される","        echo $val1 . \"よりも\" . $val2 . \"のほうが大きいです。\" . PHP_EOL;","    } elseif ($val1 == $val2) {","        // $val1と$val2が同じ値の場合のみ実行される","        echo \"同じ値です。\" . PHP_EOL;","    } else {","        // 上記の条件に当てはまらない場合に実行される 今回は$val1 > $val2 の場合","        echo \"どの条件文にも当てはまりませんでした。\" . PHP_EOL;","    }","?>"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":34},"end":{"row":8,"column":34},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1655647166296,"hash":"74a658c0272d89d041f33c38b2520fceaf487f96"}