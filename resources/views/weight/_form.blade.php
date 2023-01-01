<div class="row">
  <div class="form-group 	@if ($errors->has('alternative_id')) has-error @endif col-md-12 col-lg-12">
		<label for="email2">Alternatif</label>
		{{ Form::select('alternative_id', $alternatives, null, ['class' => 'form-control', 'placeholder' => 'Pilih Alternatif', 'id' => 'alternative-option' ]) }}
		@if ($errors->has('alternative_id')) <small class="form-text help-block" style="color:red">{{ $errors->first('alternative_id') }}</small> @endif
	</div>
  <div class="form-group 	@if ($errors->has('knowledge')) has-error @endif col-md-4 col-lg-4">
		<label for="email2">Pengetahuan</label>
		{{ Form::number('knowledge', null, ['class' => 'form-control', 'placeholder' => 'Pengetahuan']) }}
		@if ($errors->has('knowledge')) <small class="form-text help-block" style="color:red">{{ $errors->first('knowledge') }}</small> @endif
	</div>
  <div class="form-group 	@if ($errors->has('psikotest')) has-error @endif col-md-4 col-lg-4">
		<label for="email2">Psikotest</label>
		{{ Form::number('psikotest', null, ['class' => 'form-control', 'placeholder' => 'Psikotest']) }}
		@if ($errors->has('psikotest')) <small class="form-text help-block" style="color:red">{{ $errors->first('psikotest') }}</small> @endif
	</div>
  <div class="form-group 	@if ($errors->has('interview')) has-error @endif col-md-4 col-lg-4">
		<label for="email2">Interview</label>
		{{ Form::number('interview', null, ['class' => 'form-control', 'placeholder' => 'Interview']) }}
		@if ($errors->has('interview')) <small class="form-text help-block" style="color:red">{{ $errors->first('interview') }}</small> @endif
	</div>
	<div class="form-check 	@if ($errors->has('administration_id')) has-error @endif col-md-6 col-lg-6">
		<label>Administrasi</label><br/>
		@foreach($administrations as $key => $value)
		<label class="form-radio-label">
			{{ Form::radio('administration_id', $key, null, ['class' => 'form-radio-input']); }}
			<span class="form-radio-sign">{{  $value }}</span>
		</label>
		@endforeach
		@if ($errors->has('administration_id')) <small class="form-text help-block" style="color:red">{{ $errors->first('administration_id') }}</small> @endif
	</div>
	<div class="form-check 	@if ($errors->has('portfolio_id')) has-error @endif col-md-6 col-lg-6">
		<label>Portfolio</label><br/>
		@foreach($portfolios as $key => $value)
		<label class="form-radio-label">
			{{ Form::radio('portfolio_id', $key, null, ['class' => 'form-radio-input']); }}
			<span class="form-radio-sign">{{  $value }}</span>
		</label>
		@endforeach
		@if ($errors->has('portfolio_id')) <small class="form-text help-block" style="color:red">{{ $errors->first('portfolio_id') }}</small> @endif
	</div>
</div>
