std::string bonus_time(int salary, bool bonus)
{
	if(bonus){
		salary*=10;
		auto salary_str = "$"+std::to_string(salary);
		return salary_str;
	}
  return "$"+std::to_string(salary);
}