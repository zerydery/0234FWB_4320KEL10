@extends('master2')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Pinjaman</strong>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nomor Angsuran </th>
				<th> Nama Divisi </th>
				<th> Dibuat Pada</th>
			</tr>
		</thead>
		<tbody>
		
			
			<?php $x=(1+($semuaMahasiswa->CurrentPage()-1)*10); ?>
			@foreach ($semuaLaporan as $laporan)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $laporan->angsur->id or '' }}</td>
					<td>{{ $laporan->divisi->nama or '' }}</td>				
					<td>{{ $laporan->created_at or '' }}</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
<div align="right">
	{{$semuaLaporan->render()}}
</div>
@stop