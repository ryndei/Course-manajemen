<!DOCTYPE html>
<html lang="en">
@include('layouts.head')


<body class="hold-transition sidebar-mini layout-navbar-fixed">
    <!-- Sidebar -->
    @include('layouts.sideuser')
    <!-- /.sidebar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-xl px-4 mt-4">
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2"
                                src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="Profile Picture">
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                            <!-- Profile picture upload button-->
                            <button class="btn btn-primary" type="button">Upload new image</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Detail Akun</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('user.daftar') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- Form Group (username)-->
                                <div class="mb-2">
                                    <label class="small mb-1" for="name">Nama </label>
                                    <input class="form-control" id="name" type="text"
                                        value="{{ Auth::user()->name }}">
                                </div>


                                <div class="mb-3">
                                    <label class="small mb-1" for="email">Email </label>
                                    <input class="form-control" id="email" type="email"
                                        placeholder="Enter your email address" value="{{ Auth::user()->email }}">
                                </div>
                                <!-- Form Row-->
                                <!-- Form Row        -->
                                <div class="row gx-5 mb-3">
                                    <!-- Form Group (location)-->
                                    <div class="col-md-12">
                                        <label class="small mb-1" for="alamat">Alamat</label>
                                        <input class="form-control" id="alamat" type="text"
                                            placeholder="Enter your location" value="{{ Auth::user()->alamat }}">
                                    </div>
                                </div>
                                <!-- Form Group (email address)-->
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="no_telepon">Nomor Telepon</label>
                                        <input class="form-control" id="no_telepon" type="tel"
                                            placeholder="Enter your phone number"
                                            value="{{ Auth::user()->no_telepon }}">
                                    </div>
                                    <!-- Form Group (birthday)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="tanggal_lahir">Tangal Lahir</label>
                                        <input class="form-control" id="tanggal_lahir" type="text" name="birthday"
                                            placeholder="Enter your birthday" value="{{ Auth::user()->tanggal_lahir }}">
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="button">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
    <!-- /.content-wrapper -->
    @include('layouts.modal')

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

<style>
    body {
        margin-top: 20px;
        background-color: #f2f6fc;
        color: #69707a;
    }

    .img-account-profile {
        height: 10rem;
        justify-content: center;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .card {
        box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }

    .card .card-header {
        font-weight: 500;
    }

    .card-header:first-child {
        border-radius: 0.35rem 0.35rem 0 0;
    }

    .card-header {
        padding: 1rem 1.35rem;
        margin-bottom: 0;
        background-color: rgba(33, 40, 50, 0.03);
        border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }

    .form-control,
    .dataTable-input {
        display: block;
        width: 100%;
        padding: 0.875rem 1.125rem;
        font-size: 0.875rem;
        font-weight: 400;
        line-height: 1;
        color: #69707a;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #c5ccd6;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.35rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
</style>
</body>


</html>
