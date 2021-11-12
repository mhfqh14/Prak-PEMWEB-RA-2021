<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Minggu 5 Urutan</title>
    </head>
</html>
<?php
    function urut($dataArray){
        sort($dataArray);
        return $dataArray;
    }
        $array = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "yar", "ghil", "joy");
        echo "<h2>Urutan Data</h2>";
        echo "Sebelum:<br>";
        foreach($array as $urut){
            echo "$urut<br>";
        }
        urut($array);
        echo "<br>Sesudah:<br>";
        foreach($array as $urutBaru){
            echo "$urutBaru<br>";
        }

    echo "<br>Muhammad Faqih<br>119140012";
?>