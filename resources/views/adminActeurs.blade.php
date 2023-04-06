@extends('base')

@section('title', 'Administration des acteurs')


@section('content')
<main class="container">
    <h1>Administration des acteurs</h1>
    <section>
        <h2>Liste des acteurs</h2>
        <a href="{{ route('addActeur')}}" class="btn btn-outline-success mb-5">Ajouter un acteur</a>
        <ul>
            @foreach($acteurs as $acteur)
            <li class="border-bottom mb-3 pb-1 ">
                <div class="flex flex-no-wrap ">
                    <a class="col-4 text-dark text-decoration-none" href="{{route('showOneActeur', $acteur->id)}}">
                        <img src="{{ $acteur->picture }}" alt="Photo de {{ $acteur->name }}" class="wh-5">
                        <p class="w-25 "><span class="text-uppercase">{{ $acteur->name }}</span><br>
                            {{ Str::limit($acteur->description, 100) }}
                        </p>
                    </a>
                    <a href="{{ route('addActeurId', $acteur->id) }}" class="btn btn-outline-success">Modifier</a>
                    <a href="{{ route('deleteActeurId', $acteur->id) }}" class="btn btn-outline-danger ">supprimer</a>
                </div>

            </li>
            @endforeach
        </ul>
        <p>Il n'y a pas de responsive sur la partie administration</p>
    </section>
</main>
@endSection