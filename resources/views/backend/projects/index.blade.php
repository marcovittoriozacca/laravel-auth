@extends('layouts.app')

@section('content')
    <div class="py-4">
        <a class="btn btn-success btn-lg" href="{{ route('projects.create') }}">Aggiungi un progetto</a>        
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
                            <a href="{{ route('projects.show', $project->id) }}">
                                {{ $project->name }}
                            </a>
                        </td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->category }}</td>
                        <td>
                            <a href="{{ $project->link }}">
                                {{ $project->link }}
                            </a>
                        </td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('projects.edit', $project->id) }}">
                            Modifica
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
