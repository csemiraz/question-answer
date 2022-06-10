@extends('front-end.layouts.app')

@section('title', 'Create')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
            <div class="alert alert-secondary text-center" role="alert">
                <div class="d-flex align-items-center">
                    <h3>Ask Question</h3>
                    <div class="ms-auto">
                        <a href="{{ route("questions.index") }}" class="btn btn-outline-secondary">Back to all Quesitons</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{ route('questions.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="question-title" class="form-label">Question Title</label>
                          <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" id="question-title">
                          @if($errors->has('title'))
                            <span class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </span>
                          @endif
                        </div>
                        <div class="mb-3">
                          <label for="question-body" class="form-label">Explan your question</label>
                          <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" id="question-body" rows="10"></textarea>
                          @if($errors->has('body'))
                          <span class="invalid-feedback">
                              {{ $errors->first('body') }}
                          </span>
                        @endif
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Ask the question</button>
                    </form>
                </div>
            </div>
            
            </div>
        </div>
    </div>
@endsection