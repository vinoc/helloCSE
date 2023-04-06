@extends('base')

@section('title', 'Administration des acteurs')


@section('content')
<main class="container">
    <h1>Détail de {{ $acteur->name }}</h1>


    <p>
        {{ $acteur->description }}
    </p>

    <a href="{{ route('addActeurId', $acteur->id) }}" class="btn btn-outline-success">Modifier</a>
    <a href="{{ route('deleteActeurId', $acteur->id) }}" class="btn btn-outline-danger">supprimer</a>
    </section>
</main>
@endSection