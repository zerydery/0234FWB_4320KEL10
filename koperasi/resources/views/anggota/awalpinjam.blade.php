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
				<th> Nama Peminjam </th>
				<th> Nama Pengelola </th>
				<th> Jumlah (Rp.)</th>
				<th> Kali Angsuran (Rp.)</th>
				<th> Sisa Angsuran (Rp.)</th>
				<th> Besar Angsuran (Rp.)</th>
				<th> Tanggal Peminjaman</th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
		
			
			<?php $x=(1+($semuaMahasiswa->CurrentPage()-1)*10); ?>
			@foreach ($semuaPinjaman as $pinjaman)
				<tr>
				
					<td>{{ $x++ }}</td>
					<td>{{ $pinjaman->anggota->nama or '' }}</td>
					<td>{{ $pinjaman->pengelola->nama or '' }}</td>				
					<td>{{ $pinjaman->jumlah or '' }}</td>
					<td>{{ $pinjaman->kali_angsur or '' }}</td>
					<td>{{ $pinjaman->sisa or '' }}</td>
					<td>{{ $pinjaman->angsur or '' }}</td>
					<td>{{ $pinjaman->created_at or '' }}</td>
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('/angsuran')}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Bayar pinjaman">Bayar Pinjaman</a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
<div align="right">
	{{$semuaPinjaman->render()}}
</div>
@stop