@extends('layouts.app')

@section('content')
<div class="container">
    <h3>{{ Auth::user()->name }}</h3>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->category }}</p>
                  <a href="{{ route('post.index') }}" class="btn btn-primary">Go Home</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
