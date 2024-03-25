@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome del progetto <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error ('name') is-invalid @enderror" name="name" id="name"
                maxlength="150"
                required/>
                @error ('name')
                <div>
                    <p class="text-danger">{{ $message }}</p>
                </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione del progetto <span class="text-danger">*</span></label>
                <textarea class="form-control @error ('description') is-invalid @enderror" name="description" id="description" rows="3" required></textarea>
                @error ('description')
                <div>
                    <p class="text-danger">{{ $message }}</p>
                </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <input type="text" class="form-control @error ('category') is-invalid @enderror" name="category" id="category"
                maxlength="50"/>
                @error ('category')
                <div>
                    <p class="text-danger">{{ $message }}</p>
                </div>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="link" class="form-label">Link al progetto</label>
                <input type="text" class="form-control @error ('link') is-invalid @enderror" name="link" id="link"/>
                @error ('link')
                <div>
                    <p class="text-danger">{{ $message }}</p>
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection