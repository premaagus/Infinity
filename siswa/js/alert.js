var oke_s_btn = document.querySelectorAll('.btn-s-alert')['0'];
var oke_e_btn = document.querySelectorAll('.btn-e-alert')['0'];
var successMsg = document.getElementById('success-msg');
var opacity = document.getElementById('opacity');
var body = document.querySelectorAll('body')['0'];
var captSAlert = document.getElementById('capt-s-alert');
var descSAlert = document.getElementById('desc-s-alert');
var captEAlert = document.getElementById('capt-e-alert');
var descEAlert = document.getElementById('desc-e-alert');
var errorMsg = document.getElementById('error-msg');

function successAlert(capt, desc){

	captSAlert.innerHTML = capt;
	descSAlert.innerHTML = desc;

	successMsg.style.display = "block";
	opacity.style.display = "block";

	setInterval(function(){
		successMsg.style.opacity = "1";
		opacity.style.opacity = "1";
	}, 30);

	oke_s_btn.addEventListener('click', function(){
		successMsg.style.opacity = "0";
		opacity.style.opacity = "0";
		successMsg.style.display = "none";
		opacity.style.display = "none";
	});
}

function errorAlert(capt, desc){
	captEAlert.innerHTML = capt;
	descEAlert.innerHTML = desc;

	errorMsg.style.display = "block";
	opacity.style.display = "block";

	setInterval(function(){
		errorMsg.style.opacity = "1";
		opacity.style.opacity = "1";
	}, 30);

	oke_e_btn.addEventListener('click', function(){
		errorMsg.style.opacity = "0";
		opacity.style.opacity = "0";
		errorMsg.style.display = "none";
		opacity.style.display = "none";
	});
}