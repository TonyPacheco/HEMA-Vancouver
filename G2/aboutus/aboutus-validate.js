function checkName() {
	var nameBox = document.getElementById("firstlast");
	var name = nameBox.value;

	var pattern = /^[a-zA-Z ]*$/;

	if(name.search(pattern) == -1) {
		nameBox.setCustomValidity("Name contains invalid characters. A-Z, a-z, and space are valid.");
		return false;
	}

	nameBox.setCustomValidity("");
	return true;
}

function checkComment() {
	var commentBox = document.getElementById("comments");
	var comment = commentBox.value;

	var pattern = /^[a-zA-Z0-9!@#%^&*_,. ]*$/;

	if(comment.search(pattern) == -1) {
		commentBox.setCustomValidity("Comment contains invalid characters. A-Z, a-z, 0-9, and ! @ # % ^ & * _ , . are valid.");
		return false;
	}

	commentBox.setCustomValidity("");
	return true;
}

document.getElementById("firstlast").onchange = checkName;
document.getElementById("comments").onchange = checkComment;