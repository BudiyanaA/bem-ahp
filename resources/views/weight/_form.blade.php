<div class="row">
  <div class="form-group 	@if ($errors->has('code')) has-error @endif col-md-6 col-lg-6">
		<label for="email2">Alternatif</label>
		{{ Form::select('choice', ['1' => 'Pendaftar A', '2' => 'Pendaftar B'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Alternatif', 'id' => 'alternative-option' ]) }}
		@if ($errors->has('code')) <small class="form-text help-block" style="color:red">{{ $errors->first('code') }}</small> @endif
	</div>
  <div class="form-group 	@if ($errors->has('code')) has-error @endif col-md-6 col-lg-6">
		<label for="email2">Administrasi</label>
		{{ Form::select('choice', ['1' => 'Berkas Lengkap', '2' => 'Berkas Kurang'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Administrasi', 'id' => 'administration-option' ]) }}
		@if ($errors->has('code')) <small class="form-text help-block" style="color:red">{{ $errors->first('code') }}</small> @endif
	</div>
  <div class="form-group 	@if ($errors->has('code')) has-error @endif col-md-4 col-lg-4">
		<label for="email2">Pengetahuan</label>
		{{ Form::number('code', null, ['class' => 'form-control', 'placeholder' => 'Pengetahuan']) }}
		@if ($errors->has('code')) <small class="form-text help-block" style="color:red">{{ $errors->first('code') }}</small> @endif
	</div>
  <div class="form-group 	@if ($errors->has('name')) has-error @endif col-md-4 col-lg-4">
		<label for="email2">Psikotest</label>
		{{ Form::number('name', null, ['class' => 'form-control', 'placeholder' => 'Psikotest']) }}
		@if ($errors->has('name')) <small class="form-text help-block" style="color:red">{{ $errors->first('name') }}</small> @endif
	</div>
  <div class="form-group 	@if ($errors->has('name')) has-error @endif col-md-4 col-lg-4">
		<label for="email2">Interview</label>
		{{ Form::number('name', null, ['class' => 'form-control', 'placeholder' => 'Interview']) }}
		@if ($errors->has('name')) <small class="form-text help-block" style="color:red">{{ $errors->first('name') }}</small> @endif
	</div>
  <div class="form-group 	@if ($errors->has('code')) has-error @endif col-md-12 col-lg-12">
		<label for="email2">Portofolio</label>
		{{ Form::select('choice', ['1' => 'Sesuai', '2' => 'Tidak Ada'], null, ['class' => 'form-control', 'placeholder' => 'Pilih Portofolio', 'id' => 'portfolio-option' ]) }}
		@if ($errors->has('code')) <small class="form-text help-block" style="color:red">{{ $errors->first('code') }}</small> @endif
	</div>
</div>
