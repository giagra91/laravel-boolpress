@extends('layouts.app')

@section('content')
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            <div class="col-12 p-2 mb-2 text-center">
                <h1>
                    {{ $post->title }}
                </h1>
                <h3>
                    {{ $post->user->name }}
                </h3>
                <h3>
                    {{ $post->created_at }}
                </h3>
                <h3>
                    Categorie:
                    @foreach ($post->categories as $category)
                        <span>{{ $category->name }}</span>
                    @endforeach
                </h3>
            </div>
            <div class="col-6 mb-2">
                @if (str_starts_with($post->image_url, "http://") || str_starts_with($post->image_url, "https://") )
                    <img class="w-100" src="{{ $post->image_url }}" alt="{{ $post->title }}">
                @else
                <img class="w-100" src="{{ asset("/storage") . "/" . $post->image_url }}" alt="{{ $post->title }}">
                @endif
            </div>
            <div class="col-6 p-2">
                <p>{{ $post->content }}</p>
                <a href="{{route("admin.posts.edit", $post)}}" class="btn btn-primary">Modifica post</a>

            </div>
        </div>
    </div>
@endsection