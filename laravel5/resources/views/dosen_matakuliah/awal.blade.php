@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong> Seluruh Data Jadwal Dosen </strong>
		<a href="{{url('dosen_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class = "fa fa-plus"></i> Jadwal Dosen </a>
	<div class="clearfix"></div>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th> No. </th>
				<th> Nama Dosen </th>
				<th> NIP Dosen </th>
				<th> Nama Matakuliah </th>
				<th> Aksi </th>
			</tr>
		</thead>
		<tbody>
			<?php $x=1;?>
			@foreach ($semuaDosen_matakuliah as $doskul)
				<tr>
					<td>{{ $x++ }}</td>
					<td>{{ $doskul->dosen->nama or 'nama kosong' }}</td>
					<td>{{ $doskul->dosen->nip or 'nip kosong' }}</td>
					<td>{{ $doskul->matakuliah->title or 'matakuliah kosong' }}</td>
				
					<td>
						<div class="btn-group" role="group">
						<a href="{{url('dosen_matakuliah/edit/'.$doskul->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>	
						<a href="{{url('dosen_matakuliah/'.$doskul->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('dosen_matakuliah/hapus/'.$doskul->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
		</tbody>
	</table>
</div>
@stop