
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
    <link rel="stylesheet" href="{{ asset('style/css/resume.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="{{ url('readdosen') }}">Dosen</a>
                </li>
                <li>
                    <a href="{{ url('readmahasiswa')}}">Mahasiswa</a>
                </li>
                <li>
                    <a href="{{ url('readmakul')}}">Mata Kuliah</a>
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
                        <h1>Jumlah Seluruh Data Terinput</h1>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                    <img src="https://1.bp.blogspot.com/-XMQLAjYh7Gs/X4p8Sc60SGI/AAAAAAAAJqQ/rSglJrxLnUgb4eBYiA20MKLpiYOSFsc_QCLcBGAsYHQ/s0/USM.png">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                    <h4>Dosen</h4>
                    <h2>{{ $dosen }}</h2>
                </div>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridetwo">
                    <img src="https://1.bp.blogspot.com/-XMQLAjYh7Gs/X4p8Sc60SGI/AAAAAAAAJqQ/rSglJrxLnUgb4eBYiA20MKLpiYOSFsc_QCLcBGAsYHQ/s0/USM.png">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                    <h4>Mahasiswa</h4>
                    <h2>{{ $mhs }}</h2>
                </div>
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-4 ridethree">
                    <img src="https://i.pinimg.com/originals/ca/2f/6a/ca2f6afd67315a4c980dabd908fe2719.jpg">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                    <h4>Makul</h4>
                    <h2>{{ $makul }}</h2>
                </div>
              </div>
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
