@extends('layouts.app')

@section('content')
<div class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{ $project->name }}</h1>
                <p class="card-text">{{ $project->description }}</p>
                <p class="card-text">{{ $project->category }}</p>
                <a href="{{ $project->link }}">
                    {{ $project->link }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection