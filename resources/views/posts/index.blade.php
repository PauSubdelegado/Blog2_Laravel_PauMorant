@extends('plantilla')

@section('contenido')

<div class="container my-5">

    <h1 class="mb-4 text-center">Posts del blog</h1>

    @foreach($posts as $post)
        <div class="card mb-3 shadow-sm">
            <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div>
                    <h3 class="card-title mb-1">{{ $post->titulo }}</h3>
                    <h6 class="text-muted">Creado por: {{ $post->usuario->name }}</h6>
                </div>

                <div class="d-flex gap-2 mt-3 mt-md-0">
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-info">Ver</a>

                    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar este post?');" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <div class="d-flex justify-content-center mt-4">
        {{ $posts->links() }}
</div>

@endsection
