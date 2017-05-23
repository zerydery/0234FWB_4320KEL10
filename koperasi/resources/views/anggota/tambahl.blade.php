<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('page_title','Register')</title>
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
        *{
 box-sizing:border-box;
 margin:0 auto;
}
body{
 background: url('../img/cover register.jpg');
}
html,body{
 font-family:Helvetica;
}
.fa-user{
    color: #2c79c0;
    padding: 0 10px;
    position: relative;
    float: left;
}
.fa-hand-o-right{
 float:right;
}
form {
 top:100px;
 position:relative;
 width:100%;
 max-width:400px;
 background-color:#FFFFFF;
 border-radius:3px;
 box-shadow:0px 0px 3px black;
}
form h2 {
 padding:20px;
 border-bottom:2px solid #60a4e3;
 text-align:center;
}
.form-group{
 padding:5px 15px;
 display:block;
}
.input-mode{
 border:1px solid silver;
 border-radius:3px;
 font-size:15px;
 height:50px;
 padding:0 10px;
 display:block;
 width:100%;
}
.cek {
 padding:10px;
 display:inline-block;
 height:20px;
 width:20px;
}
.btn-submit{
 cursor:pointer;
 padding: 10px;
    height: 50px;
    width: 100%;
    display: block;
    background-color: #2c79c0;
    color: white;
    font-size: 20px;
    border: 2px solid #135592;
    border-radius: 2px;
}
.form-cek label{
 display:inline-block;
 padding:10px;
 line-height:10px;
}
}
    </style>
</head>
<body>
    @extends('master2')
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
        <div style="height: 270px;">
			{!! Form::open(['url'=>'anggota/laporan','class'=>'form-horizontal','style'=>'top: 20px; margin-right: 10px;']) !!}
			@include('anggota.laporan')
			<div style="width:100%;text-align:right;margin-bottom: 15px;">
			<button class="btn btn-primary" style="margin-bottom: 10px;">Simpan</button>
			<button type="reset" class="btn btn-danger" style="margin-bottom: 10px;">Ulangi </button>
			</div>
			{!! Form::close() !!}
		<div>
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