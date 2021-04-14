<?php
function Chars($str){
    $r = preg_split('//u', $str, null, PREG_SPLIT_NO_EMPTY);
    foreach($r as $o => $name){
        if(isset($last))
            if($last == $name) unset($r[$o]);
        $last = $name;
    }
    return implode('', $r);
}

echo Chars('Helloooooooooo');