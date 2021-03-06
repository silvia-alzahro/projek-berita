<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.bagian.sidebar')
        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.bagian.navbar')
                <!-- End of Topbar -->


                <div class = "row">
                    <div class ="col-lg-12">
                        <div class = "panel panel-default">
                            <div class="panel-heading">
                                Tampil Data Berita
                            </div>
                            <form Action="" method="post">
                            @csrf
                            @method('put')
                                <div class="panel-body">
                                <label>Judul:</label>
                                <input type="text" class="form-control" name="judul" value="{{$berita->judul}}" disabled>
                                </div>
                                <div class="panel-body">
                                    <label>Isi</label>
                                    <input type="text" class="form-control" name="isi" value="{{$berita->isi}}" disabled>
                                </div>
                                <div class="panel-body">
                                <label>Nama Kategori</label>
                                <input type="text" class="form-control" name="nama_kategori" value="{{$berita->kategori->nama_kategori}}" disabled>
                                </div>
                                <div class="panel-body">
                                 <label>Poto</label>
                                <img src="{{ $berita->image() }}" height="75" style="padding:10px;" />
                                </div>
                                <div class="panel-body">
                                <label>Nama Penulis</label>
                                <input type="text" class="form-control" name="nama_penulis" value="{{$berita->nama_penulis}}" disabled>
                                </div>
                                <div class="panel-body">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" value="{{$berita->tanggal}}" disabled>
                                </div>
                    </form>
                        </div>
                         <!-- / .panel -->
                    </div>
                    <!-- /.col-lg-12-->
                </div>


                <!-- TABEL -->
                    <!-- /.row -->
                    </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('backend/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('backend/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('backend/js/demo/chart-pie-demo.js')}}"></script>

</body>
</html>