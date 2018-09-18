document.addEventListener('keypress', updateCount);

function updateCount() {
	
	var cellArray = ["z","x","c","v","b","n","m","s","d","f","g"];
	var keyName = event.key;
	if (cellArray.includes(keyName)) {
		var countTotal = document.getElementById("diffTotal").value;
		if (countTotal != 100) {
			var cellCount = document.getElementById(keyName).value;
			cellCount = Number(cellCount);
			document.getElementById(keyName).value = cellCount +1;	
			countTotal = Number(countTotal);
			document.getElementById("diffTotal").value = countTotal +1;
		} else {
			var audio = new Audio('audio_file.mp3');
			audio.play();
		}
			
	} else {
		return;
	}
}
