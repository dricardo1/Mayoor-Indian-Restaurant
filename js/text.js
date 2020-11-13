var messageArray = ["Closed Due to Circumstances", "Authentic Indian Cuisine","Flavors as diverse as India!","Closed Due to Circumstances","Savour a pallette of fine tastes..."];
var messageIndex = 0;

function changeMessage() {
	// now grab the message and change it.
	var newMessage = messageArray[messageIndex];
	var messageElement = document.getElementById("mainMessage");
	messageElement.innerHTML = newMessage;
	messageIndex++;
	if (messageIndex >= messageArray.length) {
		messageIndex = 0;
	}
}

window.onload = function() {
	setInterval(changeMessage, 4000);
};