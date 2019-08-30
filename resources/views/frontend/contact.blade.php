@extends('frontend.layout')

@section('content')

<form>

    <fieldset class="form-group">
		<label for="formGroupExampleInput">Nom & Prenom </label>
		<input type="text" class="form-control" name="nom_prenom_contact"  placeholder="Nom & Prenom">
	</fieldset>

    <fieldset class="form-group">
		<label for="formGroupExampleInput">Email </label>
		<input type="text" class="form-control" name="email_contact"  placeholder="Email">
	</fieldset>

    <fieldset class="form-group">
		<label for="formGroupExampleInput2">Message</label>
		<textarea class="form-control" name="message"></textarea>
	</fieldset>
	<input class="btn btn-primary" type="button" value="envoyez">
</form>

@endsection
