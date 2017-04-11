@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Jadwal Mahasiswa </strong>
		<a href="{{url('jadwal_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Jadwal Mahasiswa </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama Mahasiswa </th>
				<th> NIM Mahasiswa </th>
				<th> Nama Matakuliah </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaJadwal_matakuliah as $jadwal)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $jadwal->mahasiswa->nama or 'nama kosong' }}</td>
					<td>{{ $jadwal->mahasiswa->nim or 'nim kosong' }}</td>
					<td>{{ $jadwal->dosen_matakuliah->matakuliah->title or 'matakuliah kosong' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('jadwal_matakuliah/edit/'.$jadwal->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('jadwal_matakuliah/'.$jadwal->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('jadwal_matakuliah/hapus/'.$jadwal->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop