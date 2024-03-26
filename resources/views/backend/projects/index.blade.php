@extends('layouts.app')

@section('content')
    <div class="py-4">
        <div class="container">
            <a class="btn btn-danger btn-lg my-4 w-100" href="{{ route('projects.create') }}">Aggiungi un progetto</a>        
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-capitalize">id</th>
                        <th scope="col" class="text-capitalize">nome progetto</th>
                        <th scope="col" class="text-capitalize">descrizione</th>
                        <th scope="col" class="text-capitalize">tipologia</th>
                        <th scope="col" class="text-capitalize">link progetto</th>
                        <th scope="col" class="text-capitalize">slug</th>
                        <th scope="col" class="text-capitalize">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)    
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>
                            <a class="text-danger" href="{{ route('projects.show', $project->slug) }}">
                                {{ $project->name }}
                            </a>
                        </td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->category }}</td>
                        <td>
                            <a class="text-danger" href="{{ $project->link }}">
                                {{ $project->link }}
                            </a>
                        </td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <div class="d-flex column-gap-2">
                                <a class="btn btn-warning" href="{{ route('projects.edit', $project->slug) }}">
                                Modifica
                                </a>
    
                                <button type="button" id="modal-btn" class="btn btn-danger" data-bs-toggle="modal" data-id="{{ $project->slug }}" data-path="projects" data-bs-target="#deleteModal">
                                    Elimina
                                </button>
                            </div>
                                       
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('partials.modal')
    </div>
@endsection
