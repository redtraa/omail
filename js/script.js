$(function() {
	$('.tombolTambahData').on('click', function(){
		$('#judulModalLabel').html('Tambah data siswa');
		$('.modal-footer button[type=submit]').html('Tambah data');
	});
	
	$('.tampilModalUbah').on('click', function(){
		$('#judulModalLabel').html('Ubah data siswa');
		$('.modal-footer button[type=submit]').html('Ubah data');
		$('.modal-content form').attr('action', 'http://localhost/website/omail/siswa/ubah');
		
		const id = $(this).data('id');
		
		$.ajax({
			url: 'http://localhost/website/omail/siswa/getubah',
			data: {id: id},
			method: 'post',
			dataType: 'json',
			success: function (data){
				$('#nama').val(data.nama);
				$('#nisn').val(data.nisn);
				$('#email').val(data.email);
				$('#jurusan').val(data.jurusan);
				$('#id').val(data.id);
			}
		});
	});
});