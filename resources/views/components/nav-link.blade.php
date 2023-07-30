@props(['active'])

@php
    $classes = $active ?? false ? 'active text-primary' : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
