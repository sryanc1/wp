document.addEventListener('keypress', updateCount);

function updateCount(event) {
	
	var counterType = document.getElementById("type").value;
	var keyName = event.key;
	var numToCount = document.getElementById("numToCount").value;
	numToCount = Number(numToCount);
	var countTotal = document.getElementById("diffTotal").value;
	countTotal = Number(countTotal);
	var keyFound = false;	
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
			if (keyName != "m") {
				document.getElementById("diffTotal").value = countTotal +1;
				document.getElementById("diffTotal").style.backgroundColor = "lightblue";
			}
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
}
