$(document).ready(function() {  
    $.getJSON('assets/js/bantuanRB.json', function(data,status) {  
        //Riwayat berobat variabel
        $('#detail').text(data.riwayat_Berobat.detail);
        $('#diagnosa').text(data.riwayat_Berobat.diagnosa);
        $('#solusi').text(data.riwayat_Berobat.solusi);
    });  
});  
