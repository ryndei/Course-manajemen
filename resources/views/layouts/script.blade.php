<script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
<!--Replace with your tailwind.css once created-->
<link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" />
<!--Tailwind Custom Forms - use to standardise form fields - https://github.com/tailwindcss/custom-forms-->
<script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->

<Script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault();
        var id = document.querySelector('input[name="id"]').value.trim();
        var nama_kelas = document.querySelector('input[name="nama_kelas"]').value.trim();
        var pengajar = document.querySelector('input[name="pengajar"]').value.trim();
        var ruang = document.querySelector('input[name="ruang"]').value.trim();
        var hari = document.querySelector('input[name="hari"]').value.trim();
        var jam = document.querySelector('input[name="jam"]').value.trim();
        var harga = document.querySelector('input[name="harga"]').value.trim();
        var jumlah_pertemuan = document.querySelector('input[name="jumlah_pertemuan"]').value.trim();
        var deskripsi = document.querySelector('input[name="deskripsi"]').value.trim();

        if (id === '' || nama_kelas === '' || pengajar === '' || ruang === '' || hari === '' || jam ===
            '' || harga ===
            '' || jumlah_pertemuan ===
            '' || des ===
            '') {

            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Harap isi semua bidang!'
            });
        } else {

            this.submit();
        }
    }); <
    />
</Script>
<script>
    function batalClicked() {
        // Redirect to manajemen_user page
        window.location.href = '/admin/manajemen_user';
    }

    function submitForm() {
        var emailInput = document.getElementById('email');
        var emailError = document.getElementById('emailError');
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (emailPattern.test(emailInput.value)) {
            // Valid email format
            emailError.textContent = '';
            // Add logic to submit the form or perform other actions
            // document.forms['yourFormName'].submit();
        } else {
            // Invalid email format
            emailError.textContent = 'Format email tidak valid. Silakan cek kembali.';
        }

        function openModal(itemId) {
            var modal = document.getElementById('myModal');
            var modalContent = document.getElementById('modalContent');

            // Menggunakan Axios untuk melakukan request ke endpoint backend (disesuaikan dengan kebutuhan proyek Anda)
            axios.get(`/items/${itemId}/details`)
                .then(response => {
                    modalContent.innerHTML = response.data;
                    modal.style.display = 'flex';
                })
                .catch(error => {
                    console.error(error);
                });
        }

        // Fungsi untuk menutup modal
        function closeModal() {
            var modal = document.getElementById('myModal');
            modal.style.display = 'none';
        }
</script>
