@extends('master')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('dosen')}}"><i class="fa text-default fa-chevron-left"></i></a> Perbarui data Dosen</strong>
	</div>
	{!! Form::model($dosen,['url'=>'dosen/edit/'.$dosen->id,'class'=>'form-horizontal']) !!}
		@include('dosen.form')
		<div style="width:100%;text-align:right; ">
		<button class="btn btn-info"><i class="fa fa-save"></i> Perbarui</button>	
		<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
		</div>
	{!! Form::close() !!}	
</div>
@stop