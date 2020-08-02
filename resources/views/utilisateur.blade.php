@extends('layout')

@section('content')
<div class="section">

	<div class="title is-1">
		{{$utilisateur->email}}
	</div>
</div>

@if(Auth()->user()->email == Request()->email)

<form method="POST" action="/message" class="section">
	@csrf
	<div class="field">
		<label class="label">Message</label>
		<div class="control">
			<textarea class="textarea" rows="5" name="contenu" placeholder="Votre message ici"></textarea>
		</div>
			@if($errors->has('contenu'))
				<span class="help is-danger">{{$errors->first('contenu')}}</span>
			@endif
	</div> 

	<div class="field">
		<div class="control">
			<input type="submit" class="button is-link" name="submit" value="Envoyer le message">
		</div>
	</div>


</form>
@endif



@endsection