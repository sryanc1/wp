

/*Function used to calculate the order price - 
 *html properties are used to halt submission of invalid entries
 *using the minimum, type and required value properties
 */
	
function calculatePrice() {
	var oderPrice = {
	bag001: { small:50.00, large:100.00 },
	bag002: { small:50.00, large:100.00 }
	};
	var size = document.getElementById("size").value;
	var qty = document.getElementById("qty").value;
	var priceElement = document.getElementById("price");
	
	//If there is no item quantity specified - do nothing
	if (qty == ""){
		return;
	}
	
	//Check the quantity dose not have decimal places
	else if (qty % 1 !== 0){
		priceElement.innerHTML = "Sorry - you can't have part of an item!";
		priceElement.style.backgroundColor = "orange";
	}
	
	//Check the user has not entered a negative value - report a negative comment if they have
	else if (qty < 0 ){
		priceElement.innerHTML = "Dont be negative! - you cant have less than 1 item";
		priceElement.style.backgroundColor = "orange";
	}
	
	//Caclulate and report cost for the option selected
	else {
		var cost = 0.00;
		if (size == "large"){
			cost = oderPrice.bag001.large * qty;
			priceElement.innerHTML = "Total price: AU$ "+ cost +".00";
			priceElement.style.backgroundColor = "#4b7e6b";
		}
		else if (size == "small"){
			cost = oderPrice.bag001.small * qty;
			priceElement.innerHTML = "Total price: AU$ "+ cost +".00";
			priceElement.style.backgroundColor = "#4b7e6b";	
		}
		//If no option is selected - request a selection
		else priceElement.innerHTML = "Please select a size";
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
