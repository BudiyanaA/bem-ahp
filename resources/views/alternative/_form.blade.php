<div class="row">
  <div class="form-group 	@if ($errors->has('email')) has-error @endif col-md-6 col-lg-6">
		<label for="email2">Email</label>
		{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
		@if ($errors->has('email')) <small class="form-text help-block" style="color:red">{{ $errors->first('email') }}</small> @endif
	</div>
    <div class="form-group 	@if ($errors->has('name')) has-error @endif col-md-6 col-lg-6">
		<label for="email2">Nama</label>
		{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama']) }}
		@if ($errors->has('name')) <small class="form-text help-block" style="color:red">{{ $errors->first('name') }}</small> @endif
	</div>
</div>
