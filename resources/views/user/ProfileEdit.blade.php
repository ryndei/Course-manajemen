<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

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
                                    <h3 class="box-title font-bold py-3 mr-2">Daftar Kelas </h3>
                                </div>
                                <div>
                                    <form method="POST" action="{{ route('user.daftar') }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <!-- Elemen input untuk data siswa -->
                                        <div class="form-group">
                                            <label for="nama" class="font-weight-bold">Nama</label>
                                            <input id="nama" name="nama" type="text" autocomplete="off"
                                                class="form-control" placeholder="Nama" value="{{ Auth::user()->name }}"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="alamat" class="font-weight-bold">Alamat</label>
                                            <input id="alamat" name="alamat" type="text" autocomplete="off"
                                                class="form-control" placeholder="Alamat" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jenkel" class="font-weight-bold">Jenis Kelamin</label>
                                            <input id="jenkel" name="jenkel" type="text" autocomplete="off"
                                                class="form-control" placeholder="Jenis Kelamin" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="font-weight-bold">Email</label>
                                            <input id="email" name="email" type="text" autocomplete="off"
                                                class="form-control" placeholder="Email"
                                                value="{{ Auth::user()->email }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="no_telepon" class="font-weight-bold">No Telepon</label>
                                            <input id="no_telepon" name="no_telepon" type="text" autocomplete="off"
                                                class="form-control" placeholder="No Telepon" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="bukti_pembayaran" class="font-weight-bold">Bukti
                                                Pembayaran</label>
                                            <input id="bukti_pembayaran" name="bukti_pembayaran" type="file"
                                                class="form-control" required>
                                        </div>

                                        <!-- Pilihan kursus -->
                                        <div class="form-group">
                                            <label for="kelas" class="font-weight-bold">Pilih Kursus</label>
                                            <select id="kelas" name="kelas" class="form-control" required>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->nama_kelas }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- Tombol Submit -->
                                        <div class="card-footer bg-white">
                                            <a href="{{ url('user.course') }}" type="button"
                                                class="btn btn-danger">Batal</a>
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
