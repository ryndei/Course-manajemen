<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <!-- Sidebar -->
    @include('layouts.sidebar')
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
                                    <h3 class="box-title font-bold py-3 mr-2">Manajemen Kelas</h3>
                                </div>
                                <div class="box-body">
                                    <div class="box-body">
                                        <button data-toggle="modal" data-target="#myModal"
                                            class="btn btn-info mb-2"><span
                                                class="glyphicon glyphicon-plus"></span>Tambah
                                            kelas</button>
                                        @include('layouts.modal')
                                    </div>
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
                                                        <a href="/admin/manajemen_course/{{ $course->id }}/edit"
                                                            class="btn btn-primary mx-1">Edit</a>
                                                        <form action="/admin/manajemen_course/{{ $course->id }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="submit" value="Delete" class="btn btn-danger"
                                                                class="mt-2">
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
    <!-- /.content-wrapper -->

    @include('layouts.footer')

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
