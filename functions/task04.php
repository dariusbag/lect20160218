<form action="tasks.php" method="POST">
    <select name="04month">
        <option value="">Pasirinkti mėnesį</option>
        <option value="1">Sausis</option>
        <option value="2">Vasaris</option>
        <option value="3">Kovas</option>
        <option value="4">Balandis</option>
        <option value="5">Gegužė</option>
        <option value="6">Birželis</option>
        <option value="7">Liepa</option>
        <option value="8">Rugpjūtis</option>
        <option value="9">Rugsėjis</option>
        <option value="10">Spalis</option>
        <option value="11">Lapkritis</option>
        <option value="12">Gruodis</option>
    </select>
    <input type="text" name="04day" autocomplete="off" placeholder="Įvesti dieną" size=8 value="<?php echo (isset($_POST['04day']) ? $_POST['04day'] : '') ?>" >
    <input type="submit" name="formSubmit04" value="Gauti zodiako ženklą">
</form>
<?php 
function getZodiac($month, $day){
    $zodiacSign = '';
    switch($month){
        case 1:
            ($day < 20) ? $zodiacSign = 'Ožiaragis' : $zodiacSign = 'Vandenis';            
            break;
        case 2:
            ($day < 19) ? $zodiacSign = 'Vandenis' : $zodiacSign = 'Žuvys';            
            break;
        case 3:
            ($day < 20) ? $zodiacSign = 'Žuvys' : $zodiacSign = 'Avinas';            
            break;
        case 4:
            ($day < 20) ? $zodiacSign = 'Avinas' : $zodiacSign = 'Jautis';            
            break;
        case 5:
            ($day < 21) ? $zodiacSign = 'Jautis' : $zodiacSign = 'Dvyniai';            
            break;
        case 6:
            ($day < 21) ? $zodiacSign = 'Dvyniai' : $zodiacSign = 'Vėžys';            
            break;
        case 7:
            ($day < 22) ? $zodiacSign = 'Vėžys' : $zodiacSign = 'Liūtas';            
            break;
        case 8:
            ($day < 23) ? $zodiacSign = 'Liūtas' : $zodiacSign = 'Mergelė';            
            break;
        case 9:
            ($day < 23) ? $zodiacSign = 'Mergelė' : $zodiacSign = 'Svarstyklės';            
            break;
        case 10:
            ($day < 23) ? $zodiacSign = 'Svarstyklės' : $zodiacSign = 'Skorpionas';            
            break;
        case 11:
            ($day < 22) ? $zodiacSign = 'Skorpionas' : $zodiacSign = 'Šaulys';            
            break;
        case 12:
            ($day < 22) ? $zodiacSign = 'Šaulys' : $zodiacSign = 'Ožiaragis';            
            break;
    }
    return $zodiacSign;
}
if(!isset($_POST['formSubmit04'])){
    echo 'Rezultato vieta';
    }else{
        $month04 = $_POST['04month'];
        $day04 = $_POST['04day'];
        echo 'Pasirinktas mėnuo: '. $month04;
        echo ', pasirinkta diena: '. $day04;
        echo ' zodiako ženklas: '. getZodiac($month04, $day04);
    }
?>