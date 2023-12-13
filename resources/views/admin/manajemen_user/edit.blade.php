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
                        <div class="card my-2">
                            <div class="card-body">
                                <div class="form-body ">
                                    <form method="post" action="/admin/manajemen_user/{{ $user->id }}" novalidate>
                                        @method('put')
                                        @csrf
                                        <div class="form-group">
                                            <label for="id" class="font-weight-bold">ID User</label>
                                            <input id="id" name="id" type="text" autocomplete="off"
                                                class="form-control" placeholder="ID Kelas" value="{{ $user->id }}"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="name" class="font-weight-bold">Nama
                                                User</label>
                                            <input id="name" name="name" type="text" autocomplete="off"
                                                class="form-control" placeholder="name" value="{{ $user->name }}"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="font-weight-bold">Email</label>
                                            <input id="email" name="email" type="text" autocomplete="off"
                                                class="form-control" placeholder="email" value="{{ $user->email }}"
                                                required>
                                            <small id="emailError" class="text-danger"></small>
                                        </div>

                                        <div class="form-group custom-dropdown">
                                            <label for="Role" class="font-weight-bold">Role User</label>
                                            <div class="custom-dropdown">
                                                <select id="role" name="role" autocomplete="on"
                                                    class="form-control">
                                                    <option value="admin"
                                                        {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                                    <option value="pengajar"
                                                        {{ $user->role == 'pengajar' ? 'selected' : '' }}>Pengajar
                                                    </option>
                                                    <option value="user"
                                                        {{ $user->role == 'user' ? 'selected' : '' }}>Siswa</option>
                                                </select>
                                            </div>
                                            <div class="my-2 flex justify-end space-x-2">
                                                <button type="button" class="btn btn-danger"
                                                    onclick="batalClicked()">Batal</button>
                                                <input type="submit" class="btn btn-primary" value="Submit">
                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> @include('layouts.footer')
    </div>
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
