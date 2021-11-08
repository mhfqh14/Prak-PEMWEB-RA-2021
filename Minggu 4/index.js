loadData();
            
$(document).on("click",".editData",function(){
    var id = $(this).attr("id");
    
    $.ajax({
        type : "POST",
        data : "id="+id,
        url : "getDataMhs.php",
        success : function(result){
            var resultObj = JSON.parse(result);
            
            $("[name='id']").val(resultObj.id);
            $("[name='nim']").val(resultObj.nim);
            $("[name='nama']").val(resultObj.nama);
            $("[name='prodi']").val(resultObj.prodi);
            $("[name='angkatan']").val(resultObj.angkatan);
        }
    });
});

function deleteData(){
    var id = $("[name='id']").val();
    $.ajax({
        type : "POST",
        data : "id="+id,
        url : "delete.php",
        success : function(result){
            loadData();
            reset();
        }
    });
}

function editData(){
    var id = $("[name='id']").val();
    var nim = $("[name='nim']").val();
    var nama = $("[name='nama']").val();
    var prodi = $("[name='prodi']").val();
    var angkatan = $("[name='angkatan']").val();

    $.ajax({
        type : "POST",
        data : "id="+id+"&nim="+nim+"&nama="+nama+"&prodi="+prodi+"&angkatan="+angkatan,
        url : "edit.php",
        success : function(result){
            var resultObj = JSON.parse(result);
            $("#errorMessage").html(resultObj.message);
            loadData();
            reset();
        }
    });

}

function insertData(){
    var nim = $("[name='nim']").val();
    var nama = $("[name='nama']").val();
    var prodi = $("[name='prodi']").val();
    var angkatan = $("[name='angkatan']").val();

    $.ajax({
        type : "POST",
        data : "nim="+nim+"&nama="+nama+"&prodi="+prodi+"&angkatan="+angkatan,
        url : "insert.php",
        success : function(result){
            var resultObj = JSON.parse(result);
            $("#errorMessage").html(resultObj.message);
            
            loadData();
            reset();
        }
    })
}
function loadData(){
    var dataHandler=$("#tabel");
    dataHandler.html("");
    $.ajax({
        type : "GET",
        data : "",
        url : "getData.php",
        success : function(result){
            var resultObj=JSON.parse(result);
            var nomor = 1;
            $.each(resultObj,function(key,val){
                var newRow=$("<tr>");
                newRow.html("<td>"+nomor+"</td><td>"+val.nim+"</td><td>"+val.nama+"</td><td>"+val.prodi+"</td><td>"+val.angkatan+"</td><td><button class='editData' id='"+val.id+"'>Edit</button></td>")
                dataHandler.append(newRow);
                nomor++;
            });
        }
    });
}
function reset(){
    var id = $("[name='id']").val("");
    var nim = $("[name='nim']").val("");
    var nama = $("[name='nama']").val("");
    var prodi = $("[name='prodi']").val("IF");
    var angkatan = $("[name='angkatan']").val("2016"); 
}