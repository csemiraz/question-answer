@extends('front-end.layouts.app')

@section('title', 'Edit')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
            <div class="alert alert-secondary text-center" role="alert">
                <div class="d-flex align-items-center">
                    <h4>Edit Question</h4>
                    <div class="ms-auto">
                        <a href="{{ route("questions.index") }}" class="btn btn-outline-secondary">Back to all Quesitons</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('questions.update', $question->id) }}" method="POST">
                        @method('PUT')
                        @include("front-end.questions._form", ['buttonText' => 'Update Question'])
                    </form>
                </div>
            </div>
            
            </div>
        </div>
    </div>
@endsection