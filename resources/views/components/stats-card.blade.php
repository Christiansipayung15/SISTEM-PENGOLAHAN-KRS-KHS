@props(['title', 'value', 'color', 'id' => null])

<div class="card p-3 border-start border-{{ $color }} border-5 shadow-sm h-100">
    <div class="card-body p-0">
        <h6 class="text-muted small fw-bold text-uppercase mb-1" style="font-size: 0.75rem;">{{ $title }}</h6>
        <h3 class="fw-bold mb-0" id="{{ $id }}">{{ $value }}</h3>
    </div>
</div>


{{-- resources/views/components/stat-card.blade.php --}}
@props(['title', 'value', 'color']) 

<div class="col-md-4">
    <div class="card card-stat p-4 border-start border-{{ $color }} border-4">
        <h6 class="text-muted small fw-bold">{{ $title }}</h6>
        <h2 class="fw-bold text-{{ $color }}">{{ $value }}</h2>
    </div>
</div>
