<?php 

function match($address){

	return preg_match('/^((2[0-4]|1\d|[1-9])?\d|25[0-5])(\.(?1)){3}\z/',$address);


}


echo match("c127.0.0.1");





?>
