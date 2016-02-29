<?php 
echo '<form action="tasks.php" method="POST">
    <input type="submit" name="submit01">
</form>';
if(!isset($_POST['submit01'])){
    echo 'Vieta rezultatui';
}else{
    echo rand();
}
?>