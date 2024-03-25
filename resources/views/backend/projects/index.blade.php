@extends('layouts.app')

@section('content')
    <div class="py-5">
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)    
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->category }}</td>
                        <td>
                            <a href="{{ $project->link }}">
                                {{ $project->link }}
                            </a>
                        </td>
                        <td>{{ $project->slug }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
