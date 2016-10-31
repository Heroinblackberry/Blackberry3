def StrRevers(string): 
	index = len(string); 
	output = "Output: "; 

	for index in range(index, 0, -1): 
		index = index - 1; 
		output = output + string[index]; 


	print output; 

print u'Enter string:' 
input_st = raw_input(); 
StrRevers(input_st)