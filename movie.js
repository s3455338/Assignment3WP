
function popDate(s1, s2) {
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	var genre = document.getElementById('genre');
	var time = document.getElementById('time');
	s2.innerHTML = "";
	time.innerHTML = "";
	if(s1.value == "fast7") {
		var optionArray = ["0|--- Please Select Session ---", "Wed|Wednesday", "Thu|Thursday", "Fri|Friday", "Sat|Saturday", "Sun|Sunday"];
		genre.value = "AC";
	} else if (s1.value == "longride") {
		var optionArray = ["0|--- Please Select Session ---", "Mon|Monday", "Tue|Tuesday",  "Sat|Saturday", "Sun|Sunday"];
		genre.value = "AF";
	} else if (s1.value == "gethard") {
		var optionArray = ["0|--- Please Select Session ---", "Mon|Monday", "Tue|Tuesday", "Wed|Wednesday", "Thu|Thursday", "Fri|Friday", "Sat|Saturday", "Sun|Sunday"];
		genre.value = "RC";
	} else if (s1.value == "shaunsheep") {
		var optionArray = ["0|--- Please Select Session ---", "Mon|Monday", "Tue|Tuesday", "Wed|Wednesday", "Thu|Thursday", "Fri|Friday", "Sat|Saturday", "Sun|Sunday"];
		genre.value = "CH";
	}
		
	for(var option in optionArray) {
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}

function popTime(s1, s2, s3) {
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	var s3 = document.getElementById(s3);
	
	s2.innerHTML = "";
	if(s1.value == "Mon" && s3.value == 'CH') {
		var optionArray = ["0|Please select time", "1PM|1PM"];
	} else if(s1.value == "Mon" && s3.value == 'RC') {
		var optionArray = ["0|Please select time", "9PM|9PM"];
	} else if(s1.value == "Mon" && s3.value == 'AF') {
		var optionArray = ["0|Please select time", "6PM|6PM"];
	} else if(s1.value == "Tue" && s3.value == 'CH') {
		var optionArray = ["0|Please select time", "1PM|1PM"];
	} else if(s1.value == "Tue" && s3.value == 'RC') {
		var optionArray = ["0|Please select time", "9PM|9PM"];
	} else if(s1.value == "Tue" && s3.value == 'AF') {
		var optionArray = ["0|Please select time", "6PM|6PM"];
	} else if(s1.value == "Wed" && s3.value == 'RC') {
		var optionArray = ["0|Please select time", "1PM|1PM"];
	} else if(s1.value == "Wed" && s3.value == 'AC') {
		var optionArray = ["0|Please select time", "9PM|9PM"];
	} else if(s1.value == "Wed" && s3.value == 'CH') {
		var optionArray = ["0|Please select time", "6PM|6PM"];
	} else if(s1.value == "Thu" && s3.value == 'RC') {
		var optionArray = ["0|Please select time", "1PM|1PM"];
	} else if(s1.value == "Thu" && s3.value == 'AC') {
		var optionArray = ["0|Please select time", "9PM|9PM"];
	} else if(s1.value == "Thu" && s3.value == 'CH') {
		var optionArray = ["0|Please select time", "6PM|6PM"];
	} else if(s1.value == "Fri" && s3.value == 'RC') {
		var optionArray = ["0|Please select time", "1PM|1PM"];
	} else if(s1.value == "Fri" && s3.value == 'AC') {
		var optionArray = ["0|Please select time", "9PM|9PM"];
	} else if(s1.value == "Fri" && s3.value == 'CH') {
		var optionArray = ["0|Please select time", "6PM|6PM"];
	} else if(s1.value == "Sat" && s3.value == 'AF') {
		var optionArray = ["0|Please select time", "3PM|3PM"];
	} else if(s1.value == "Sat" && s3.value == 'AC') {
		var optionArray = ["0|Please select time", "9PM|9PM"];
	} else if(s1.value == "Sat" && s3.value == 'RC') {
		var optionArray = ["0|Please select time", "6PM|6PM"];
	} else if(s1.value == "Sat" && s3.value == 'CH') {
		var newOption = document.createElement("option");
		var optionArray = ["0|Please select time", "12PM|12PM"];
	} else if(s1.value == "Sun" && s3.value == 'AF') {
		var optionArray = ["0|Please select time", "3PM|3PM"];
	} else if(s1.value == "Sun" && s3.value == 'AC') {
		var optionArray = ["0|Please select time", "9PM|9PM"];
	} else if(s1.value == "Sun" && s3.value == 'RC') {
		var optionArray = ["0|Please select time", "6PM|6PM"];
		s2.options.add(newOption);
	} else if(s1.value == "Sun" && s3.value == 'CH') {
		var optionArray = ["0|Please select time", "12PM|12PM"];
	}
	
	for(var option in optionArray) {
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}

}

function popPrice(s1, s2) {
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	
	var priceSA = document.getElementById('SAtickets');
	var priceCA = document.getElementById('CAtickets');
	var priceSP = document.getElementById('SPtickets');
	var priceFA = document.getElementById('FAtickets');
	var priceFC = document.getElementById('FCtickets');
	var priceB1 = document.getElementById('B1tickets');
	var priceB2 = document.getElementById('B2tickets');
	var priceB3 = document.getElementById('B3tickets');
	
	if(s2.value == "Mon" || s2.value == "Tue" || s1.value == "1PM" && s2.value != "Sat" || s1.value == "1PM" && s2.value != "Sun") {
		priceSA.value = "12";
		priceCA.value = "8";
		priceSP.value = "10";
		priceFA.value = "25";
		priceFC.value = "20";
		priceB1.value = "20";
		priceB2.value = "20";
		priceB3.value = "20";
	} else {
		priceSA.value = "18";
		priceCA.value = "15";
		priceSP.value = "12";
		priceFA.value = "30";
		priceFC.value = "25";
		priceB1.value = "30";
		priceB2.value = "30";
		priceB3.value = "30";
	}
}


