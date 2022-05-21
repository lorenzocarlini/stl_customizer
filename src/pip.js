window.onload = function () {
	var iframeWin = document.getElementById("da-iframe").contentWindow,
		form = document.getElementById("the-form"),
		myMessage = document.getElementById("my-message");

	myMessage.select();

	form.onsubmit = function () {
		iframeWin.postMessage(myMessage.value, "*");
		return false;
	};
};
