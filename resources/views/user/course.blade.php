<!DOCTYPE html>
<html lang="en">
@include('layouts.head')


<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <!-- Sidebar -->
    @include('layouts.sideuser')
    <!-- /.sidebar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container-">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div id="tabel-kelas">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title font-bold py-3 mr-2">Daftar Kelas</h3>
                                </div>
                            </div>
                            {{-- end Modal --}}
                            <div class="box-body">
                                <table class="table table-bordered bg-white table-striped table-hover">
                                    <thead>
                                        <tr class="py-2 px-4 border-b">
                                            <th>No</th>
                                            <th>ID Kelas</th>
                                            <th>Nama Kelas</th>
                                            <th>Pengajar</th>
                                            <th>Tempat</th>
                                            <th>Hari</th>
                                            <th>Jam</th>
                                            <th>Harga</th>
                                            <th>Jumlah Pertemuan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $index => $course)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $course->id }}</td>
                                                <td>{{ $course->nama_kelas }}</td>
                                                <td>{{ $course->pengajar }}</td>
                                                <td>{{ $course->ruang }}</td>
                                                <td>{{ $course->hari }}</td>
                                                <td>{{ $course->jam }}</td>
                                                <td>{{ $course->harga }}</td>
                                                <td>{{ $course->jumlah_pertemuan }}</td>
                                                <td>
                                                    <div class="flex mx-1">
                                                        <div class="item">

                                                            <a href="/user/{{ $course->id }}/detail"
                                                                class="show-modal-btn text-blue-500 underline">Lihat
                                                                Detail</a>
                                                            <a href="user/{{ $course->id }}/daftar"
                                                                class="btn btn-primary mx-1">Daftar</a>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $courses->links() }}
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>

        <!-- /.content -->

    </div>

    </div>
    <!-- /.content-wrapper -->
    @include('layouts.modal')
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @include('layouts.script')

</body>


</html>
