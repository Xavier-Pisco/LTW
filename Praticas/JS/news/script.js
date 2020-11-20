let commentForm = document.querySelector('form');

commentForm.addEventListener('submit', function (event) {
	submitComment(event);
})

function encodeForAjax(data) {
	return Object.keys(data).map(function (k) {
		return encodeURIComponent(k) + '=' + encodeURIComponent(data[k])
	}).join('&')
}

function submitComment(event) {
	event.preventDefault(event);

	let id = document.querySelector('form input[type=hidden]').value;
	let comment_id = document.querySelector('.comment:last-of-type').attributes['data-id'].value;
	let username = document.querySelector('form input[type=text]').value;
	let comment = document.querySelector('form textarea').value;

	let request = new XMLHttpRequest();
	request.addEventListener('load', receiveComments);
	request.open("post", "api_add_comment.php", true);
	request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	request.send(encodeForAjax({id: id, comment_id: comment_id, username: username, comment: comment}));
}

function receiveComments() {
	console.log("Received comments");
}