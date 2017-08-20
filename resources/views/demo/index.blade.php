@extends('layout')
@section('content')
	<div class="row">
		<div class="col-sm-12">
			{!!$grid->make()!!}
		</div>
	</div>
@endsection