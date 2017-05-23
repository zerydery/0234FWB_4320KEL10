<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Pinjaman</title>
 <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
 <link rel="stylesheet" href="css/style.css">
 <style>
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

 </style>
</head>
<body>
 <h2><i class="fa fa-money"></i>Form Simpanan<i class="fa fa-money"></i></h2>
 <div class="form-group">
 <label class="col-sm-2 control-label" id="anggota_id">Anggotaaa</label>
  {!! Form::select('anggota_id',$anggota->listAnggota(),null,['class'=>'form-control','id'=>'anggota_id','placeholder'=>"Anggota"]) !!}
 </div>
 <div class="form-group">
 <label class="col-sm-2 control-label" id="anggota_id">Jumlah</label>
 {!! Form::select('jumlah',[
		500000 => 'Rp. 500.000',
		1000000 => 'Rp. 1.000.000',
		2000000 => 'Rp. 2.000.000',
		3500000 => 'Rp. 3.500.000',
		5000000 => 'Rp. 5.000.000',
		6000000 => 'Rp. 6.000.000'],'500000',['class'=>'form-control','id'=>'pinjam']) !!}
 </div>
 <div class="form-group">
 <label class="col-sm-2 control-label" id="anggota_id">Jumlah</label>
 {!! Form::select('angsur',[
		6 => '6 Bulan',
		12 => '12 Bulan',
		18 => '18 Bulan',
		24 => '24 Bulan'],'6',['class'=>'form-control','id'=>'angsur']) !!}
 </div>
 <label class="col-sm-2 control-label" id="anggota_id">Pengelola</label>
  {!! Form::select('pengelola_id',$pengelola->listPengelola(),null,['class'=>'form-control','id'=>'pengelola_id','placeholder'=>"Pengelola"]) !!}
 </div>
 <br/>
 </body>
