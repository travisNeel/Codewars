function generate($n){
    if($n==0) return "";
    $s= rand(0, 1);
    $r=$s;
    while (($n-1)>0){
       // echo $s;
        $s=rand(0, 1);
        $r.=$s;
        $n--;
    }
    return $r;
}