function minutesInterval(hhStart, mmStart, hhEnd, mmEnd){
    var totalMinutesStart = (hhStart * 60 + mmStart * 1); // * 1 nes jungė eilutes, o ne vykdė sudėtį
    var totalMinutesEnd = (hhEnd * 60 + mmEnd * 1);
    document.getElementById('10').innerHTML = (totalMinutesEnd - totalMinutesStart);
    console.log(totalMinutesStart);
    console.log(totalMinutesEnd);
}