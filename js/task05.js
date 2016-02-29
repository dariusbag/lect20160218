function reverse(s) {
    s = s.toString();
    var rev = s.split('').reverse().join('');
    document.getElementById('05').innerHTML = rev;
}