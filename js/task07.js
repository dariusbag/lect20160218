function randomString(charList, stringLength) {
	var chars = charList;
	var string_length = stringLength;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
        // Math.floor - suapvalina iki þemesnio skaièiaus
		var rnum = Math.floor(Math.random() * chars.length);
        // substring - iðtraukia simbolius ið eilutës: nuo iki
		randomstring += chars.substring(rnum,rnum+1);
	}
    document.getElementById('07').innerHTML = randomstring;
}