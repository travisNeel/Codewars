function my_first_interpreter($string){
    $ascii_place = 0;
    $arr = str_split($string,1);
    $program_output='';
    
    foreach ($arr as &$command){
        if($ascii_place == 256){
            $ascii_place = 0;
        }
        if ($command == '+') {
            $ascii_place++;
        } else if ($command == '.'){
            $program_output.=chr($ascii_place);
        }
    }
    return $program_output;
}