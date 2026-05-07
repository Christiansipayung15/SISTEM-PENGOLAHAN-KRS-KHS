<div>
   <button type="submit" {{ $attributes->merge(['class' => 'btn btn-primary w-100 fw-bold']) }}>
    {{ $slot }}
</button>
</div>