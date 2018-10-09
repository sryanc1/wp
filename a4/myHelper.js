

//--------------CELL TRACKING / COUNTING FUNCTION-----------------------
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
				keyFound = true;
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


//----------------FUNCTIONS TO CALCULATE PERCENTAGES--------------------
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
	var percent = 0;				//percent of the current cell
	var percentHighest = 0;			//highest percent is used for adjustments
	var percentTot = 0;				//make sure the final percent = 100
	var turn = 2;					//to track percentages ending in .5
	var len = cellArray.length;
	var countTotal = document.getElementById("diffTotal").value;
	countTotal = Number(countTotal);
	
	
	for (i=0; i<len; i++) {
		var cellType = document.getElementById(cellArray[i]).value;
		cellType = Number(cellType);
		percent = (cellType / countTotal)*100; 
			
		//Average percentages ending with .5 that would otherwise round up
		if (percent % 0.5 == 0 && percent != 0) {
			turn = turn +1;
			if (turn % 2 == 0) {
				percent = Math.floor(percent);
			}
		}		
		//Function to round percentages to whole numbers
		percent = Math.round(percent);	
		
		//Find the highest count and use this to adjust percentage varience
		if (percent > percentHighest && cellArray[i] != "m") {
			percentHighest = percent;
			var highestCell = cellArray[i]
		}	
			
		document.getElementById(cellArray[i]).value = percent;
		document.getElementById(cellArray[i]).style.backgroundColor = "lightgreen";		
		//Exclude NRBC's from the total percentage adjusments - NRBC's are non-totaling 
		if (cellArray[i] != "m") {
			percentTot = percentTot + percent;
		}
	}	
	//Make final adjustment to the count with the highest percentage - ie least affected 
	if (percentTot !=100) {
		var dif = percentTot - 100;
		document.getElementById(highestCell).value = percentHighest - dif;
		alert("Warning! due to rounding the total percentage was calculated at " + percentTot + "%, the highest cell percentage has been ajusted accordingly");
	}
}


//-------------REWIND CELL COUNT FUNCTION-------------------
var rewindButton = document.getElementById("rewindButton");
rewindButton.addEventListener("click",rewind);

function rewind() {
	
	var countTotal = document.getElementById("diffTotal").value;
	countTotal = Number(countTotal);
	var cellsCounted = document.getElementById("cellsCounted").value;
	var a = false;
	
	//Check to make sure the cell tracking box is not empty
	if (cellsCounted != "") {
		a = true;
	}
	
	//split() sets the values of the cells counted so far in an array
	var y = cellsCounted.split("");
	//pop() deletes and returns the last value of the cell tracking box- in this case x
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


//--------------OPEN CHROME FROM IE----------------- does not work?
function openURL() {
	var shell = new ActiveXObject("WScript.Shell");
	shell.run("chrome https://titan.csit.rmit.edu.au/~s3555490/wp/a4/index.php");
}

