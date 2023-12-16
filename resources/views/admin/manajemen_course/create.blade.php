<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- /.sidebar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper ">
        <!-- Main content -->
        <section class="content">
            <div class="container h-200 w-200 bg-white">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div id="tabel-user">
                            <div class="box">
                                <div class="box-header with-border">
                                    <form method="post" action="/admin/manajemen_course.index" novalidate>
                                        @csrf
                                        <div class="form-group">
                                            <label for="id" class="font-weight-bold">ID Kelas</label>
                                            <input id="id" name="id" type="text" autocomplete="off"
                                                class="form-control" placeholder="ID Kelas" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="nama_kelas" class="font-weight-bold">Nama
                                                Kelas</label>
                                            <input id="nama_kelas" name="nama_kelas" type="text" autocomplete="off"
                                                class="form-control" placeholder="Nama Kelas" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="pengajar" class="font-weight-bold">Pengajar</label>
                                            <input id="pengajar" name="pengajar" type="text" autocomplete="off"
                                                class="form-control" placeholder="Pengajar" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="ruang" class="font-weight-bold">Ruang</label>
                                            <input id="ruang" name="ruang" type="text" autocomplete="off"
                                                class="form-control" placeholder="Ruang" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="hari" class="font-weight-bold">Hari</label>
                                            <input id="hari" name="hari" type="text" autocomplete="off"
                                                class="form-control" placeholder="Hari" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="jam" class="font-weight-bold">Jam</label>
                                            <input id="jam" name="jam" type="time" autocomplete="off"
                                                class="form-control" placeholder="Jam" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="harga" class="font-weight-bold">Harga</label>
                                            <input id="harga" name="harga" type="text" autocomplete="off"
                                                class="form-control" placeholder="Harga" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="jumlah_pertemuan" class="font-weight-bold">Jumlah
                                                Pertemuan</label>
                                            <input id="jumlah_pertemuan" name="jumlah_pertemuan" type="text"
                                                autocomplete="off" class="form-control" placeholder="Jumlah Pertemuan"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi" class="font-weight-bold">Deskripsi</label>
                                            <textarea id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" rows="5"
                                                style="resize: vertical; font-size: 16px;" required></textarea>
                                        </div>
                                        <div class="card-footer bg-white">
                                            <a type="button" class="btn btn-danger"
                                                href="{{ url('admin/manajemen_course.index') }}">Batal</a>
                                            <input type="submit" class="btn btn-primary" value="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> @include('layouts.footer')
    </section>
</body>
@include('layouts.script')

</html>
