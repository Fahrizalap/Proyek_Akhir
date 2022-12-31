
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/css/bootsrap.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/bootsrap.main.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/simple-sidebar.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <b>Tampilan Menu</b>
                    </a>
                </li>
                <li>
                    <a href="{{ url('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <a href="{{ url('readdosen') }}">Dosen</a>
                </li>
                <li>
                    <a href="{{ url('readmahasiswa') }}">Mahasiswa</a>
                </li>
                <li>
                    <a href="{{ url('readmakul') }}">Mata Kuliah</a>
                </li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <li> 
                        <a href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </li>
                </form>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Data Mahasiswa</h1>

                        <div class="container">
            @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
            <a href="{{ url('createmahasiswa') }}" type="button" class="btn btn-success">Tambah +</a>
            <div class="row">
                <table class="table mt-2 table-success table-stripped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                        <tr class="text-center">
                            <th scope="row">{{ $row->nim }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->alamat }}</td>
                            <td>{{ $row->semester }}</td>
                            <td>{{ $row->prodi }}</td>
                            <td>{{ $row->created_at->format('d-m-Y') }}</td>
                            <td>
                                <a href="{{ url('editmahasiswa/'.$row->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-mahasiswa/'.$row->id) }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
                        <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('style/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('style/js/bootstrap.min.js')}}"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
