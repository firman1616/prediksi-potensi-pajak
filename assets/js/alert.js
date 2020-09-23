// jquery carikan saya elemen yang kelasnya namanya flash-data lalu ambil datanya yang namanya flashdata
const flashData = $('.flash-data').data('flashdata');
if (flashData) {
	Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Username dan Password yang anda masukan ' + flashData
		})
}


// tombol hapus
// jquery tolong carikan saya elemem yang kelasnya tombol-hapus, ketika di klik, jalankan fungsi berikut ini
// initial e (event)
// $('.tombol-hapus').on('click', function (e) {
// 	// hentikan aksi default
// 	e.preventDefault();
// 	// jqueri cariin tombol hapus yang lagi saya click, lalu ambil atributnya 
// 	const href = $(this).attr('href');

// 	Swal({
// 		 title: 'Apakah anda yakin?',
// 		  text: "Data Mahasiswa akan dihapus!",
// 		  type: 'warning',
// 		  showCancelButton: true,
// 		  confirmButtonColor: '#3085d6',
// 		  cancelButtonColor: '#d33',
// 		  confirmButtonText: 'Ya, Hapus Data!'
// 		  // Jika hasilya true (tombol di pencet) jalankan fungsi dibawah
// 		}).then((result) => {
// 		  if (result.value == true) {
// 		    document.location.href = href;
// 		  }
// 	})


// });
