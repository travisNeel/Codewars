function fold_to($distance) {
    //adding feature
    if(!$distance){echo "NULL!";}
    
    $paper=0.0001;
    $count=0;
    
    while($paper<$distance){
        $paper*=2;
        $count++;
    }
    return $count;
                             
}
