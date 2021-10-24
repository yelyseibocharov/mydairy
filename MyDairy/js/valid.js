document.addEventListener('DOMContentLoaded', function () {
	const form = document.getElementById('form');
	form.addEventListener('submit', formSend);

	async function formSend(e) {
		e.preventDefault();

		let error = formValidate(form);


		if (error === 0) {
			form.submit();
		}
	}


	function formValidate(form) {
		let error = 0;
		let formReq = document.querySelectorAll('._req');

		for (let i = 0; i < formReq.length; i++) {
			const input = formReq[i];
			formRemoveError(input);

			if (input.classList.contains('_email')) {
				if (emailTest(input)) {
					formRemoveSucces(input);
					formAddError(input);
					error++;
				} else {
					formRemoveError(input);
					formAddSucces(input);
				}
			} else if (input.classList.contains('_ipn')) {
				if (input.value.length < 10) {
					formRemoveSucces(input);
					formAddError(input);
					error++;
				} else {
					formRemoveError(input);
					formAddSucces(input);
				}
			} else {
				if (input.value === '') {
					formRemoveSucces(input);
					formAddError(input);
					error++;
				} else {
					formRemoveError(input);
					formAddSucces(input);
				}
			}
		}
		return error;
	}
	function formAddError(input) {
		input.classList.add('_error');
	}
	function formRemoveError(input) {
		input.classList.remove('_error');
	}
	function formAddSucces(input) {
		input.classList.add('_succes');
	}
	function formRemoveSucces(input) {
		input.classList.remove('_succes');
	}

	function emailTest(input) {
		return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
	}

});