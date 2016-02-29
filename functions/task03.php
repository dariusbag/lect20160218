<form action="tasks.php" method="POST">
    <input type="text" name="03lower" autocomplete="off" size=4 value="<?php echo (isset($_POST['03lower']) ? $_POST['03lower'] : 1000); ?>">
    <input type="text" name="03upper" autocomplete="off" size=4 value="<?php echo (isset($_POST['03upper']) ? $_POST['03upper'] : 2000); ?>">
    <input type="submit" name="formSubmit03">
</form>
<?php


if(isset($_POST['formSubmit03'])){
    $lower = $_POST['03lower'];
    $upper = $_POST['03upper'];
    echo 'Atsitiktinis skaičius tarp '. $lower .' ir '. $upper .' yra: '. rand($lower, $upper) .'<br />';
    }else{
    echo 'Atsitiktinio skaičiaus vieta';
}
?>