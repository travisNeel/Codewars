<?php

 function alphabet_position($s) {
  $arr = []; $result = '';
  for ($x = 1, $abc = 'a'; $x < 27; ++$x,++$abc) { 
    $arr[$x] = $abc;
  }
  $s = str_split($s);
  for($x=0;$x<count($s);$x++){
    if(ctype_alpha($s[$x])){  
      $result .=' '.array_search(strtolower($s[$x]),$arr);
    }
  }
return trim($result);
}

echo alphabet_position('The sunset sets at twelve o\' clock.');
 ?>