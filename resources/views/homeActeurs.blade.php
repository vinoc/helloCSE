@extends('base')

@section('title', 'Profile Browser')

@section('content')

<main>
    <h1>Profile Browser</h1>

    <section class="container">
        <div class="accordion" id="accordionActeur">
            @foreach($acteurs as $acteur)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $acteur->id }}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $acteur->id }}" aria-expanded="true" aria-controls="collapse{{ $acteur->id }}">
                        {{ $acteur->name }}
                    </button>
                </h2>
                <div id="collapse{{ $acteur->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $acteur->id }}" data-bs-parent="#accordionActeur">
                    <div class="accordion-body">
                        <img src="{{ $acteur->picture }}" alt="Photo de {{ $acteur->name }}" class="border border-5">
                            {{ $acteur->description }}
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </section>
</main>
@endSection