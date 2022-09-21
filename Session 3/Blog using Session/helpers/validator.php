<?php



function checkForm($array, $keys) {
    foreach($keys as $key) {
        if(!isset($array["$key"]) || empty($array["$key"]))
            return false;
    }
    return true;
}

function checkLength($value, $max_length, $min_length=0) {
    return strlen($value) <= $max_length && strlen($value) >= $min_length;
}

?>