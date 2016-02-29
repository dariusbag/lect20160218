// finds the middle number of 3
function findMiddle(a, b, c) {
    var minimum = Math.min(a, b, c);
    var maximum = Math.max(a, b, c);
    // checking if all are numbers
    if (isNaN(a) || isNaN(b) || isNaN(c)){
        document.getElementById("02").innerHTML = 'Visi parametrai turi būti skaičiai';
    // checking if all are different
    } else if ((a === b) || (a === c) || (b === c)){
        document.getElementById("02").innerHTML = 'Du arba daugiau skaičių yra lygūs';
    } else{
        if(a > minimum && a < maximum){
            document.getElementById("02").innerHTML = a;
        }else if(b > minimum && b < maximum){
            document.getElementById("02").innerHTML = b;        
        }else{
            document.getElementById("02").innerHTML = c;        
        }
    }
}