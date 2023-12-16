<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <!-- Tambahkan pada bagian head -->
</head>

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
                        <div id="tabel-user">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title font-bold py-3 mr-2">Manajemen User</h3>
                                </div>
                                <div>

                                    <div class="box-body">
                                        <table
                                            class="table table-bordered bg-white table-striped table-hover table-responsive">
                                            <thead>
                                                <tr class="py-2 px-4 border-b">
                                                    <th>No</th>
                                                    <th>ID Siswa</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Alamat</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Nomor Telepon</th>
                                                    <th>Kelas</th>
                                                    <th>Bukti Pembayaran</th>
                                                    <th>Aksi</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($siswas as $index => $siswa)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $siswa->id }}</td>
                                                        <td>{{ $siswa->nama }}</td>
                                                        <td>{{ $siswa->alamat }}</td>
                                                        <td>{{ $siswa->jenkel }}</td>
                                                        <td>{{ $siswa->no_telepon }}</td>
                                                        <td>{{ $siswa->Kelas }}</td>
                                                        <!-- Tabel -->
                                                        <td>
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal"
                                                                data-target="#modalBuktiPembayaran{{ $siswa->id }}">
                                                                Lihat Bukti Pembayaran
                                                            </button>
                                                        </td>
                                                        <!-- Modal -->
                                                        <div class="modal fade"
                                                            id="modalBuktiPembayaran{{ $siswa->id }}" tabindex="-1"
                                                            role="dialog"
                                                            aria-labelledby="modalBuktiPembayaran{{ $siswa->id }}Label"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="modalBuktiPembayaran{{ $siswa->id }}Label">
                                                                            Bukti Pembayaran - {{ $siswa->nama }}
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <img class="w-100"
                                                                            src="{{ asset('upload/bukti_pembayaran/' . $siswa->bukti_pembayaran) }}"
                                                                            alt="Bukti Pembayaran {{ $siswa->nama }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <td>
                                                            <div class="flex mx-1 item-center">
                                                                <a href="" class="btn btn-primary mx-1">Edit</a>
                                                                <form action="" method="POST">

                                                                    <input type="submit" value="Delete"
                                                                        class="btn btn-danger" class="mt-2">
                                                                </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        {{ $siswas->links() }}

                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- end Modal --}}

                    </div>


                </div>
        </section>
    </div>
    <!-- /.card -->
    @include('layouts.footer')
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <!-- Tambahkan sebelum penutup tag body -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
@include('layouts.script')

</html>
