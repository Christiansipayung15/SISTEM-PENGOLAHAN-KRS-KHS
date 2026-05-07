<div>
    @props(['label', 'name', 'type' => 'text', 'placeholder' => ''])

<div class="mb-3 text-start">
    <label class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" class="form-control" placeholder="{{ $placeholder }}" required>
</div>
</div>