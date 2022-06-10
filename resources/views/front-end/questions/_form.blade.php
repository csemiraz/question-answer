@csrf
<div class="mb-3">
    <label for="question-title" class="form-label">Question Title</label>
    <input type="text" name="title" value="{{ old('title', $question->title) }}" class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" id="question-title">
    @if($errors->has('title'))
    <span class="invalid-feedback">
        {{ $errors->first('title') }}
    </span>
    @endif
</div>
<div class="mb-3">
    <label for="question-body" class="form-label">Explan your question</label>
    <textarea class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" id="question-body" rows="10">{{ old('body', $question->body) }}</textarea>
    @if($errors->has('body'))
    <span class="invalid-feedback">
        {{ $errors->first('body') }}
    </span>
@endif
</div>
<button type="submit" class="btn btn-outline-primary">{{ $buttonText }}</button>