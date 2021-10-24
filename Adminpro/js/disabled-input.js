let edit_button = document.getElementById('edit-input');
edit_button.addEventListener('click', check_disable);
let save_button = document.getElementById('save-input');



function check_disable() {
	edit_button.classList.add("button-edit--hidden");
	save_button.classList.remove("_hidden");
	let input = document.getElementsByTagName('input');
	for (let i = 0; i < input.length; i++) {
		input[i].disabled = false;
	}
}
