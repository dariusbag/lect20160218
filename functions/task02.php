<form action="tasks.php" method="POST">
    <input type="text" name="02num01" autocomplete="off" size=4 value="<?php echo (isset($_POST['02num01']) ? $_POST['02num01'] : ''); ?>">
    <input type="text" name="02num02" autocomplete="off" size=4 value="<?php echo (isset($_POST['02num02']) ? $_POST['02num02'] : ''); ?>">
    <input type="text" name="02num03" autocomplete="off" size=4 value="<?php echo (isset($_POST['02num03']) ? $_POST['02num03'] : ''); ?>">
    <input type="submit" name="formSubmit02">
</form>
<?php

if((!isset($_POST['formSubmit02'])) || ($_POST['02num01'] == null) || ($_POST['02num02'] == null) || ($_POST['02num03'] == null)){
    echo 'Įvesti 3 skirtingus skaičius<br />';
    }else{
    $num1 = $_POST['02num01'];
    $num2 = $_POST['02num02'];
    $num3 = $_POST['02num03'];
    echo findMiddle($num1, $num2, $num3) .'<br />';
}

function findMiddle($a, $b, $c){
    $minimum = min($a, $b, $c);
    $maximum = max($a, $b, $c);
    if($a == $b || $a == $c || $b == $c){
        return 'Skaičiai turi būti skirtingi';
    }else{
        if(($a > $minimum) && ($a < $maximum)){
            return $a;
        }elseif(($minimum > $a) && ($b < $maximum)){
            return $b;
        }else{
            return $c;
        }
    }
}
?>