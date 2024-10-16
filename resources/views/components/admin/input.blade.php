<input class="form-control form-control-solid  @error($name)is-invalid @enderror" id="{{ $id ?? '' }}"
    type="{{ $type ?? 'text' }}" name="{{ $name }}" step="0.01"
    placeholder="{{ $placeholder ?? 'Complete the field' }}" maxlength="250" value="{{ old($name, $value ?? '') }}"
    aria-label="{{ $placeholder ?? 'input' }} example" {{ $required ?? '' }}>
{{-- <input id="{{ $id ?? '' }}" type="{{ $type ?? 'text' }}"
    class="form-control form-control-solid @error($name)is-invalid @enderror" name="{{ $name }}" step="0.01"
     placeholder="{{ $placeholder ?? '' }}" value="{{ old($name, $value ?? '') }}"
    {{ $required ?? '' }} /> --}}
@error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
