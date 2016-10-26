var wordPol = document.getElementById('wordPol'),
	wordEs  = document.getElementById('wordEs'),

	resultsTable = document.getElementById('resultsTable'),
	resultsRow = '',

	delBtns,
	saveBtns,

	textToCross,

	xml = new XMLHttpRequest();

/* INPUT FIELDS CONTROL */	

wordPol.onkeydown = function(){
	wordEs.value = '';
	if (wordPol.value.length >= 1)
		search();
	else if (wordPol.value.length < 1)
		resultsTable.innerHTML = '';
}

wordEs.onkeydown = function(){
	wordPol.value = '';
	if (wordEs.value.length >= 1)
		search();
	else if (wordEs.value.length < 1)
		resultsTable.innerHTML = '';
}

/* AJAX REQUEST */

function search(){
		if (xml.readyState == 4 || xml.readyState == 0) {
		xml.open("GET", "search.php?wordpol=" +wordPol.value+ "&wordes=" +wordEs.value, true);
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
			xmlResponse = JSON.parse(xmlResponse);
			// console.log(xmlResponse);

			// print results in table
			(function(){
				resultsRow = '';
				for ( var i = 0; i < xmlResponse.length; i++ ){
					resultsRow += '<tr> <td class ="tableRowId"> <input type="text" value="' +xmlResponse[i].id+ '" class="rowId" readonly> </td> <td> <input type="text" value="' +xmlResponse[i].es+ '" class="editEs"></td> <td><input type="text" value="' +xmlResponse[i].pol+ '" class="editPol"></td> <td><button class="delBtn">Usuń</button></td> <td><button class ="saveBtn">Zapisz zmiany</button></td> </tr>';
				}
			resultsTable.innerHTML = resultsRow;
			})();

			// add delete and add functions to buttons
			(function(){
				delBtns = document.querySelectorAll('.delBtn');
				saveBtns = document.querySelectorAll('.saveBtn');

				for ( var i = 0; i < delBtns.length; i++ ){
					delBtns[i].onclick = function(){
						var self = this;
						del(self);
					}

					saveBtns[i].onclick = function(){
						var self = this;
						save(self)
					}
				}


			})()

		}
	}
}

/* SAVE */

function save(self){
	var id = self.parentNode.parentNode.querySelector('.rowId').value, 
		esWordToChange = self.parentNode.parentNode.querySelector('.editEs').value, 
		polWordToChange = self.parentNode.parentNode.querySelector('.editPol').value;

	if (xml.readyState == 4 || xml.readyState == 0) {
		xml.open("GET", "save.php?id=" +id + "&wordes="  +esWordToChange+ "&wordpol=" +polWordToChange , true);
		xml.onreadystatechange = function(){

			if (xml.readyState == 4 && xml.status == 200) {
				console.log("changes saved");
				self.innerHTML = "Zmiany zapisane";
				setTimeout(function(){ self.innerHTML = "Zapisz zmiany";}, 2000);
			}
		}
		xml.send();
	} else {
		console.log("Delete function error");
	}

}

/* DEELETE */

function del(self){
	var id = self.parentNode.parentNode.querySelector('.rowId').value;

	if (xml.readyState == 4 || xml.readyState == 0) {
		xml.open("GET", "del.php?id=" +id , true);
		xml.onreadystatechange = function(){

			if (xml.readyState == 4 && xml.status == 200) {
				console.log("word deleted");
				self.parentNode.parentNode.querySelector('.saveBtn').style.display = 'none';
				textToCross = self.parentNode.parentNode.querySelectorAll('input');
				for ( var i = 0; textToCross.length > i; i++) { textToCross[i].style.textDecoration = 'line-through'; }
				self.innerHTML = "Słowo usunięte";
				self.onclick = '';
			}
		}
		xml.send();
	} else {
		console.log("Delete function error");
	}

}

