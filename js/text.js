/* Change message text */
var messageArray = ["Explore Authentic Indian Cuisine.","Flavors as diverse as India itself!","Savor a pallette of fine tastes..."];
var messageIndex = 0;

function changeMessage() {
	// now grab the message and change it.
	var newMessage = messageArray[messageIndex];
	var messageElement = document.getElementById("mainMessage");
	messageElement.textContent = newMessage;
	messageIndex++;
	if (messageIndex >= messageArray.length) {
		messageIndex = 0;
	}
}

window.onload = function() {
	setInterval(changeMessage, 4000);
};