@extends('base')

@section('title', 'Ajout d\'un acteur')


@section('content')
<main class="container">
	<h1>Ajout d'un acteur</h1>


	<form action="" method="POST">
		@csrf
		<div class="mb-3">
			<label for="name" class="form-label">Nom de l'acteur</label>
			<input type="text" class="form-control" id="name" name="name" value="{{ is_object($acteur) ? $acteur->name : '' }}">
		</div>
		<div class="mb-3">
			<label for="name" class="form-label">Description de l'acteur</label>
			<textarea class="form-control" id="description" name="description">{{ is_object($acteur) ? $acteur->description : '' }}</textarea>
		</div>
		<div class="mb-3">
			<label for="name" class="form-label">Description de l'acteur</label>
			<input type="text" class="form-control" id="picture" name="picture" value="https://via.placeholder.com/200x200.png">
			<div class="form-text">La gestion d'image n'est pas présente.</div>
		</div>

		<button type="submit" class="btn btn-primary">{{ $acteur->id != 0 ? 'Actualiser' : 'Créer' }}</button>
		<a href="{{ route('allActeurs') }}" class="btn btn-danger">annuler</a>

	</form>

	</section>
</main>
@endSection