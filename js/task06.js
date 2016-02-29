function isReverse(a){
    if (a === rev(a)){
        document.getElementById('06').innerHTML = a +' '+ rev(a) +' Veidrodinis';
    }else{
        document.getElementById('06').innerHTML = a +' '+ rev(a) +' Neveidrodinis';
    }
}
function rev(s) {
    s = s.toString();
    var rev = s.split('').reverse().join('');
    return rev;
}