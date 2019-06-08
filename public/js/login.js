const login = document.getElementById('id01');
const logbuton = document.getElementById('logbutton');
const closebtn = document.getElementById('closebtn');
logbuton.addEventListener('click', () => {
	login.style.display = 'block';
});

closebtn.addEventListener('click', () => {
	login.style.display = 'none';
});
