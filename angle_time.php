<?php 
//
//returns the time based on the angle
// given as an argument.

function what_time_is_it($angle){
  if ($angle >360) return "Angle must be between 0 and 360!\n ";
  $time='';
  $an = $angle/360;
  $hour = floor($an*12);
  $min = (($an*12)-floor($an*12))*60 ;
  if($min<10) $min = '0'.$min;
  if ($hour == 0)$hour = 12; 
  if ($hour <10)$hour ='0'.$hour;

  $time = $hour.':'.$min;

  return $time;
}

echo what_time_is_it(49.322637825733);

 ?>
