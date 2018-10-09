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
	var percent = 0;
	var percentHighest = 0;
	var percentTot = 0;
	var turn = 1;
	var len = cellArray.length;
	var countTotal = document.getElementById("diffTotal").value;
	countTotal = Number(countTotal);
	for (i=0; i<len; i++) {
		var cellType = document.getElementById(cellArray[i]).value;
		cellType = Number(cellType);
		percent = (cellType / countTotal)*100; 
		if (percent % 0.5 == 0 && percent != 0 && turn / 2 == 0.5) {
			percent = Math.floor(percent);
			turn = turn +1;
		} 
		percent = Math.round(percent);
		if (percent > percentHighest) {
			percentHighest = percent;
			var highestCell = cellArray[i]
		}
		document.getElementById(cellArray[i]).value = percent;
		document.getElementById(cellArray[i]).style.backgroundColor = "lightgreen";
		percentTot = percentTot + percent;
	}
	if (percentTot !=100) {
		var dif = percentTot - 100;
		document.getElementById(highestCell).value = percentHighest - dif;
		alert("Warning! due to rounding the total percentage was calculated at " + percentTot + "%, the highest cell percentage has been ajusted accordingly");
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


function openURL() {
	var shell = new ActiveXObject("WScript.Shell");
	shell.run("chrome https://titan.csit.rmit.edu.au/~s3555490/wp/a4/index.php");
}

