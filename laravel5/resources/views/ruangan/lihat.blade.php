@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('ruangan')}}"><i style="color:#8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data ruangan</strong>

	</div>
	<table class="table">
			<tr>
				<td>Title</td>
				<td>:</td>
				<td>{{ $ruangan->title }}</td>
			</tr>
			<tr>
				<td class="col-xs-4"> Dibuat tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{ $ruangan->created_at }}</td>
			</tr>
			<tr>
			<td class="col-xs-4"> Tanggal Update</td>
				<td class="col-xs-1">:</td>
				<td>{{ $ruangan->updated_at }}</td>
			</tr>
	</table>
</div>
@stop