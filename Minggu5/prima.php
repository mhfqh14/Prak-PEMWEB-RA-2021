<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Minggu 5 Bilangan Prima</title>
    </head>
</html>
<?php
    function prima(){
        for($i = 2; $i <=50; $i++){
            for($j = 2; $j<$i ;$j++){
                if($i % $j == 0){
                    break;
    
                }
                else if ($i-1 == $j){
                    echo "$i ";
                    break;
                }
            }
        }
    }
    echo "<h2>Bilangan Prima</h2>";
    echo "Bilangan Prima 1-50:<br><br>";
    prima();
    echo "<br><br>Muhammad Faqih<br>119140012";
?>