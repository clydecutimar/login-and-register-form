// client-side validation of the registration form
const registerForm = document.getElementById('register-form');
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirm-password');

registerForm.addEventListener('submit', (event) => {
	if (passwordInput.value !== confirmPasswordInput.value) {
		alert('Passwords do not match');
		event.preventDefault();
	}
});
