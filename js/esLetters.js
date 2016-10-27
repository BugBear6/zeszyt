/***********************/
/*   LETTERS CHANGE    */
/***********************/
var entryFields = document.querySelectorAll('.entryField');

for ( var i = 0; i < entryFields.length; i++ ) {
	var entryField = entryFields[i];

	entryField.addEventListener('keyup', function(){
				var self = this;
		changeLetters(self);
	}
}, false);



function changeLetters(self){
	// console.log(self);
	phrase = self.value;
	if( (specialChar = phrase.search('\\[i') ) >= 0)
		self.value = phrase.substring(0, specialChar) + 'í';

	if( (specialChar = phrase.search('\\[a') ) >= 0)
		self.value = phrase.substring(0, specialChar) + 'á';

	if( (specialChar = phrase.search('\\[e') ) >= 0)
		self.value = phrase.substring(0, specialChar) + 'é';

	if( (specialChar = phrase.search('\\[o') ) >= 0)
		self.value = phrase.substring(0, specialChar) + 'ó';

	if( (specialChar = phrase.search('\\[u') ) >= 0)
		self.value = phrase.substring(0, specialChar) + 'ú';

	if( (specialChar = phrase.search(';') ) >= 0)
		self.value = phrase.substring(0, specialChar) + 'ñ';

	if( (specialChar = phrase.search(":") ) >= 0)
		self.value = phrase.substring(0, specialChar) + 'ü';	

	if( (specialChar = phrase.search("\\[!") ) >= 0)
		self.value = phrase.substring(0, specialChar) + '¡';	

	if( (specialChar = phrase.search("\\[\\?") ) >= 0)
		self.value = phrase.substring(0, specialChar) + '¿';		
}
