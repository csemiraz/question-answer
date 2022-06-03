@extends('front-end.layouts.app')

@section('title', 'Questions')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($questions as $question)
            <div class="col-md-12 mb-2">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $question->title }}</h5>
                      <p class="card-text">{{ Str::limit($question->body, 250) }}</p>
                      {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-md-12">
                {{ $questions->links() }}
            </div>
        </div>
    </div>
@endsection