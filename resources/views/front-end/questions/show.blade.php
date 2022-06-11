@extends('front-end.layouts.app')

@section('title', 'Show')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      {{ $question->title }}
                      <a class="btn btn-outline-success btn-sm float-end" href="{{ route('questions.index') }}">Back to all questions</a>
                    </div>
                    <div class="card-body">
                      {{ $question->body }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection