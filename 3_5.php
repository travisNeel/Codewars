function solution($number){
		$total=0;        
		for($i=0; $i<$number;$i++){
				if ($i%3==0 || $i%5==0){
						echo $i; echo " ";
						$total+=$i;
        }
    } 
    return $total;
}