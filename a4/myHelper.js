document.addEventListener('keypress', updateCount);

function updateCount(event) {
	
	var counterType = document.getElementById("type").value;
	var keyName = event.key;
	var numToCount = document.getElementById("numToCount").value;
	numToCount = Number(numToCount);
	var countTotal = document.getElementById("diffTotal").value;
	countTotal = Number(countTotal);
	var cellsCounted = document.getElementById("cellsCounted").value
	var keyFound = false;
	//---------Counter for blood cells--------------------------------
	if (counterType == "blood"){	
		var cellArray = ["z","x","c","v","b","n","m","d","f","g","h"];
		var len = cellArray.length;
		for (i=0; i<len; i++) {
			if (keyName == cellArray[i]) {
				var keyFound = true;
			} 
		}
		if (keyFound == true && countTotal !== numToCount) {
			var cellCount = document.getElementById(keyName).value;
			cellCount = Number(cellCount);
			document.getElementById(keyName).style.backgroundColor = "lightpink";
			document.getElementById(keyName).value = cellCount +1;
			document.getElementById("cellsCounted").value = cellsCounted + keyName;
			if (keyName != "m") {
				document.getElementById("diffTotal").value = countTotal +1;
				document.getElementById("diffTotal").style.backgroundColor = "lightblue";
			}
		} else if (keyFound == true) {
			var audio = new Audio('audio_file.mp3');
			audio.play();
			document.getElementById("diffTotal").style.backgroundColor = "lightgreen";
		}
	//----------Counter for marrow cells-------------------------------	 	
	} else if (counterType == "marrow") {
		var cellArray = ["a","s","d","f","g","z","x","c","v","b","n"];
		var len = cellArray.length;
		for (i=0; i<len; i++) {
			if (keyName == cellArray[i]) {
				var keyFound = true;
			} 
		}
		if (keyFound == true && countTotal !== numToCount) {
			var cellCount = document.getElementById(keyName).value;
			cellCount = Number(cellCount);
			document.getElementById(keyName).style.backgroundColor = "lightpink";
			document.getElementById(keyName).value = cellCount +1;
			document.getElementById("diffTotal").value = countTotal +1;
			document.getElementById("diffTotal").style.backgroundColor = "lightblue";
			document.getElementById("cellsCounted").value = cellsCounted + keyName;
		} else if (keyFound == true) {
			var audio = new Audio('audio_file.mp3');
			audio.play();
			document.getElementById("diffTotal").style.backgroundColor = "lightgreen";
		}	 	
	} else {
		return;
	}
}

var percentageButton = document.getElementById("percentageButton");
percentageButton.addEventListener("click", percentageCalc);

function percentageCalc() {
	
	var type = document.getElementById("type").value;
	if (type == "blood"){
		var cellArray = ["z","x","c","v","b","n","m","d","f","g","h"];
		calc(type, cellArray);
	} else if (type == "marrow") {
		var cellArray = ["a","s","d","f","g","z","x","c","v","b","n"];
		calc(type, cellArray);
	}
}

function calc(type, cellArray) {
	
	this.type = type;
	this.cellArray = cellArray;
	
	var len = cellArray.length;
	var countTotal = document.getElementById("diffTotal").value;
	countTotal = Number(countTotal);
	for (i=0; i<len; i++) {
		var cellType = document.getElementById(cellArray[i]).value;
		cellType = Number(cellType);
		var percent = (cellType / countTotal)*100;
		document.getElementById(cellArray[i]).value = Math.round(percent);
		document.getElementById(cellArray[i]).style.backgroundColor = "lightgreen";
	}
}

var rewindButton = document.getElementById("rewindButton");
rewindButton.addEventListener("click",rewind);

function rewind() {
	
	var countTotal = document.getElementById("diffTotal").value;
	countTotal = Number(countTotal);
	
	var cellsCounted = document.getElementById("cellsCounted").value;
	
	var a = false;
	if (cellsCounted != "") {
		a = true;
	}
	
	var y = cellsCounted.split("");
	var x = y.pop();

	var cellCount = document.getElementById(x).value;
	cellCount = Number(cellCount);
	

	if (a == true) {
		document.getElementById("diffTotal").style.backgroundColor = "lightyellow";
		document.getElementById("diffTotal").value = countTotal -1;
		document.getElementById(x).style.backgroundColor = "lightyellow";
		document.getElementById(x).value = cellCount -1;
		document.getElementById("cellsCounted").value = y.join("");
	}
}
