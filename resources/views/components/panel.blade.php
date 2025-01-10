@php
    $classes =
        'p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-800 transition-colors duration-1000 group';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
