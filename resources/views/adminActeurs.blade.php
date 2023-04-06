@extends('base')

@section('title', 'Administration des acteurs')


@section('content')
<main>
    <h1>Administration des acteurs</h1>
<section>
    <h2>Liste des acteurs</h2>
    <ul>
    @foreach($acteurs as $acteur)
<li>{{ $acteur->getName() }}</li>
    @endforeach
    </ul>
</section>
</main>
@endSection