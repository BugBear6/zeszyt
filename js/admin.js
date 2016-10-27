/***********************/
/*    ADMIN PANEL      */
/***********************/

var clear = document.getElementById('clear'),
	addB = document.getElementById('add'),
	back = document.getElementById('back'), 
	newWordPolField = document.getElementById('newWordPol'),
	newWordEsField = document.getElementById('newWordEs');

back.onclick = function(){ window.location.href = "/zeszyt"; }

add.onclick = function(){ addWord(); }

clear.onclick = function() { clearForm(); }

function clearForm() {
	newWordPolField.value = '';
	newWordEsField.value = '';
}

newWordPol.addEventListener('keyup', function(e){
	if ( e.keyCode == 13 || e.which == 13 ){
		if ( newWordEs.value != '' && newWordPol.value != '' )
			addWord();
	newWordEsField.focus();
	}
}, false);


newWordEs.addEventListener('keyup', function(e){
	if ( e.keyCode == 13 || e.which == 13 ){
		if ( newWordEs.value != '' && newWordPol.value != '' )
			addWord();
	}
}, false);


/***********************/
/*   AJAX REQUESTS     */
/***********************/

var xml = new XMLHttpRequest();

/* ADD WORD */

function addWord(){

	newWordPol = newWordPolField.value,
	newWordEs = newWordEsField.value;

	if (xml.readyState == 4 || xml.readyState == 0) {
		xml.open("GET", "addWord.php?newWordEs=" + newWordEs + "&newWordPol=" + newWordPol, true);
		xml.onreadystatechange = function(){

			if (xml.readyState == 4) {
				if (xml.status == 200) {
					console.log("New word: " + newWordEs + " - " + newWordPol + " added.");
						clearForm();
				}
			}
		};
		xml.send();
	}
}

/* FIND WORD */

function findWord(){


	if (xml.readyState == 4 || xml.readyState == 0) {
		xml.open("GET", "addWord.php?newWordEs=" + newWordEs + "&newWordPol=" + newWordPol, true);
		xml.onreadystatechange = function(){

			if (xml.readyState == 4) {
				if (xml.status == 200) {
					console.log("New word: " + newWordEs + " - " + newWordPol + " added.");
						clearForm();
				}
			}
		};
		xml.send();
	}
}



