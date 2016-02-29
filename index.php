<style>
h1 {margin:auto; border:1px solid #000080;}
body {background-color:#dddddd; color:#000080; font-family:calibri; margin: 20px;}
h2 {font-size: 16px; margin:0px 10px 0px 10px;}
#s01, #s02, #s03, #s04, #s05, #s06, #s07, #s08, #s09, #s10 {background-color:#e5ffa5; width: 45%; border: 1px solid #000080; padding:5px; margin:10px; display:block; float:left;}
#s01, #s02, #s03, #s04, #s05, #s06{height:160px}
#s07, #s08{height:240px}
#s09, #s10 {height:260px}
</style>
<h1>Užduotys - JS</h1>
<div id="s01">
<h2>Užduotis 1: sugeneruoti atsitiktinį sveikąjį skaičių </h2>
<script src="js/task01.js"></script>
<button onclick="rand()">Atsitiktinio skaičiaus generatorius</button>
<div id="01">Vieta rezultatui</div>
<br />
<button onclick="this.innerHTML=Math.random()">Gauti atsitiktinį skaičių</button>
</div>
<div id="s02">
<h2> 2: surasti "vidurinį" iš duotų trijų sveikųjų skaičių </h2>
<script src="js/task02.js"></script>
<form>
    <input type="text" id="t02num01" value="" autocomplete="off" placeholder="Įvesti skaičių"onkeyup="findMiddle(document.getElementById('t02num01').value, document.getElementById('t02num02').value, document.getElementById('t02num03').value);"><br />
    <input type="text" id="t02num02" value="" autocomplete="off" placeholder="Įvesti skaičių"onkeyup="findMiddle(document.getElementById('t02num01').value, document.getElementById('t02num02').value, document.getElementById('t02num03').value);"><br />
    <input type="text" id="t02num03" value="" autocomplete="off" placeholder="Įvesti skaičių"onkeyup="findMiddle(document.getElementById('t02num01').value, document.getElementById('t02num02').value, document.getElementById('t02num03').value);"><br />
</form>
<div id="02">Vieta rezultatui</div>
</div>
<div id="s03">
<h2> 3: sugeneruoti atsitiktinį sveikąjį skaičių tarp <span id="t03_01">1000</span> ir <span id="t03_02">2000</span></h2>
<script src="js/task03.js"></script>
<form>
    <input type="text" id="t03n1" value="1000" autocomplete="off" onkeyup="changeHeading(document.getElementById('t03n1').value, document.getElementById('t03n2').value)"><br />
    <input type="text" id="t03n2" value="2000" autocomplete="off" onkeyup="changeHeading(document.getElementById('t03n1').value, document.getElementById('t03n2').value)"><br />
    <input type="button" value="Sugeneruoti skaičių" onclick="randScope(document.getElementById('t03n1').value, document.getElementById('t03n2').value)"
</form>
<div id="t03">Vieta rezultatui</div>
</div>
<div id="s04">
<h2> 4: pagal pateiktą gimimo dieną ir mėnesį nustatyti zodiako ženklą </h2>
<script src="js/task04.js"></script>
<form>
    <select id="t04month" >
        <option value=" ">Pasirinkti mėnesį</option>
        <option value="0">Sausis</option>
        <option value="1">Vasaris</option>
        <option value="2">Kovas</option>
        <option value="3">Balandis</option>
        <option value="4">Gegužė</option>
        <option value="5">Birželis</option>
        <option value="6">Liepa</option>
        <option value="7">Rugpjūtis</option>
        <option value="8">Rugsėjis</option>
        <option value="9">Spalis</option>
        <option value="10">Lapkritis</option>
        <option value="11">Gruodis</option>
    </select>
    <input type="text" id="t04day" value="" autocomplete="off" placeholder="Įvesti dieną">
    <input type="button" onclick="getZodiac(parseInt(document.getElementById('t04month').value), parseInt(document.getElementById('t04day').value));" value="Gauti zodiako ženklą">
</form>
<div id="04">Vieta rezultatui</div>
</div>
<div id="s05">
<h2> 5: skaičiaus skaitmenis išrikiuoti atvirkščiai</h2>
<script src="js/task05.js"></script>
<input type="text" id="t05num01" value="" autocomplete="off" placeholder="Skaičius apvertimui" onkeyup="reverse(document.getElementById('t05num01').value)"><br />
<div id="05">Vieta rezultatui</div>
</div>
<div id="s06">
<h2> 6: nustatyti ar duotas skaičius yra veidrodinis </h2>
<script src="js/task06.js"></script>
<input type="text" id="t06num01" value="" autocomplete="off" placeholder="Skaičius apvertimui" onkeyup="isReverse(document.getElementById('t06num01').value)"><br />
<div id="06">Vieta rezultatui</div>
</div>
<div id="s07">
<h2> 7: sugeneruoti atsitiktinį 5 raidžių derinį </h2>
<script src="js/task07.js"></script>
<form>
    Simbolių paletė: 0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz<br />
    <input type="text" id="t07num01" value="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz" size="64" autocomplete="off" ><br />
    Atsitiktinių simbolių eilutės ilgis:<br />
    <input type="text" id="t07num02" value="5" autocomplete="off"><br />
    <input type="button" value="Sugeneruoti atsitiktinę eilutę" onclick="randomString(document.getElementById('t07num01').value, getElementById('t07num02').value);">
</form>
<div id="07">Vieta rezultatui</div>
</div>
<div id="s08" >
<h2>Užduotis 8: iš pateiktų duomenų: web adreso ir teksto sugeneruoti url </h2>
<script src="js/task08.js"></script>
<form>
    Įvesti adresą:<br />
    <input type="text" id="t08address" value="" autocomplete="off" placeholder="URL" onkeyup="makeAnchor(document.getElementById('t08address').value, document.getElementById('t08link').value)"><br />
    Įvesti tekstą atvaizdavimui:<br />
    <input type="text" id="t08link" value="" autocomplete="off" placeholder="Nuorodos atvaizdavimas" onkeyup="makeAnchor(document.getElementById('t08address').value, document.getElementById('t08link').value)">
</form>
<div id="08rez">Vieta rezultatui</div>
<div id="08pav">Vieta nuorodai</div>
</div>
<div id="s09" >
<h2>Užduotis 9: pagal pateiktas stačiakampio viršūnių koordinates apskaičiuoti jo perimetrą, plotą ir patikrinti ar jis kvadratas </h2>
<script src="js/task09.js"></script>
<canvas id="drobe" width="300" height="200" style="border:1px solid #d3d3d3;">
Your browser does not support the HTML5 canvas tag.</canvas>
<br />

<script>
drawRectangle(100, 50, 100, 150, 200, 150, 200, 50);
var test = document.getElementById("drobe").width;
document.write('Drobės matmenys '+ test +' x ');
var test = document.getElementById("drobe").height;
document.write(test);
</script> 
</div>
<div id="s10" >
<h2>Užduotis 10: apskaičiuoti minučių skirtumą tarp duotų laiko reikšmių </h2>
<script src="js/task10.js"></script>
<form>
    <input type="text" id="t10hhStart" value="" autocomplete="off" placeholder="Pradžios valanda">
    <input type="text" id="t10mmStart" value="" autocomplete="off" placeholder="Pradžios minutė">
    <input type="text" id="t10hhEnd" value="" autocomplete="off" placeholder="Pabaigos valanda">
    <input type="text" id="t10mmEnd" value="" autocomplete="off" placeholder="Pabaigos minutė">
    <input type="button" value="Skaičiuoti minučių skirtumą" onclick="minutesInterval(document.getElementById('t10hhStart').value, document.getElementById('t10mmStart').value, document.getElementById('t10hhEnd').value, document.getElementById('t10mmEnd').value)">
</form>
<div id="10">Vieta rezultatui</div>
</div>