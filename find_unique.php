function find_uniq($arr){
    sort($arr);
    if($arr[0]===$arr[1]){
        $i= sizeof($arr)-1;
        return $arr[$i];
    } else {return $arr[0];}
}