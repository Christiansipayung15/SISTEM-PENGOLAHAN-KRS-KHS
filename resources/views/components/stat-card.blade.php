@props(['title', 'count', 'color', 'id']) {{-- Tambahkan baris ini! --}}

<div class="col-md-4">
    <div class="card card-stat p-4 border-start border-{{ $color }} border-4">
        <h6 class="text-muted small fw-bold">{{ $title }}</h6>
        <h2 class="fw-bold text-{{ $color }}">{{ $count }}</h2>
    </div>
</div>