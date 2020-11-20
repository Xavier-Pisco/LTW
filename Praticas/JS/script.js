let form = document.getElementsByTagName('form')[0];
console.log(form.outerHTML);
let secondInput = document.querySelector('form :nth-child(2) input');
console.log(secondInput.outerHTML);

let inputs = document.querySelectorAll('form input');
for (let i = 0; i < inputs.length; i++) {
	console.log(inputs[i].outerHTML);
}

function calculate() {
	let total = document.getElementById('total');
	let sum = 0;

	let products = document.querySelectorAll('#products tbody tr');
	for (let i = 0; i < products.length; i++){
		if (products[i].children[1].tagName === 'TD'){
			sum += Number(products[i].children[1].innerHTML);
		}
	}
	total.innerHTML = String(sum);
}

form.addEventListener('submit', function (event) {
	alert('Submitted!')
	event.preventDefault();

	let newElement = document.createElement('tr');

	let description = document.createElement('td');
	description.innerHTML = event.target[0].value;

	let quantity = document.createElement('td');
	quantity.innerHTML = event.target[1].value;
	quantity.onchange = calculate();

	let action = document.createElement('td');
	let input = document.createElement('input');
	input.type = 'button';
	input.value = 'Remove';
	input.onclick = (event) => {
		newElement.remove();
		calculate();
		alert('Removed!');
	}
	action.append(input);

	newElement.append(description);
	newElement.append(quantity);
	newElement.append(action);

	document.querySelector('#products tbody').append(newElement);

	calculate();
})
