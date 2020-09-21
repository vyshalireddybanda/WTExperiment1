<br><br><br>
<form align="center">
ENTER NUMBER : <input type= "number" name = "num"><br><br>
<input type = "submit"><br>
</form>
<p align="center">
<?php
if(isset($_GET['num'])){
      $num1 = $_GET['num'];
 }else{
      $num1 = "Name not set in GET Method";
 }

for($num=1;$num<=$num1;$num++){
   $count=0;
   for ( $i=2; $i<=$num/2; $i++){
       if (($num%$i)==0){
            $count++;
             break;
        }
    }
    if ($count == 0 && $num != 1){
        echo $num." , ";
    }
}
?>
</p>
