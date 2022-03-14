$(document).ready(function() {  
	$.getJSON('assets/js/bantuanRP.json', function(data,status) {  
		//Riwayat pemeriksaan variabel
		$('#jPemeriksaan').text(data.pemeriksaan_Darah.jenis_pemeriksaan);
        $('#hPemeriksaan').text(data.pemeriksaan_Darah.hasil_pemeriksaan);
        $('#normal').text(data.pemeriksaan_Darah.normal);
    });  
}); 
