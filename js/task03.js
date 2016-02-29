function randScope(a, b){
    scope = Math.max(a, b) - Math.min(a, b);
    start = Math.min(a, b);
    var rand = (Math.random()) * scope + start;
    rand = Math.round(rand);
    document.getElementById('t03').innerHTML = rand;
}
function changeHeading(a, b){
    document.getElementById('t03_01').innerHTML = a;
    document.getElementById('t03_02').innerHTML = b;
}