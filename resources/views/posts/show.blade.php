@extends('plantilla')
@section('titulo','Ficha Post')

@section('contenido')

<div class="container my-5">

    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h1 class="mb-0">{{ $post->titulo }}</h1>
        </div>

        <div class="card-body">
            <h5 class="card-title">Contenido:</h5>
            <p class="card-text">{{ $post->contenido }}</p>

            <ul class="list-group list-group-flush mb-3">
                <li class="list-group-item">
                    <strong>Creado el:</strong> {{ $post->created_at->format('d/m/Y H:i') }}
                </li>
                <li class="list-group-item">
                    <strong>Modificado el:</strong> {{ $post->updated_at->format('d/m/Y H:i') }}
                </li>
                <li class="list-group-item">
                    <strong>Autor:</strong> {{ $post->usuario->name }}
                </li>
            </ul>

            <div class="d-flex gap-2 flex-wrap">
                <a class="btn btn-info" href="{{ route('posts.editarPrueba', $post->id) }}">Editar</a>
                <a class="btn btn-secondary" href="{{ route('posts.index') }}">Volver al listado</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres borrar este post?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar post</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
