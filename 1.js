function palindrom(int){
    var left = int.toString()
	var length = left.length, right = ""
	while(length > 0){
		right += left[length-1]
		length--
	}
  
    if (left === right) {
      console.log(int + " merupakan bilangan palindrom")
    } 
	
}

var input = 1001

palindrom(input)