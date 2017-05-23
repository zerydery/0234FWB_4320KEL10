<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PT. Josstenant's</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

			.top-right{
				padding-right: 0px;
                position: absolute;
                right: 10px;
                top: 5px;
            }
            .menu:hover{
				padding-top: 25px;
				padding-bottom: 10px;
				background-color: lightblue;
            }

            .content {
                text-align: center;
				border: 2px solid black;
				border-radius: 12px;
            }

            .title {
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			.demo1 {width: 500px;height: 260px;overflow: hidden;position: relative;margin:0 auto}
.demo1 img {
  position: absolute;
  top: 0;
  left: 0;
  height: inherit;	
  width: auto;
  height: 100%;
  float: left;
  transition: all 0.8s;
  -moz-transition: all 0.8s;
  -webkit-transition: all 0.8s;
  -ms-transition: all 0.8s;
  -o-transition: all 0.8s}

.demo1 .decs-info h3 {
  padding: 0px;
  margin-left: -5px;
  font-size: 22px;
  font-weight: 300;
  font-family: Verdana}

.demo1 .decs-info h4 {
  padding: 0px;
  padding-bottom: 13px;
  margin-left: -5px;
  font-size: 14px;
  letter-spacing: 3px;
  width: 100%;
  font-family: Verdana;
  text-transform: uppercase;
  border-bottom: 2px solid #000}

.demo1 .decs-info p {
  padding-top: 13px;
  font-size: 14px;
  line-height: 20px;
  font-family: Verdana;
  margin-left: -5px;}

.demo1 .decs-info {
  width: 43%;
  height: 89%;
  position: absolute;
  top: 0%;
  left: 50%;
  padding: 3% 4%;
  background: blue;
  color: white;
  transition: all 0.5s ease-in-out;
  -moz-transition: all 0.4s;
  -webkit-transition: all 0.4s;
  -ms-transition: all 0.4s;
  -o-transition: all 0.4s;}

.demo1:hover .decs-info {
  display: block !important;
  color: white;
  background: rgba(0,157,40, 0.85);
  left: 0px;
  top: 0px;}

.demo1 .text {
  width: 50%;
  height: inherit;
  background: #000;
  float: left;
  position: absolute;
  left: 50%}

.demo1 .text p {
  padding: 100px 0px 0px 20px;
  font-size: 24px;
  font-family: Verdana;
  font-weight: 700;
  color: #fff}

.demo1 .text a {border-left:4px double red;margin-left:20px;}
.demo1 .text a, .bgRight .text {
  padding: 0px 0px 0px 8px;
  font-size: 12px !important;
  color: #FF5A22 !important;
  font-family: Verdana !important}

.demo1 .text {float: left}
.bgRight p {color: #000 !important}
.bgRight {
  background: #eee !important;
  width: 50% !important;
  height: inherit !important}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
			<div class="top-right links" >
				
                    @if (Auth::check())
                        <a class="menu" href="{{ url('/master') }}">Home</a>
						<a class="menu" href="{{ url('/logout') }}">Logout</a>
                    @else
                        <a class="menu" href="{{ url('login2') }}">Login</a>
                        <a class="menu" href="{{ url('/register') }}">Register</a>
                    @endif
                
			</div>

            <div class="content">
                <div class="title m-b-md">
                    Koperasi Simpan Pinjam
                </div>
                <div class="links" style="padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
                   <div class="demo1">
					<img src="http://ppikpm.gontor.ac.id/wp-content/uploads/2014/03/LOGO-KOPERASI-BARU-2.jpg"><div class="decs-info">
					<h3>Website KSP khusus untuk anggota koperasi PT. Joss Tenants</h3>
					<p>Info lebih lanjut hubungi nomor dibawah<br>CP. 082155750830(Chigga)<br>085212301283(Spitzery)</p>
					</div>
					<div class="bgRight text">
					<p style="padding-top: 10px;">Koperasi Simpan Pinjam PT. Joss Tenants</p>
					<h5><--INFO SELENGKAPNYA</h5>
					</div>
				   </div>
                </div>
            </div>
        </div>
    </body>
</html>
