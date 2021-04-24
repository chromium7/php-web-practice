@extends('layouts.app')

@section('content')
    <div class="justify-center flex">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            {{ $user->name }}
            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach
                {{ $posts->links() }}
            @else
                <p>There are no posts</p>
            @endif
        </div>
    </div>
@endsection