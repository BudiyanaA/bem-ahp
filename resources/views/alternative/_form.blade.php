<div class="row">
  <div class="form-group 	@if ($errors->has('code')) has-error @endif col-md-6 col-lg-6">
		<label for="email2">Kode</label>
		{{ Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Kode']) }}
		@if ($errors->has('code')) <small class="form-text help-block" style="color:red">{{ $errors->first('code') }}</small> @endif
	</div>
    <div class="form-group 	@if ($errors->has('name')) has-error @endif col-md-6 col-lg-6">
		<label for="email2">Nama</label>
		{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nama']) }}
		@if ($errors->has('name')) <small class="form-text help-block" style="color:red">{{ $errors->first('name') }}</small> @endif
	</div>
</div>
