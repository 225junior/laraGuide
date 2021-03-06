@extends('layout')

@section('content')
<div class="section">

	<div class="title is-1"><h1>Bienvenue {{Auth()->user()->email}} </h1></div>
	<figure class="image image is-96x96">
		<img src="storage/{{Auth()->user()->avatar}}">
	</figure>

</div>

<!-- formulaire de photo de profile -->
<form method="POST" action="avatar_update" class="section" enctype="multipart/form-data">
	@csrf
	<div class="field column">
		<div class="file">
			<input class="file-input" type="file" name="avatar" placeholder="avatar">
			<span class="file-cta">
				<span class="file-icon">
					<i class="fas fa-upload"></i>
				</span>
				<span class="file-label">Choisit un avatar…</span>
			</span>

			@if($errors->has('avatar'))
				<span class="help is-danger">{{$errors->first('avatar')}}</span>
			@endif
		</div>
	</div>

	<div class="field">
		<div class="control">
			<input type="submit" class="button is-link" name="submit" value="Modiffier Avatar">
		</div>
	</div>
</form>


<!-- formulaire de mot de passe -->
<form method="POST" action="password_update" class="section">
	@csrf
	<div class="columns">
	<div class="field column">
		<label class="label">Password</label>
			<input class="input" type="password" name="password" placeholder="password">
			@if($errors->has('password'))
				<span class="help is-danger">{{$errors->first('password')}}</span>
			@endif
	</div>



	<div class="field column">
		<label class="label">Password confirmation</label>
			<input class="input" type="password" name="password_confirmation" placeholder="password_confirmation">
			@if($errors->has('password_confirmation'))
				<span class="help is-danger">{{$errors->first('password_confirmation')}}</span>
			@endif
	</div></div>

	<div class="field">
		<div class="control">
			<input type="submit" class="button is-link" name="submit" value="Modiffier Mot de Passe">
		</div>
	</div>
</form>

@endsection