<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('page_title')Login</title>
    <link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
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
		#login {
		box-shadow: 0 0 2px rgba(0, 0, 0, 0.2),  
					0 1px 1px rgba(0, 0, 0, .2),
					0 3px 0 #fff,
					0 4px 0 rgba(0, 0, 0, .2),
					0 6px 0 #fff,  
					0 7px 0 rgba(0, 0, 0, .2);
		position: absolute;
		z-index: 0;
		#login:before {
		content: '';
		position: absolute;
		z-index: -1;
		border: 1px dashed #ccc;
		top: 5px;
		bottom: 5px;
		left: 5px;
		right: 5px;
		box-shadow: 0 0 0 1px #fff;
			}
		}
		h1 {
    text-shadow: 0 1px 0 rgba(255, 255, 255, .7), 0px 2px 0 rgba(0, 0, 0, .5);
    text-transform: uppercase;
    text-align: center;
    color: #666;
    margin: 0 0 30px 0;
    letter-spacing: 4px;
    font: normal 26px/1 Verdana, Helvetica;
    position: relative;
}

h1:after, 
h1:before {
    background-color: #777;
    content: "";
    height: 1px;
    position: absolute;
    top: 15px;
    width: 120px;   
}

h1:after {      
    right: 0;
}

h1:before {
    background-image: linear-gradient(right, #777, #fff);
    left: 0;
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
                <a href="{{url('/')}}" class ="navbar-brand"><i style="color:grey;" class="fa text-default fa-chevron-left"></i>Kembali Ke Halaman Awal</a>
            </div>
        </div>
    </nav>
    <div class="clearfix"></div>
    <div class="col-md-4 col-md-offset-4">
		@if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>	
				@endforeach
			</ul>
        </div>
        @endif
        <div class="panel panel-default">
			<div class="panel-heading">
				<strong><h1>Log In</h1></strong>
			</div>
			{!! Form::open(['url'=>'login2','class'=>'form-horizontal','value'=>"{{ csrf_token() }}"]) !!}
			<div class="form-group" style="margin-top: 15px;">
				<label class="col-sm-4 control-label">Username</label>
				<div class="col-sm-8">
					{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username",'value'=>"{{ csrf_token() }}"]) !!}
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label">Password</label>
				<div class="col-sm-8">
					{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password",'value'=>"{{ csrf_token() }}"]) !!}
				</div>
			</div>
			<div style="width: 100%;text-align: center;">
				<button class="btn btn-primary">Masuk</button>
				<button type="reset" class="btn btn-danger">Ulangi</button>
				<h5><a href="{{ url('/register') }}">Belum punya akun? Register Disini</a></h5>
			</div>
			{!! Form::close() !!}
		</div>
    </div>
    <script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        $(function(){
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>

</body>
</html>