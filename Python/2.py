def StrRevers(string): 
	index = len(string); 
	output = "Output:"; 

	output = output + str(sorted(string)); 

	print output; 

print u'These Numbers will be in ascending order.'; 
input_st = raw_input(); 
StrRevers(input_st);