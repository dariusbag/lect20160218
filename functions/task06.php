<form action="tasks.php" method="POST">
    <input type="text" name="06toCheck" autocomplete="off" value="<?php echo (isset($_POST['06toCheck']) ? $_POST['06toCheck'] : ''); ?>">
    <input type="submit" name="formSubmit06" >
</form>
<?php
function isRev($n){
    return (($n == strrev($n)) ? true : false);
}

if(!isset($_POST['formSubmit06'])){
    echo 'Rezultato vieta';
}else{
    $numb06 = $_POST['06toCheck'];
    if(isRev($numb06)){
        echo 'Veidrodinis';
    }else{
        echo 'Neveidrodinis';
    }
}
?>