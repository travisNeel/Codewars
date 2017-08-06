// returns an array of all the intigers divisors

function divisors(integer) {
	var arr=[];
	for(var i = 2; i<integer; i++){
    	if(integer%i==0){
    		arr.push(i);}}
    if(arr[1]==undefined){
    	arr = integer + ' is prime';}
  return arr;
};  