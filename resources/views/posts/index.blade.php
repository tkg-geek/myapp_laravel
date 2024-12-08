<!-- 投稿一覧ページ -->
@extends('layouts.app')

@section('content')
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
@endsection
