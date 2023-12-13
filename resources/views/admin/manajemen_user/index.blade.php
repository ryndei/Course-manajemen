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
                        <div id="tabel-user">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title font-bold py-3 mr-2">Manajemen User</h3>
                                </div>
                                <div>
                                    <a href="{{ 'manajemen_user.create' }}" class="btn btn-info my-2">Tambah User</a>
                                    <div class="box-body">
                                        <table
                                            class="table table-bordered bg-white table-striped table-hover table-responsive">
                                            <thead>
                                                <tr class="py-2 px-4 border-b">
                                                    <th>No</th>
                                                    <th>ID Kelas</th>
                                                    <th>Nama User</th>
                                                    <th>Email</th>
                                                    <th>Role User</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $index => $user)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td>{{ $user->role }}</td>
                                                        <td>
                                                            <div class="flex mx-1 item-center">
                                                                <a href="/admin/manajemen_user/{{ $user->id }}/edit"
                                                                    class="btn btn-primary mx-1">Edit</a>
                                                                <form action="/admin/manajemen_user/{{ $user->id }}"
                                                                    method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <input type="submit" value="Delete"
                                                                        class="btn btn-danger" class="mt-2">
                                                                </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                        {{ $users->links() }}

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

</body>
@include('layouts.script')

</html>
