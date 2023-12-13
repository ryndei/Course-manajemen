<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<style>
    /* Style untuk membuat dropdown mirip dengan input teks */
    .custom-dropdown {
        position: relative;
        display: inline-block;
        margin-bottom: 15px;
    }

    .custom-dropdown label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .custom-dropdown select {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        width: 100%;
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        outline: none;
    }

    .custom-dropdown select:focus {
        border-color: #007bff;
    }

    /* Style untuk panah dropdown */
    .custom-dropdown::after {
        content: '\25BC';
        /* Panah ke bawah (Unicode karakter) */
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        font-size: 16px;
    }
</style>

<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- /.sidebar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper ">
        <!-- Main content -->
        <section class="content">
            <div class="container h-200 w-200">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div id="tabel-user">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title font-bold py-3 mr-2">Tambah User</h3>
                                </div>
                                <div>
                                    <form method="post" action="/admin/manajemen_user.index" novalidate>
                                        @csrf
                                        <div class="form-group">
                                            <label for="id" class="font-weight-bold">ID User</label>
                                            <input id="id" name="id" type="text" autocomplete="off"
                                                class="form-control" placeholder="ID User" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="font-weight-bold">Nama
                                                User</label>
                                            <input id="name" name="name" type="text" autocomplete="off"
                                                class="form-control" placeholder="Nama" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="font-weight-bold">Email</label>
                                            <input id="email" name="email" type="text" autocomplete="off"
                                                class="form-control" placeholder="email" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="font-weight-bold">Password</label>
                                            <input id="password" name="password" type="password" autocomplete="off"
                                                class="form-control" placeholder="email" value="" required>
                                        </div>
                                        <div class="form-group custom-dropdown">
                                            <label for="Role" class="font-weight-bold">Role User</label>
                                            <div class="custom-dropdown">
                                                <select id="role" name="role" autocomplete="off"
                                                    class="form-control">
                                                    <option value="" disabled selected>Pilih Role User</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="pengajar">Pengajar</option>
                                                    <option value="user">Siswa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-white">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Batal</button>
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
