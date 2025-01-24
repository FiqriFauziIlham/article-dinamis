@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Articles</h1>
    <div class="row">
        @forelse ($articles as $article)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ $article->content }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Created at: {{ $article->created_at->format('M d, Y') }}</small>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted">No articles available.</p>
        @endforelse
    </div>
</div>
@endsection
