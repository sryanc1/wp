

/*Function used to calculate the order price - 
 *html properties are used to halt submission of invalid entries
 *using the minimum, type and required value properties
 */
function calculatePrice() {	
	var size = document.getElementById("size").value;
	var qty = document.getElementById("qty").value;
	
	//If these no item quantity specified - do nothing
	if (qty == ""){
		return;
	}
	
	//Check the quantity dose not have decimal places
	else if (qty % 1 !== 0){
		document.getElementById("price").innerHTML = "Sorry - you can't have part of an item!";
	}
	
	//Check the user has not entered a negative value - report a negative comment if they have
	else if (qty < 0 ){
		document.getElementById("price").innerHTML = "Dont be negative! - you cant have less than 1 item";
	}
	
	//Caclulate and report cost for the option selected
	else {
		var cost = 0.00;
		if (size == "large"){
			cost = 100 * qty;
			document.getElementById("price").innerHTML = "Total price: AU$ "+ cost +".00";
		}
		else if (size == "small"){
			cost = 50 * qty;
			document.getElementById("price").innerHTML = "Total price: AU$ "+ cost +".00";	
		}
		//If no option is selected - request a selection
		else document.getElementById("price").innerHTML = "Please select a size";
	}
}


//Function used to increment the quantity field and recalculate the order price
var incrementButton = document.getElementById("incrementQty");
incrementButton.addEventListener("click", countUp);
incrementButton.addEventListener("click", calculatePrice);
	
	function countUp() {
		var qty = document.getElementById("qty").value;
		qty = Number(qty);
		document.getElementById("qty").value = qty + 1;
		}
		
		
//Function used to increment the quantity field and recalculate the order price
var decrementButton = document.getElementById("decrementQty");
decrementButton.addEventListener("click", countDown);
decrementButton.addEventListener("click", calculatePrice);

	function countDown() {
		var qty = document.getElementById("qty").value;
		qty = Number(qty);
		if (qty > 0 ) {
			document.getElementById("qty").value = qty - 1;
			}
		else return;
		}
