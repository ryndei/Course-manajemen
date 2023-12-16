{{-- modal tambah data --}}
{{-- modal --}}
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kelas</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="myForm" action="/simpan-data" novalidate>
                    @csrf

                    <div class="form-group">
                        <label style="font-size: 18px; color: #000000; font-weight: bold;">ID
                            Kelas</label>
                        <input name="id" type="text" autocomplete="off" class="form-control"
                            placeholder="ID Kelas" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px; color: #000000; font-weight: bold;">Nama
                            kelas</label>
                        <input name="nama_kelas" type="text" autocomplete="off" class="form-control"
                            placeholder="Nama Kelas" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px; color: #000000; font-weight: bold;">Pengajar</label>
                        <input name="pengajar" type="text" autocomplete="off" class="form-control"
                            placeholder="Pengajar" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px; color: #000000; font-weight: bold;">Ruang</label>
                        <input name="ruang" type="text" autocomplete="off" class="form-control" placeholder="Ruang"
                            required>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px; color: #000000; font-weight: bold;">Hari</label>
                        <input name="hari" type="text" autocomplete="off" class="form-control" placeholder="Hari"
                            required>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px; color: #000000; font-weight: bold;">jam</label>
                        <input name="jam" type="time" autocomplete="off" class="form-control" placeholder="Jam"
                            required>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px; color: #000000; font-weight: bold;">harga</label>
                        <input name="harga" type="text" autocomplete="off" class="form-control" placeholder="harga"
                            required>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px; color: #000000; font-weight: bold;">Jumlah
                            Pertemuan</label>
                        <input name="jumlah_pertemuan" type="text" autocomplete="off" class="form-control"
                            placeholder="Jumlah pertemuan" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size: 18px; color: #000000; font-weight: bold;">Deskripsi</label>
                        <input name="deskripsi" type="longtext" autocomplete="off" class="form-control"
                            placeholder="Deskripsi" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" value="Tambah Kelas">
            </div>
            </form>
            {{-- end modal tambah data --}}
