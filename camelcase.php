function camel_case($str){
    $u_str = ucwords($str);
    $arr_str = str_split($u_str);
    foreach($arr_str as &$x){
        if ($x === " ") {
            $x = "";
        }
    }
    $result = implode($arr_str);
    return $result;
}