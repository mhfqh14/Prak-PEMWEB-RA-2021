<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praktikum Minggu 6</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div>
        <h2>Form Belanja</h2>
        <h4>Muhammad Faqih <br> 119140012 </h4>
        <form action="keranjang.php" method="POST" id="keranjang" name="keranjang" enctype="multipart/form">
            <div>
                <label for="">Mangga Rp 15.000 </label>
                <input type="number" id="mangga" onchange="harga()" name="mangga"> <br>
            </div>  
            <div>    
                <label for="">Jambu Rp 13.000 </label>
                <input type="number" id="jambu" onchange="harga()" name="jambu"> <br>
            </div>
            <div>    
                <label for="">Salak Rp 10.000 </label>
                <input type="number" id="salak" onchange="harga()" name="salak"> <br>
            </div>
            <div>
                <label for="">Total Harga : </label>
                <input type="text" id="total" name="total" readonly> <br>
            </div>
            <button type="submit" name="">Submit</button>
        </form>
    </div>
</body>
<script>
    function harga(){
        var total = document.getElementById("total");
        var mangga = document.getElementById("mangga").value * 15000;
        var jambu = document.getElementById("jambu").value * 13000;
        var salak = document.getElementById("salak").value * 10000;
        var hasil = mangga + jambu + salak;
        total.value = hasil;
    }
    
</script>
</html>