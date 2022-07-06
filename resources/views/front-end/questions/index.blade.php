@extends('front-end.layouts.app')

@section('title', 'Questions')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="alert alert-secondary text-center" role="alert">
                <div class="d-flex align-items-center">
                    <h3>All Questions</h3>
                    <div class="ms-auto">
                        <a href="{{ route("questions.create") }}" class="btn btn-outline-secondary">Ask Question</a>
                    </div>
                </div>
            </div>
            @include('front-end.layouts._message')
            @foreach($questions as $question)
            <div class="card mb-2">
                <div class="row">
                    <div class="col-md-1">
                        <div class="counters">
                            <div class="vote">
                                <strong>{{ $question->votes }}</strong> {{ Str::plural('vote', $question->voltes) }}
                            </div>
                            <div class="status {{ $question->status }}">
                                <strong>{{ $question->answers }}</strong> {{ Str::plural('answer', $question->answers) }}
                            </div>
                            <div class="view">
                                <strong>{{ $question->views }}</strong> {{ Str::plural('view', $question->views) }}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-11">
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{ route('questions.show', $question->slug) }}">{{ $question->title }}</a></h5>
                            <form action="{{ route('questions.destroy', $question->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-danger float-end" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            
                            @if(Auth::id() == $question->user_id)
                            <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-outline-success btn-sm float-sm-end me-1">Edit</a>
                            @endif
                            <p>Asked by <a href="#">{{ $question->user->name }}</a>
                                <small class="text-muted">{{ $question->created_at->diffForHumans() }}</small>  
                            </p>
                            <p class="card-text">{{ Str::limit($question->body, 250) }}</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            <div class="col-md-12">
                {{ $questions->links() }}
            </div>
        </div>
    </div>
@endsection