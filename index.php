
<!DOCTYPE html>
<html><center>
<body>

<h2>the calculator</h2>

<form action="index.php" method='POST'>
  <label for="fname"><?php  echo 'enter number 1 :'; ?></label><br>
  <input type="number"  name="num1" value=""><br>
  <label for="lname"><?php echo 'enter number 2 :'?> </label><br>
  <input type="number"  name="num2" value=""><br><br>
  <label for="lname"><?php echo 'enter operation type :'?> </label><br>

  <input type="submit" id="lname" name="opr" value="+"><br><br>
  
  <input type="submit" id="lname" name="opr" value="-"><br><br>

  <input type="submit" id="lname" name="opr" value="*"><br><br>

  <input type="submit" id="lname" name="opr" value="/"><br><br>

  
</form> 



</body>
</html>
<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$opr = $_POST['opr'];
global $res ;

if($opr=='+'){
    $res=$num1+$num2;
   
}else if($opr=='-'){
    $res= $num1 - $num2 ;
}else if($opr == '*'){
    $res= $num1 * $num2 ;
}elseif($opr == '/'){
    $res= $num1 / $num2 ;

}

?>
<br>Result: <input type='number' value="<?php echo $res; ?>"><br>
</form> 



</body></center>
</html>