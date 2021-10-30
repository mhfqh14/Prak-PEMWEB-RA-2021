function ubah(){
    var pilihan = document.getElementById("tema");
    if(pilihan.value == "lightmode"){
        document.body.style.backgroundColor = "white";
        document.getElementById("body").style.color = "black";
    }else if(pilihan.value == "darkmode"){
        document.body.style.backgroundColor = "black";
        document.getElementById("body").style.color = "white";
    }
}
function keluar(){
    let keluaran = document.getElementById("keluaran");
    var pilihanKata = document.getElementById("kata");
    if(pilihanKata.value == "2soon"){
        keluaran.innerHTML = "Drank too much, got the sickness,Pray to God and his son for forgiveness";
    }else if(pilihanKata.value == "more"){
        keluaran.innerHTML = "Said she want more, I'm not enough,Getting low and I think I'm giving up,Baby, come home,I want us, I want us, said, I want us";
    }else if(pilihanKata.value == "besideyou"){
        keluaran.innerHTML = "Don't lie, baby, don't lie,His love never felt right,Switch sides and I'm beside you";
    }
}
function faktorial(){
    var masukan = document.getElementById("angka");
    var hasil = document.getElementById("hasil");
    var angka = masukan.value;
    var faktor = 1;
    for(var i = angka;i > 0; i --){
       faktor *= i; 
    }
    hasil.innerHTML = `The factorial of ${angka} is ${faktor}`
}