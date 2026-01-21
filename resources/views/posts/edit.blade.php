@extends('plantilla')

@section('titulo', 'Editar post')

@section('contenido')
<h1>Editar post</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Título</label>
        <input type="text" name="titulo" class="form-control" value="{{ $post->titulo }}">
    </div>

    <div class="form-group">
        <label>Contenido</label>
        <textarea name="contenido" class="form-control">{{ $post->contenido }}</textarea>
    </div>

    <button class="btn btn-primary">Actualizar</button>
</form>
@endsection
