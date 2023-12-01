//popup form

document.getElementById("register-form").addEventListener("click", function(){
	document.querySelector(".popup-bg").style.display="flex";
});

document.querySelector(".close").addEventListener("click", function(){
	document.querySelector(".popup-bg").style.display="none";
});
