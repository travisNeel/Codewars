bool isAscOrder(std::vector<int> arr)
{
  int runner=0;            //creates a variable to hold previous value for comparison
  auto v_size=arr.size();  //holds the size of the array. used in for loop  
  
	for(int i=0; i!=v_size; i++){
      if (runner>arr[i]) return false; //if the value of current index is less than last one, return false.
      runner=arr[i]; 									 // change value of the runner to current value. reapeat.
  }
	return true;     //if able to iterate to the end, then return true. the vector is in order
}