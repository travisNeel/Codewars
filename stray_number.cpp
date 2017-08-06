int stray(std::vector<int> numbers) {
	std::sort(numbers.begin(), numbers.end());
	if((numbers[0]-numbers[1])==0) return numbers.back();
	return numbers.front();
};