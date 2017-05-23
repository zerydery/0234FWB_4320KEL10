<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('page_title')PT. Josstenant's</title>
    <!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/common.css') }}">
    <style type="text/css">
        body {
            padding-top: 70px;
            padding-bottom: 70px;
        }
        .starter-template{
            padding: 40px 15px;
            text-align: center;
        }
        .form-harizontal{
            padding: 15px 10px;
        }
        footer{
            padding-top: 15px;
            text-align: right;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('/')}}" class ="navbar-brand">PT. Joss Tenant's</a>
            </div> <div class="clearfix"></div>
    <div id="wrapper" class="active">  
    <!-- Sidebar
            <!-- Sidebar -->
    <div id="sidebar-wrapper" style="width: 200px">
		<ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
        </ul>
        <ul id="sidebar_menu" class="sidebar-nav">
           <li><a href="{{url('/pinjamanawalang')}}">Lihat Pinjaman Pribadi</a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">
           <li><a href="{{url('/simpananawalang')}}">Lihat Simpanan Aktif</a></li>
        </ul>
		<ul class="sidebar-nav" id="sidebar">
		<li><a href="{{url('logout')}}">Logout</a>
		</ul>
      </div>
      <div class="clearfix"></div>
    <div class="container">
        @if (Session::has('informasi'))
        <div class="alert alert-info">
            <strong>Informasi :</strong>
            {{Session::get('informasi')}}
        </div>
        @endif  
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @yield('container')
    </div>
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <footer class="container">
            <!-- Please dont delete this -->
            <span>&copy PT. Joss Tenant's | 2017</span></a>
            <!--/ Please dont delete this -->
        </footer>
    </nav>
<!--     <script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
 -->    <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
             <script type="text/javascript" src="{{asset('js/menux.js')}}"></script>

    <script type="text/javascript">
        $(function(){
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>

</body>
</html>