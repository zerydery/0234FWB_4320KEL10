<div class="form-group" style="margin-top: 15px;">
	<label class="col-sm-2 control-label" id="nama" style="padding-left: 20px;">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','id'=>'nama','placeholder'=>"Nama"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="nim" style="padding-left: 20px;">Jenis Kelamin</label>
	<div class="col-sm-10">
		{!! Form::select('jk',['Laki-laki' => 'Laki-laki','Perempuan' => 'Perempuan'],'Laki-laki',['class'=>'form-control','id'=>'jk']) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat" style="padding-left: 20px;">Tempat Lahir</label>
	<div class="col-sm-10">
		{!! Form::text('tmp_lahir',null,['class'=>'form-control','id'=>'tmp_lahir','placeholder'=>"Tempat Lahir"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat" style="padding-left: 20px;">Tanggal Lahir</label>
	<div class="col-sm-10">
		{!! Form::date('tang_lahir', date('D-m-y'), ['class' => 'form-control', 'id'=>'tang_lahir']) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat" style="padding-left: 20px;">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','id'=>'alamat','placeholder'=>"Alamat"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="jabatan" style="padding-left: 20px;">Jabatan</label>
	<div class="col-sm-10">
		{!! Form::select('jab',[
		'1' => 'Manajer',
		'2' => 'Kepala Divisi',
		'3' => 'Staf',
		'4' => 'Pekerja',],null,['class'=>'form-control','id'=>'jab','placeholder'=>"Jabatan"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" style="padding-left: 20px;">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"]) !!}
	</div>	
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" style="padding-left: 20px;">Password</label>
	<div class="col-sm-10">
		{!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
	</div>	
</div>