function randomString(charList, stringLength) {
	var chars = charList;
	var string_length = stringLength;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
        // Math.floor - suapvalina iki �emesnio skai�iaus
		var rnum = Math.floor(Math.random() * chars.length);
        // substring - i�traukia simbolius i� eilut�s: nuo iki
		randomstring += chars.substring(rnum,rnum+1);
	}
    document.getElementById('07').innerHTML = randomstring;
}