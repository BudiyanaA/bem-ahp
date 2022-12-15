@extends('layouts.app')

@section('title')
Nilai Bobot
@endsection

@section('content')

@if (Session::has('error'))
	<div class="alert alert-danger alert-dismissible" role="alert">
		{{ Session::get('error') }}
	</div>
@endif

<div class="row">
	<div class="col-md-12">
		<div class="card">

    {!! Form::model($weight, ['route' => ['bobot.update', $weight->id], 'class' => 'form-horizontal', 'method' => 'PUT' ]) !!}

			<div class="card-header">
				<div class="card-title">Edit Alternatif</div>
			</div>
			<div class="card-body">

        @include('weight._form')

        <div class="card-action">
			  	<button class="btn btn-success">Submit</button>
			  	<a href="{{ route('bobot.index') }}" class="btn btn-danger">Cancel</a>
			  </div>
      </div>

		{{ Form::close() }}

    </div>
  </div>
</div>
@endsection