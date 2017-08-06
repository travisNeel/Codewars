//returns the nth smalles value of the array

int nthSmallest(std::vector<std::vector<int>> arr, int n){
	std::vector<int> temp;
	for (int i=0; i<arr.size(); i++) {
		for (int k =0; k<arr[i].size(); k++) {
			temp.push_back(arr[i][k]);}}
	std::sort(temp.begin(), temp.end());
	return temp[n-1];
}