<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <label class="form-label" for="{{ $inputName }}">{{ $label }}</label>
    <input class="form-control" type="text" name="{{ $inputName }}">
    @error($inputName)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
