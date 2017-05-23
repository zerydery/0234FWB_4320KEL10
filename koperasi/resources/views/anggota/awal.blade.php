@extends('master2')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Simpanan</strong>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama Peminjam </th>
				<th> Nama Pengelola </th>
				<th> Jumlah </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=(1+($semuaMahasiswa->CurrentPage()-1)*10);?>
			@foreach ($semuaSimpanan as $simpanan)
				<tr>
				
					<td>{{ $x++ }}</td>
					<td>{{ $simpanan->anggota->nama or 'nama kosong' }}</td>
					<td>{{ $simpanan->pengelola->nama or 'nama kosong' }}</td>				
					<td>{{ $simpanan->jumlah or 'jumlah kosong' }}</td>
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('simpan/hapus/'.$simpanan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Ambil Simpanan">Ambil Simpanan</a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
<div align="right">
	{{$semuaSimpanan->render()}}
</div>
@stop