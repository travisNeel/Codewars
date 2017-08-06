<?php 
// $key decodes the $str. key is reordered based on 
// alphabetical order of the chars in the $key. Those
// indexes are then used to decode the $str. 

//returns: string
//params: $key - key that will decode the message
//params: $str - coded message to be decoded
function deNico($key,$str){
	if(strlen($key)<=1) return $str;
	$result=''; str_replace(" ", "", $str);
	$len = strlen($str);
	$klen = strlen($key);
	$keyOrder = str_split($key,1);
	sort($keyOrder); $keyOrder=implode($keyOrder);
	$keyArr = str_split($key,1);
	$keyCode='';
	for ($i=0; $i <$klen; $i++) { 
		$keyCode[$i] = strpos($keyOrder, $keyArr[$i])+1;
	}
	for ($i=0,$k=0; $i <=$len ; $i++) { 
		if(strlen($str)<$klen){
			for ($i=0; $i < strlen($str) ; $i++) { 
				$result .= $str[$i];
			}
			return preg_replace("[ ]", "", $result);;
		}
		$result .= $str[$keyCode[$k]-1];
	$k++;

		if ($k>=$klen) {
			$k=0; $str=substr($str, $klen);
		}
	 }
}
//secre/tinfo/rmtai/on
$a=deNico("crazy", "cseerntiofarmit on  ");
$b=deNico("crazy", "cseerntiofarmit on");
$c=deNico("abc", "abcd");
$d=deNico("ba", "2143658709");
$e=deNico("a", "message");
$f=deNico("key", "eky");


 ?>