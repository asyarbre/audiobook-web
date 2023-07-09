@props(['disabled' => false])

<input {{ $disabled ? 'disable' : '' }} {{ $attributes->merge(['class' => 'input input-bordered w-full']) }} />