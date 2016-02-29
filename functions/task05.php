<form action="tasks.php" method="POST">
    <input type="text" name="05toReverse" autocomplete="off" value="<?php echo (isset($_POST['05toReverse']) ? $_POST['05toReverse'] : ''); ?>">
    <input type="submit" name="formSubmit05">
</form>
<?php
function numRev($n){
    return strrev($n);
}

if(isset($_POST['formSubmit05'])){
    $numb = $_POST['05toReverse'];
    echo 'Atvirkštinis skaičius yra: '. numRev($numb);
}else{
    echo 'Rezultato vieta';
}
?>