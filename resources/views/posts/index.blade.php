<!-- 投稿一覧ページ -->
@extends('layouts.app')

@section('content')
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container">
                <h2>投稿一覧</h2>

                @foreach($posts as $post)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                            <p><small>投稿者：{{ $post->user->name }}</small></p>
                        </div>
                    </div>
                @endforeach
            </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                </div>
            </div>
            <a href="{{ url('/posts/create') }}" class="btn btn-primary mt-3">新規投稿する</a>
        </div>
    </div>
@endsection
