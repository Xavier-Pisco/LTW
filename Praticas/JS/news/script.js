let commentForm = document.querySelector('form');

commentForm.addEventListener('submit', function(event) {
	submitComment(event);
})

function submitComment(event){
	event.preventDefault(event);

	let id = document.querySelector('form input[type=hidden]').value;
	let comment_id = document.querySelector('.comment:last-of-type').attributes['data-id'].value;
	let username = document.querySelector('form input[type=text]').value;
	let comment = document.querySelector('form textarea').value;
	console.log(id);
	console.log(comment_id);
	console.log(username);
	console.log(comment);
}