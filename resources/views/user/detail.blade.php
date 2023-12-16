<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<style>
    .description-column {
        font-size: 16px;
        /* Atur ukuran font sesuai kebutuhan Anda */
        height: 300px;
        /* Atur tinggi sesuai kebutuhan Anda */
        white-space: pre-wrap;
        /* Biarkan teks berjalan dan mempertahankan pemformatan seperti baris baru */
        overflow: auto;
        /* Tambahkan scrollbar jika kontennya lebih panjang dari tinggi */
    }
</style>

<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <!-- Sidebar -->
    @include('layouts.sideuser')

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
                                    <form method="" action="/user/course/{{ $course->id }}" novalidate>
                                        <div class="form-group">
                                            <label for="id" class="font-weight-bold">ID kelas</label>
                                            <input id="id" name="id" type="text" autocomplete="off"
                                                class="form-control" placeholder="ID Kelas" value="{{ $course->id }}"
                                                readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="font-weight-bold">Nama Kelas</label>
                                            <input id="name" name="name" type="text" autocomplete="off"
                                                class="form-control" placeholder="Nama Kelas"
                                                value="{{ $course->nama_kelas }}" readonly>
                                        </div>

                                        <div class="form-group bg-white">
                                            <label for="email" class="font-weight-bold">Pengajar</label>
                                            <input id="email" name="email" type="text" autocomplete="off"
                                                class="form-control" placeholder="email" value="{{ $course->pengajar }}"
                                                readonly>
                                            <small id="emailError" class="text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="ruang" class="font-weight-bold">Ruang</label>
                                            <input id="ruang" name="ruang" type="text" autocomplete="off"
                                                class="form-control" placeholder="Ruang" value="{{ $course->ruang }}"
                                                readonly>
                                            <small id="emailError" class="text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="hari" class="font-weight-bold">Hari</label>
                                            <input id="hari" name="hari" type="text" autocomplete="off"
                                                class="form-control" placeholder="Hari" value="{{ $course->hari }}"
                                                readonly>
                                            <small id="emailError" class="text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="jam" class="font-weight-bold">Jam</label>
                                            <input id="jam" name="jam" type="text" autocomplete="off"
                                                class="form-control" placeholder="Jam" value="{{ $course->jam }}"
                                                readonly>
                                            <small id="emailError" class="text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga" class="font-weight-bold">Harga</label>
                                            <input id="harga" name="harga" type="text" autocomplete="off"
                                                class="form-control" placeholder="hHrga" value="{{ $course->harga }}"
                                                readonly>
                                            <small id="emailError" class="text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_pertemuan" class="font-weight-bold">Jumlah
                                                pertemuan</label>
                                            <input id="jumlah_pertemuan" name="jumlah_pertemuan" type="text"
                                                autocomplete="off" class="form-control" placeholder="jumlah_pertemuan"
                                                value="{{ $course->jumlah_pertemuan }}" readonly>
                                            <small id="emailError" class="text-danger"></small>
                                        </div>
                                        <div class="form-group">
                                            <pre id="deskripsi" name="deskripsi" class="form-control px-3 description-column" readonly>
                                                {{ $course->deskripsi }}
                                            </pre>
                                        </div>
                                        <div class="my-2 flex justify-end space-x-2">
                                            <a href="{{ '/user.course' }}" class="btn btn-primary">kembali</a>

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


</html>
