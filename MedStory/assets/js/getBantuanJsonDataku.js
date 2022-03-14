$(document).ready(function() {  
    $.getJSON('assets/js/bantuanDataku.json', function(data,status) {  
        //Riwayat berobat variabel
        $('#alergi').text(data.dataKu.alergi);
        $('#penyakit').text(data.dataKu.penyakit);
        $('#vaksinasi').text(data.dataKu.vaksinasi);
    });  
});  
