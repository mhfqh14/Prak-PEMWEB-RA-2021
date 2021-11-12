<!DOCTYPE html>
<?php
    if(isset($_POST['eksekusi'])){
        $a = $_POST['a'];
        $b = $_POST['b'];

        function tambah($a, $b){
            $hasil = $a + $b;
            return $hasil;
        }

        function kurang($a, $b){
            $hasil = $a - $b;
            return $hasil;
        }

        function kali($a, $b){
            $hasil = $a * $b;
            return $hasil;
        }

        function bagi($a, $b){
            $hasil = $a / $b;
            return $hasil;
        }

        function mod($a, $b){
            $hasil = $a % $b;
            return $hasil;
        }
        $tambah = tambah($a ,$b);
        $kurang = kurang($a ,$b);
        $kali = kali($a ,$b);
        $bagi = bagi($a ,$b);
        $mod = mod($a ,$b);
    }else{
        $a = "Belum Diisi";
        $b = "Belum Diisi";
        $tambah = "Belum Diisi";
        $kurang = "Belum Diisi";
        $kali = "Belum Diisi";;
        $bagi = "Belum Diisi";
        $mod = "Belum Diisi";
    }
?>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Minggu 5 Kalkulator</title>
    </head>
    <body>
        <h2>Kalkulator</h2>
        <form method = "POST">
            <td>    
                <div>
                    <input type = "number" name = "a" placeholder = "bilangan a">
                    <input type = "number" name = "b" placeholder = "bilangan b">
                </div>
                    <button name = "eksekusi">Hitung</button>
            </td> 
        </form>
        <h4>
            <?php
                echo "<h2>Hasil Perhitungan:</h2>";
                echo "Bilangan A : $a <br>";
                echo "Bilangan B : $b <br>";
                echo "<strong>Penjumlahan:</strong><br>";
                echo "Hasil :";
                echo "$tambah<br>";
                echo "<strong>Pengurangan:</strong><br>";
                echo "Hasil :";
                echo "$kurang<br>";
                echo "<strong>Perkalian:</strong><br>";
                echo "Hasil :";
                echo "$kali<br>";
                echo "<strong>Pembagian:</strong><br>";
                echo "Hasil :";
                echo "$bagi<br>";
                echo "<strong>Modulo:</strong><br>";
                echo "Hasil :";
                echo "$mod<br>";
            ?>
        </h4>
    </body>
    
    <footer>
        <br>Muhammad Faqih <br> 119140012
    </footer>
</html>