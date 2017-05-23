@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Data Angsuran Pinjaman</strong>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nomor Pinjaman </th>
				<th> Nama Peminjam </th>
				<th> Nama Pengelola </th>
				<th> Tanggal Pembayaran</th>
			</tr>
		</thead>
		<tbody>
		
			
			<?php $x=(1+($semuaMahasiswa->CurrentPage()-1)*10); ?>
			@foreach ($semuaAngsur as $angsur)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $angsur->pinjam->id or 'kosong' }}</td>
					<td>{{ $angsur->pinjam->anggota->nama or '' }}</td>
					<td>{{ $angsur->pengelola->nama or '' }}</td>
					<td>{{ $angsur->created_at or '' }}</td>
					
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
<div align="right">
	{{$semuaAngsur->render()}}
</div>
@stop