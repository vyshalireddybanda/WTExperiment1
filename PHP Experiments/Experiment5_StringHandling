<br/><br/><br/>
<form align="center">
ENTER THE STRING : <input type= "text" name = "string"><br><br>
ENTER THE WORD TO BE FOUND: <input type= "text" name = "word"><br><br>

<input type = "submit"><br>
</form><p align="center"><?php

if(isset($_GET["string"])){
        $str1 = $_GET["string"];
        $word1 = $_GET["word"];
        echo "The string is: ";
        echo $str1;
        echo "<br/>";
        echo"length of the string is: ";
        echo strlen($str1);
        echo "<br>";
        echo "No of words in the string are: ";
        echo str_word_count($str1);
        echo "<br>";
        echo "Reverse of the string is: ";
        echo strrev($str1);
        echo "<br>";
        if(strpos($str1, $word1) !== false){
                echo "The given word ";
                echo $word1;
                echo " is found in the given string!";
        } else{
             echo "The given word is not found in the given string!";
        }
}
echo "<br>";

?>
</p>
