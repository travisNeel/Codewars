def lostSheep(friday,saturday,total):
	result=0
	for x in friday:
		result=result+x
	for y in saturday:
		result=result+y
	result=total-result
	return result