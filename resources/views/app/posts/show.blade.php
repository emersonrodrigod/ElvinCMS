@extends('layouts.app')
@section('content')

<header class="intro-header" style="background-image: url({{$post->image}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>{{$post->title}}</h1>
                    <h2 class="subheading">{{$post->summary}}</h2>
                    <span class="meta">Posted by {{$post->user->name}} {{$post->published_at}}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                {{$post->text}}
            </div>
        </div>
    </div>
</article>

@endsection