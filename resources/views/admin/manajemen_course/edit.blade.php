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
            <div class="container h-200 w-200">
                <div class="row h-200 justify-content-start align-items-start">
                    <div class="col-20 col-md-4 col-lg-6">
                        <div class="card ">
                            <div class="card-body">
                                <div class="form-body">
                                    <form method="post" action="/admin/manajemen_course/{{ $course->id }}"
                                        novalidate>
                                        @method('put')
                                        @csrf
                                        <div class="form-group">
                                            <label for="id" class="font-weight-bold">ID Kelas</label>
                                            <input id="id" name="id" type="text" autocomplete="off"
                                                class="form-control" placeholder="ID Kelas" value="{{ $course->id }}"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="nama_kelas" class="font-weight-bold">Nama
                                                Kelas</label>
                                            <input id="nama_kelas" name="nama_kelas" type="text" autocomplete="off"
                                                class="form-control" placeholder="Nama Kelas"
                                                value="{{ $course->nama_kelas }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="pengajar" class="font-weight-bold">Pengajar</label>
                                            <input id="pengajar" name="pengajar" type="text" autocomplete="off"
                                                class="form-control" placeholder="Pengajar"
                                                value="{{ $course->pengajar }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="ruang" class="font-weight-bold">Ruang</label>
                                            <input id="ruang" name="ruang" type="text" autocomplete="off"
                                                class="form-control" placeholder="Ruang" value="{{ $course->ruang }}"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="hari" class="font-weight-bold">Hari</label>
                                            <input id="hari" name="hari" type="text" autocomplete="off"
                                                class="form-control" placeholder="Hari" value="{{ $course->hari }}"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="jam" class="font-weight-bold">Jam</label>
                                            <input id="jam" name="jam" type="time" autocomplete="off"
                                                class="form-control" placeholder="Jam" value="{{ $course->jam }}"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="harga" class="font-weight-bold">Harga</label>
                                            <input id="harga" name="harga" type="text" autocomplete="off"
                                                class="form-control" placeholder="Harga" value="{{ $course->harga }}"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="jumlah_pertemuan" class="font-weight-bold">Jumlah
                                                Pertemuan</label>
                                            <input id="jumlah_pertemuan" name="jumlah_pertemuan" type="text"
                                                autocomplete="off" class="form-control" placeholder="Jumlah Pertemuan"
                                                value="{{ $course->jumlah_pertemuan }}" required>
                                        </div>
                                </div>
                                <div class="card-footer bg-white">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                    <input type="submit" class="btn btn-primary" value="Submit">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div> @include('layouts.footer')
    </section>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->

</body>
@include('layouts.script')

</html>
