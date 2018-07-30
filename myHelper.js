
         
function calculatePrice() {	
	var size = document.getElementById('size').value;
	var qty = document.getElementById('qty').value;
	
	if (qty == ""){
		return;
	}
	
	else if (qty % 1 != 0){
		document.getElementById("price").innerHTML = "Sorry - you can't have part of an item!";
	}
		
	else if (qty < 0 ){
		document.getElementById("price").innerHTML = "Don't be silly - you cant have less than 1 item!";
	}
	
	else {
		var cost = 0.00;
		if (size == 'large'){
			cost = 100 * qty;
			document.getElementById("price").innerHTML = "Total price: AU$ "+ cost +.toFixed(2);
		}
		else if (size == 'small'){
			cost = 50 * qty;
			document.getElementById("price").innerHTML = "Total price: AU$ "+ cost +toFixed(2);	
		}
		else document.getElementById("price").innerHTML = "Please select a size";
	}
}

