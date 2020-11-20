let commentForm = document.querySelector('form');

function submitComment(event){
	event.preventDefault(event);
	console.log('Here');
}

commentForm.addEventListener('submit', function(event) {
	submitComment(event);
})