@extends('layouts.app')
@section('content')

<app-header background="/app/img/home-bg.jpg" heading="Clean Blog" subheading="A Clean Blog Theme by Start Bootstrap"></app-header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @if($posts)
                @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{ url('posts',[$post->id, $post->slug]) }}">
                        <h2 class="post-title">
                            {!!$post->title!!}
                        </h2>
                        <h3 class="post-subtitle">
                            {!! $post->summary !!}
                        </h3>
                    </a>
                    <p class="post-meta">{{$post->user->name}} {{$post->published_at}}</p>
                </div>
                <hr>
                @endforeach
            @endif

            <!-- Pager -->
            {{ $posts->links() }}
        </div>
    </div>
</div>
 
@endsection
