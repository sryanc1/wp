document.addEventListener('keypress', updateCount);

function updateCount() {
	
	var cellArray = ["z","x","c","v","b","n","m","d","f","g","h"];
	var keyName = event.key;
	if (cellArray.includes(keyName)) {
		var countTotal = document.getElementById("diffTotal").value;
		countTotal = Number(countTotal);
		if (countTotal != 100) {
			var cellCount = document.getElementById(keyName).value;
			cellCount = Number(cellCount);
			document.getElementById(keyName).style.backgroundColor = "lightpink";
			document.getElementById(keyName).value = cellCount +1;	
			document.getElementById("diffTotal").value = countTotal +1;
			document.getElementById("diffTotal").style.backgroundColor = "lightblue";
		} else {
			var audio = new Audio('audio_file.mp3');
			audio.play();
		}
			
	} else {
		return;
	}
}
