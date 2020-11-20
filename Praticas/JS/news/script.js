let commentForm = document.querySelector('form');

function submitComment(){
	event.preventDefault();
	console.log('Here');
}

commentForm.addEventListener('submit', function(event) {
	submitComment();
})