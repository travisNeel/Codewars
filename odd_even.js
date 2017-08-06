function oddOrEven(array) {
  if(array.length == 0) return "even";
	var arraytotal = array.reduce(function(total,sum){
    	return total+=sum;
    })
    var v = arraytotal%2;
    
    if (v) return "odd";
  return "even";
}