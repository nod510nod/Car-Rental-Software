var rental = new Array();
rental["compact"]=19.95;
rental["standard"]=24.95;
rental["luxury"]=39.95;

function getRentalCost()
{
	var rentalCost = 0;
	var carForm = document.forms["rentalForm"];

	var selectedCar = carForm.elements["userRental"];

	for (var i = 0; i < selectedCar.length; i++) {
		if(selectedCar[i].checked){
			rentalCost = rental[selectedCar[i].value];
			break;
		}
	}
		return rentalCost;
}

function calculateMileage(){
	var carForm = document.forms["rentalForm2"];
	var test = carForm.elements["usr"].value; 
	var miles = test *.39;

	var total2 = document.getElementById('total2');
	total2.style.display='block';
	total2.innerHTML = "Total: $"+miles;

}
function calculateTotal()
{
	var rentalPrice = getRentalCost();
	var total = document.getElementById('total');
	total.style.display='block';
	total.innerHTML = "Total: $"+rentalPrice;
}

function hideTotal(){
	var total = document.getElementById('total');
	total.style.display='none';
}