function buttonPress() {
	document.getElementById('click').innerHTML = 'Nickname: Queen B...nough said';
}

//AUDIO ATTEMPT

var audio = new audio("http://musicpleer.audio/#!1ec7f0d93c43d700c850a34d6603302c");

function playaudio() {
	audio.play();
}

//COLOR FUNCTIONS
function changeColorRed() {
	document.getElementById('mouse1').style.backgroundColor = 'red';
}

function changeColorBlue() {
	document.getElementById('mouse2').style.backgroundColor = 'blue';
}

function changeColorBlack() {
	document.getElementById('mouse3').style.backgroundColor = 'black';
}

//PICTURE FUNCTIONS
function changePicture1() {
	document.getElementById('image2').src='images/giphy-downsized-1.gif';
}

function changePicture2() {
	document.getElementById('image3').src='images/giphy-downsized-2.gif';
}

function changePicture3() {
	document.getElementById('image4').src='images/giphy-downsized-3.gif';
}