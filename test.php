<?php
    $remainder = $argv[1] % 2;
    if($remainder == 1){
        echo $argv[1]."は奇数です。". PHP_EOL;
    }else{
        echo $argv[1]."は偶数です。". PHP_EOL;
    }
?>