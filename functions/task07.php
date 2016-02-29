<?php 
// $symbolsList = '0123456789AĄBCČDEĘĖFGHIĮYJKLMNOPRSŠTUŲŪVZŽaąbcčdeęėfghiįyjklmnoprsštuųūvzž';
$symbolsList = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefjhijklmnopqrstuvwxyz';
?>

<form action="tasks.php" method="POST">
    <textarea rows="4" cols="48" name="07list" ><?php echo (isset($_POST['07list']) ? ($_POST['07list']): $symbolsList) ?></textarea><br />
    <input type="text" autocomplete="off" size=4 name="07length"
    value="<?php echo (isset($_POST['07length']) ? ($_POST['07length']): 5) ?>">
    <input type="submit"  name="forSubmit07">
</form>
<?php 
if((!isset($_POST['07list'])) || (!isset($_POST['07length']))){
    echo 'Rezultato vieta';
}else{
    // get characters list from form
    $list = ($_POST['07list']);
    // convert to array of characters
    $symbolsArr = str_split($list);
    // get length for new random string from form
    $length = ($_POST['07length']);
    
    echo getRandString($symbolsArr, $length);
}

function getRandString($list, $length){
    // length of array
    $listLength = count($list);
    $randString = '';
    for ($i = 0; $i < $length; $i++){
        $randString .= $list[rand(0, ($listLength - 1))];
    }
    return $randString;
}
?>
