function string_transformer($s){
    $s = explode(' ',$s);
    $s = array_reverse($s);
    $s = implode(' ',$s);
    $arr = str_split($s);

    foreach ($arr as &$letter) {
        if(ctype_upper($letter)){
            $letter = strtolower($letter);
        }else $letter = strtoupper($letter);
    }
    return implode($arr);
}