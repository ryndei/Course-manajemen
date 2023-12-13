import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
require('./bootstrap');
function tambahKursus() {
    // Ambil data formulir
    var namaKursus = document.getElementById('nama').value;
    var deskripsiKursus = document.getElementById('deskripsi').value;

    // Kirim permintaan AJAX ke rute Laravel yang ditentukan
    axios.post('/courses/store', {
        nama: namaKursus,
        deskripsi: deskripsiKursus,
        // Kirim data lainnya sesuai kebutuhan
    })
    .then(function (response) {
        // Handle sukses
        console.log(response.data);

        // Tutup modal
        $('#tambahKursusModal').modal('hide');

        // Tambahkan logika lainnya seperti memperbarui tampilan atau pesan sukses
    })
    .catch(function (error) {
        // Handle error
        console.error(error);
    });
}