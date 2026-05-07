<div>
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary w-100 fw-bold']) }} style="background: #004d99; border: none; padding: 10px;">
    {{ $slot->isEmpty() ? 'Submit' : $slot }}
</button>
</div>