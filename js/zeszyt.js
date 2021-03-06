/***********************/
/*      VARIABLES      */
/***********************/

var submit_btn = document.getElementById('submit'),
	word_field = document.getElementById('word'),
	answer_hidden_field = document.getElementById('answer_hidden'),
	answer_field = document.getElementById('answer'),
	giveUp = document.getElementById('giveUp'),
	nextBtn = document.getElementById('next'),
	translateBtn = document.getElementById('translate'),

	answer,
	answer_hidden,

	phrase,
	specialChar, 

	soundNext = new Audio('mp3/Button_Press_2-Marianne_Gagnon-1415267358.mp3'),
	soundWrong = new Audio('mp3/efx_NO-Fabio_Farinelli-955789468.mp3'),
	soundBtn = document.getElementById('soundBtn'),
	onOff = '',
	isSounOn = true;

/***********************/
/*       ON LOAD       */
/***********************/

window.onload = function(){
	getWord();
}

/***********************/
/*   ON ANSW SUBMIT    */
/***********************/

submit_btn.onclick = function(e){ 
	e.preventDefault(); 
	handleAnswer();
}

answer_field.onkeydown = function(e){
	if ( e.keyCode == 13 || e.which == 13 ){
		handleAnswer();
	}
}

function handleAnswer(){
	answer = replaceMarks( getAnswer() );
	answer_hidden = replaceMarks( getAnswerHidden() );

	// console.log(answer, answer_hidden)
	if (answer == answer_hidden){
		if (isSounOn) soundNext.play();
		getWord();
	} else {
		if (isSounOn) soundWrong.play();
	}
}

function getAnswer(){
	return answer_field.value.trim().toLowerCase();
}

function getAnswerHidden(){
	return answer_hidden_field.value.trim().toLowerCase();
}

function replaceMarks(string){
	string = string.replace(/  /g, ' ');
	string = string.replace(/!/g, '');
	string = string.replace(/¡/g, '');
	string = string.replace(/¿/g, '');
	string = string.replace(/\?/g, '');

	return string;
}

/***********************/
/*   	TOGGLE SOUND	   */
/***********************/

soundBtn.onclick = function(){
	onOff = document.getElementById('onOff');

	if ( onOff.innerHTML == "on"){
		isSounOn = false;
		onOff.innerHTML = "off";
	} else {
		isSounOn = true;
		onOff.innerHTML = "on";
	}
}

/***********************/
/*   		BUTTONS 		   */
/***********************/

giveUp.onclick = function(){
	answer_field.value = answer_hidden_field.value;
}

nextBtn.onclick = function(){
	getWord();
}

translateBtn.onclick = function(){ 
	window.open("https://translate.google.pl/?hl=pl#es/en/" + answer_hidden_field.value); 
}

/***********************/
/*    AJAX REQUEST     */
/***********************/

var xml = new XMLHttpRequest();
function getWord(){
	answer_field.value = '';

	if (xml.readyState == 4 || xml.readyState == 0) {
		xml.open("GET", "getWord.php", true);
		xml.onreadystatechange = handleServerResponse;
		xml.send();
	} else {
		console.log("Ajax error");
	}
}
	
function handleServerResponse(){
	if (xml.readyState == 4) {
		if (xml.status == 200) {
			xmlResponse = xml.responseText;
			// console.log(xmlResponse);
			xmlResponse = JSON.parse(xmlResponse);
			word_field.innerHTML = xmlResponse.pol;
			answer_hidden_field.value = xmlResponse.es;
		}
	}
}

